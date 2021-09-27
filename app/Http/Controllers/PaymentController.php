<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function __invoke(Request $request)
    {
        // $trx_info = $request->only(['status', 'tx_ref', 'transaction_id']);
        $trx_id = $request->transaction_id;
        $trx_ref = $request->tx_ref;
        $trx_status = $request->status;

        //curl request should be dependent on transaction status==success
        if ($trx_status === 'successful') {
            $curl = curl_init("https://api.flutterwave.com/v3/transactions/{$trx_id}/verify");

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: Bearer " . env('FLUTTER_SEC_KEY')
                ),
            ));
            $response = curl_exec($curl);

            curl_close($curl);
            // convert response to from json to php obj
            $responseObj = json_decode($response);
            // validation of responseObj from flutterwave

            /**
             * @var $resData gets the data:property 4rm the json response & stores it in a variable
             */
            $resData = $responseObj->data;
            dd($resData);
            /**
             * validate the amount that was processed by FWAVE: get the fee from the db and test against the one submitted or processed by FWAVE
             */
            /** 
             * @var $expectedFee refers to the registration fee from the db  
             * */
            $expectedFee = DB::table('fees')->where('title', 'REGISTRATION FEE')->pluck('cost')->first();
            // {udo refactor this code to use exceptions instead of returning false on failure}
            // verify the fee paid by the user to us via flutterwave
            if ($resData->amount !== $expectedFee) return dd('amount is false');
            if ($resData->charged_amount < $expectedFee) return dd('charged amount is false');
            //  this one below is unnecessary
            // NB: $resData->amount_settled refers to the amount my coy will receive 4rm FW after their charges(>=1%) have been deducted. this is usually smaller than the expectedFee
            if ($resData->amount_settled > $expectedFee) {
                ('send an email to myself to notify me that  flutterwave has overpayed me. this would naturally be a miracle or a product of some bug in flutterwave');
            }

            // verify status
            if ($resData->status !== 'successful') return dd('status is false');

            // verify currency //later we can integrate the currency into the db
            if ($resData->currency !== 'NGN') return dd('currency is false');

            // after passing all checks we can now add value to the user and update the db to show that this user has paid
            $auth_user = auth()->user();
            $auth_user->has_paid = true;
            $auth_user->save();
            // dd(auth()->user()->has_paid);
        }

        return view('auth.thankyou');
    }
}
