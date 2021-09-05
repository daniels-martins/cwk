<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class FlutterwaveController extends Controller
{
    /**
     * invoke
     *
     * @param Request $request
     *
     * @return void
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        // dd($user);
        $customer = new stdClass();
        $customer->username = $user->name;
        $customer->email = $user->email;
        $customer->amount = (int) $request->amount;
        $customer->trx_ref = $user->email . '|' . date('d-m-Y_H:i:s');

        // dd($user);
        dd($customer);


        // flutter request
        $flutterRequest = [
            'tx_ref' => $customer->trx_ref,
            'amount' => $customer->amount,
            'currency' => 'NGN', //THIS IS THE DEFAULT, SO THIS IS REDUNDANT
            'payment_options' => 'card',
            'redirect_url' => route('thankyou'),
            'customer_details' => $customer,
            'payment_options' => 'card',



        ];
        dd($flutterRequest);
    }
}
