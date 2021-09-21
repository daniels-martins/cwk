<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            dd('we go');
            $curl = curl_init("https://api.flutterwave.com/v3/transactions/trx_id/verify");

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
                    "Authorization: Bearer {{SEC_KEY}}"
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;
           }
     
         return view('auth.thankyou');
    }
    
    
    
}
