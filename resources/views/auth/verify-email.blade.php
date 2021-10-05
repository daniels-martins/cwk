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
		font-size: 1rem;
		text-transform: capitalize;
		display: block;
		/* margin: .5rem; */
		margin-left: 0px;
	}
</style>
@endsection
@section('main')
<main>
	<div class="row">
		<div class="col-sm-12 col-md-3 col-lg-2">
			<!-- spacer -->
		</div>

		<div class="mb-5 col-md-7 col-lg-6 message p-4">

			@if (Session::has('email_resend_status'))
			<div class="alert alert-info">
				{{ Session::get('email_resend_status') }}
			</div>
			@endif
			<p class="message p-2">
				<strong class="top">Thanks for signing up! </strong> <br><br>Before getting started <b> {{
					strtoupper(auth()->user()->fname) }},</b> could you verify your email address by <b> clicking on the link we
					just emailed you</b>
				<hr>
				<strong class="sub p-2"> Didn't get the mail? </strong>
				<div class="p-2"> Don't worry, If you didn't receive the email, feel free to request a new one, we will gladly send you another.</div>
			</p>

			<div class=" d-flex justify-content-between">
				<form method="post" action="{{ route('verification.send') }}" class="my-3"
					onsubmit="__submit('email_vrf_send_btn')">
					@csrf
					<div>
						<input type="submit" class="genric-btn radius primary " value="Resend Verification Email"
							name='email_vrf_send_btn' />
					</div>
				</form>

				<form method="POST" action="{{ route('logout') }}" class="my-3" onsubmit="__submit('logout_btn_global')">
					@csrf
					<button type="submit" class="genric-btn radius danger" name='logout_btn_global'>
						Log Out
					</button>
				</form>
			</div>
		</div>

	</div>


</main>

@endsection