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
@section('main')
<main>
	<div class="row">
		<div class="col-md-3 ">
			<!-- spacer -->
			@if(Session::has('status'))
			{{-- {{ 'what do u mean? Good!' }} --}}
			@else
			{{-- {{ 'Bad one? bad!' }} --}}

			@endif
		</div>

		<div class="col-sm-12  col-md-8  message height-full">
			<div class="px-5">
				<p class="message">
					<strong class="top">Welcome <span class="laksaman">{{ auth()->user()->name }} </span></strong> <br> <br>
				<p class="alert-success text-success spacious-1">
					@If (session('status')){{ session('status') }} @endif
				</p>
					<strong class="sub">Almost there</strong> All that's left is a token of N1,050 and you're well on your journey to being a world class web developer
				</p>

				<form method="POST" {{-- action="https://api.flutterwave.com/v3/payments"  --}} 
				action="{{ route('prep_flutterwave') }}"
				class="my-3">
					@csrf
					<div class="form-group">
						<!-- this is what the server will process -->
						<input type="hidden" value="1050" name="amount" />
						{{-- <p class="alert-success text-success spacious-1">
							@If (session('status')){{ __(session('status')) }} @endif
						</p> --}}
						<p class="alert-danger text-danger spacious-1"> @error('email'){{ 'Oops! '. $message }}@enderror
						</p>
					</div>

					<div class="col-xs-10 my-5 text-center">
						<button type="submit" class="btn_custom">
							Pay
						</button>
					</div>


				</form>
			</div>

		</div>

	</div>


</main>

@endsection