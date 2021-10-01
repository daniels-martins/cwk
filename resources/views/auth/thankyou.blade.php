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
		<div class="col-md-1 ">
			<!-- spacer -->
			@if(Session::has('status'))
			{{-- {{ 'what do u mean? Good!' }} --}}
			@else
			{{-- {{ 'Bad one? bad!' }} --}}
			@endif
		</div>

		<div class="col-sm-12  col-md-9  message height-full">
			<div class="px-5">
				<p class="message">
					<strong class="top">Payment  success</strong> <br> <br>
				<p class="alert-success text-success spacious-1">
					@If (session('status')){{ session('status') }} @endif
				</p>
				<strong class="sub">Thank you for patronizing us</strong> Congratulations! you're well on your journey
				to being a world class web developer
				</p>
			</div>

			<div class='text-center'> <br>
				<a href="{{ route('dashboard') }}" class="block btn btn-sm ">Go home</a>
			</div>

		</div>

	</div>


</main>

@endsection