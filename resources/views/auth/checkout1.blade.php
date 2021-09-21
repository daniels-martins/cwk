@extends('layouts.app1')
@section('custom_styles')
<style>
	main {
		overflow-x: hidden;
	}

	.message {
		font-family: ubuntu;
		font-weight: 300;
		/* letter-spacing: .2rem; */

	}

	.message .top {
		letter-spacing: .2rem;
		font-size: 1.5rem;
		text-transform: capitalize;
		display: inline-block;
		margin-top: 1rem;
		margin-left: 0px;
	}

	.message .sub {
		letter-spacing: .1rem;
		font-size: 1.1rem;
		text-transform: capitalize;
		display: block;
		/* margin: .5rem; */
		margin-left: 0px;
	}
</style>
@endsection
@section('header_scripts')
@endsection
@section('main')
<main>
	<div class="row p-5">
		<!-- spacer -->
		@php $user = json_encode(auth()->user()) @endphp
		<!-- {{ var_dump($user) }} -->

		<div class="col-md-3"></div>

		<!-- main content -->
		<div class="col-sm-12  col-md-6  message height-full">
			<p class="message m-5">
				<strong class="top">Hola! <span class="laksaman">{{ auth()->user()->username }}, </span></strong> <br>
				<br><strong class="sub">Almost there</strong><br> <br> All that's left is a token of N1,050 and you're well on
				your
				journey to being a world class web developer
			</p>

			<form class="m-5">
				<script src="https://checkout.flutterwave.com/v3.js"></script>
				<input type="hidden" user="{{ $user }}" name='data' amount="1050" redirect_url={{ route('thankyou') }} />
				<button type="button" class="btn_custom btn" onClick="makePayment()">Pay Now</button>
			</form>
		</div>
	</div>
</main>
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script>
	function makePayment() {
		// declare our props
		const databox = document.querySelector('[name="data"]')
		let user = databox.getAttribute('user');
		let amount = databox.getAttribute('amount');
		let redirect_url = databox.getAttribute('redirect_url');

		
		user = JSON.parse(user);
		console.log(user.lname);
		// console.log(date = new Date());
		let date = new Date();
		const uid = date.getTime();
		console.log(date.getTime());
		

		FlutterwaveCheckout({
			// public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
			public_key: "FLWPUBK_TEST-ac7fcc09d4b71a76233e596b138c5d00-X",
			tx_ref: "RX001_"+ uid,
			amount: amount,
			currency: 'NGN',
			payment_options: "card",
			redirect_url: redirect_url,
			meta: {
				consumer_id: user.id,
				consumer_mac: "92a3-912ba-1192a" + user.username,
			},
			customer: {
				email: user.email,
				phone_number: user.phone,
				fullname: user.fname + ' ' + user.lname,
				first_name: user.fname,
				last_name: user.lname
			},
			// callback: (data) => console.log(data),
		onclose:  () => {/* close modal */},
			customizations: {
				title: "Kaydee Tech",
				description: "Payment for items in cart",
				logo: "https://images.assetsdelivery.com/compings_v2/mmfcreative/mmfcreative2101/mmfcreative210106540.jpg",
			},
		});
	}
</script>

@endsection