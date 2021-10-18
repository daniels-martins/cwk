@extends('admin.layouts.app')
@section('main')
<main>
	<!--? Hero Start -->
	<div class="slider-area_no_padding">
		<div class="slider-height2 d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="hero-cap hero-cap2 text-center">
							<h2>All Courses</h2>
							@isset($welcome_sms)
							<p style="color:white"> {!! $welcome_sms !!}</p>
							@endisset
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero End -->
  </main>
  @endsection