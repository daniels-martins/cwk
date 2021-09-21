<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FlutterwaveController extends Controller
{

	protected $fsk, $fpk = 'FLWSECK_TEST-163cf59f36bed755146814f98e629fcf-X';
	/**
	 * invoke
	 *
	 * @param Request $request
	 *	using flutterwave standard has issues 
	 * @return void
	 */

	public function __invoke1(Request $request)
	{
		$user = $request->user();

		// dd($user);
		$customerAsObj = new stdClass();
		$customerAsObj->username = $user->username;
		$customerAsObj->email = $user->email;
		$customerAsObj->amount = (int) $request->amount;
		$customerAsObj->phone = $user->phone;
		$customerAsObj->trx_ref = $user->email . '|' . date('d-m-Y_H:i:s');

		$customerAsArray = [
			'username' => $customerAsObj->username,
			'email' => $customerAsObj->email,
			'phone' => $customerAsObj->phone,
		];
		// dd($user);
		// dd($customerAsObj);

		// dd($customerAsObj->trx_ref);
		// flutter request
		$flutterRequest = [
			'tx_ref' => time(),
			'amount' => $customerAsObj->amount,
			'currency' => 'NGN', //THIS IS THE DEFAULT, SO THIS IS REDUNDANT
			'payment_options' => 'card',
			// 'redirect_url' => route('thankyou'),
			'redirect_url' => 'http://localhost:8000',
			'customer' => $customerAsArray, // customer array

			'payment_options' => 'card',
			'meta' => $customerAsObj,
			'customizations' => [
				'title' => 'Enrollment Fee',
				'logo' => 'http://localhost:8000/raw_assets/login/login_img/logo.jpg',
				// url('/storage/logo/logo.png'),
				'description' => 'Payment for enrollment into KayDee Tech Web Development Programme '
			]
		];

		// call flutterwave endpoint using curl
		// $curl  =  curl_init('https://api.flutterwave.com/v3/payments');
		// 	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		// 		curl_setopt_array($curl, [
		// 			CURLOPT_RETURNTRANSFER => true,
		// 			CURLOPT_ENCODING => '',
		// 			CURLOPT_MAXREDIRS => 10,
		// 			CURLOPT_FOLLOWLOCATION => true,
		// 			CURLOPT_TIMEOUT => 0,
		// 			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		// 			CURLOPT_POSTFIELDS =>$flutterRequest,
		// 			CURLOPT_HTTPHEADER => [
		// 				'Authorization: Bearer FLWSECK_TEST-163cf59f36bed755146814f98e629fcf-X',
		// 				'content-Type: content/json' ,
		// 				'accept: application/json',
		// 			]

		// 		]);
		// 	$response = curl_exec($curl);
		// 	curl_close($curl);
		// 	echo '<pre>' . $response .'</pre>';
		// echo '<pre>' . $flutterRequest . '</pre>';




		// $response = Http::withHeaders([
		// 	'X-content-Type' => 'application/json',
		// ])->acceptJson()
		// 	->withToken('FLWSECK_TEST-163cf59f36bed755146814f98e629fcf-X')
		// 	->post('http://api.flutterwave.com/v3/payments', $flutterRequest);

		// // 	echo '<pre>' . $response .'</pre>';
		// echo '<pre>';
		// print_r($flutterRequest);
		// echo '</pre>';

		// using axios 
	}
	public function __invoke(Request $request)
	{
		// dd(request()->all());
		$amount = $request->amount;
    $referenceno = time();
    // $currency = "NGN";
    $redirect_url = route('thankyou');
    $authorization = 'Bearer'." ".$this->fsk;
    $data = [
        'amount' => $request->amount,
        'email' => $request->email,
        'metadata' => json_encode($array = [
            'info'=> 'Subbscription fee' , 
            'user_id'=> request()->user()->id,
        ]),
        'reference' => $referenceno,
    ];

    $client = new \GuzzleHttp\Client();
    $url = "https://api.flutterwave.com/v3/payments/";

		$response = $client->post($url,  [
        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => $authorization,
        ],
        'form_params' => ([
                'public_key'=>$this->fpk,
                "tx_ref"=> $referenceno,
                "amount"=>$amount,
                // "currency"=>$currency,
                "redirect_url"=>$redirect_url,
                'customer'=>[
                    'email' => $request->email,
                    'phone_number'=> '0812322203',
                    'name'=> request()->user()->username,
                ],
                "meta"=>$data,
                'customizations' =>[
                    'title' => "KayDeeTech Enrollment",
                    'description'  => 'Pay to Access Content and Tutorials',
                ]
        ])//json_encode
    ]);

    // $response = $request->send;
    dd($response);

	}
	
	
	
}
