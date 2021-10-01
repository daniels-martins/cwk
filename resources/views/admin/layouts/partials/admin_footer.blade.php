<footer>
	<!--? Footer Start-->
	<div class="footer-area footer-bg">
		<div class="container">
			<div class="footer-top footer-padding">
				<!-- footer Heading -->
				<div class="footer-heading">
					<div class="row justify-content-between">
						<div class="col-xl-6 col-lg-7 col-md-10">
							<div class="footer-tittle2">
								<h4>Stay Updated</h4>
							</div>
							<!-- Form -->
							<div class="footer-form mb-50">
								<div id="mc_embed_signup">
									<form target="_blank"
										action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
										method="get" class="subscribe_form relative mail_part" novalidate="true">
										<input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address "
											class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Your email address'">
										<div class="form-icon">
											<button type="submit" name="submit" id="newsletter-submit"
												class="email_icon newsletter-submit button-contactForm">
												Subscribe Now
											</button>
										</div>
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5">
							<div class="footer-tittle2">
								<h4>Let’s Get Social</h4>
							</div>
							<!-- Footer Social -->
							<div class="footer-social">
								<a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-google"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer Menu -->
				<div class="row d-flex justify-content-between">
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>About Us</h4>
								<ul>
									<li><a href="#">Online Learning</a></li>
									<li><a href="{{ route('about') }}">About Us</a></li>
									<li><a href="{{ route('careers') }}">Careers</a></li>
									<li><a href="#">Press Center</a></li>
									{{-- this one below requires a post request to /instructors --}}
									<li><a href="{{ route('instructors') }}">Become an Instructor</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Campus</h4>
								<ul>
									<li><a href="{{ route('our_plans') }}">Our Plans</a></li>
									<li><a href="{{ route('free_trial') }}">Free Trial</a></li>
									<li><a href="{{ route('coming_soon') }}">Academic Solutions</a></li>
									<li><a href="{{ route('coming_soon') }}">Business Solutions</a></li>
									<li><a href="{{ route('coming_soon') }}"> Government Solutions</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Study</h4>
								<ul>
									<li><a href="{{ route('todo',['todo'=>
                                       ' admissions__policy']) }}">Admissions Policy</a></li>
									<li><a href="{{ route('todo',['todo'=>
                                       ' geting_started']) }}">Getting Started</a></li>
									<li><a href="{{ route('todo',['todo'=>
                                       ' online_application']) }}">Online Application</a></li>
									<li><a href="#">Visa Information</a></li>
									<li><a href="{{ route('todo',['todo'=>
                                       ' tuition_calc']) }}">Tuition Calculator</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Spport</h4>
								<ul>
									<li><a href="{{ route('urgent_todo',['todo'=>
                                       ' support']) }}">Support</a></li>
									<li><a href="{{ route('contact') }}">Contact Us</a></li>
									<li><a href="/abandon">System Requirements</a></li>
									<li><a href="/abandon">Register Activation Key</a></li>
									<li><a href="{{ route('todo',['todo'=>
                                       ' feedback']) }}">Site feedback</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="row d-flex align-items-center">
					<div class="col-lg-12">
						<div class="footer-copy-right text-center">
							<p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved |
								This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
								<a href="https://colorlib.com" target="_blank">
									<img class="sitelogo_sm_footer" src=@env('local'){!! '"/storage/logo/kaydeeLogo.jpg"' !!} @endenv
										@production {!!'"/raw_assets/onlineedu/assets/img/logo/kaydeeLogo.jpg"'!!} @endproduction />
								</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End-->
</footer>

<!-- Scroll Up -->
<div id="back-top">
	<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<!-- cusotm js -->
<script>
//solution 2 using onsubmit="__submit()" on the form itself
// ----------------THIS IS A HYBRID SOLUTION SINCE ITS HOOKED TO THE FORM'S SUBMIT EVENT-------
function __submit(nameofSubmitBtn) {
	event.preventDefault();
	const submitBtn = document.querySelector(`[name=${nameofSubmitBtn}]`)
	if (submitBtn.getAttribute('type') == 'submit') {
		event.target.submit();	submitBtn.setAttribute('type', 'button');
		submitBtn.disabled=true; submitBtn.style.cursor='not-allowed';//4web
	}
}
</script>


<!-- JS here -->

<script src="/raw_assets/onlineedu/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="/raw_assets/onlineedu/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/popper.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="/raw_assets/onlineedu/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="/raw_assets/onlineedu/assets/js/owl.carousel.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="/raw_assets/onlineedu/assets/js/wow.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/animated.headline.js"></script>
<script src="/raw_assets/onlineedu/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="/raw_assets/onlineedu/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="/raw_assets/onlineedu/assets/js/jquery.nice-select.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint -->
<script src="/raw_assets/onlineedu/assets/js/jquery.counterup.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/waypoints.min.js"></script>

<!-- contact js -->
<script src="/raw_assets/onlineedu/assets/js/contact.js"></script>
<script src="/raw_assets/onlineedu/assets/js/jquery.form.js"></script>
<script src="/raw_assets/onlineedu/assets/js/jquery.validate.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/mail-script.js"></script>
<script src="/raw_assets/onlineedu/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="/raw_assets/onlineedu/assets/js/plugins.js"></script>
<script src="/raw_assets/onlineedu/assets/js/main.js"></script>

</body>

</html>


<script>
//solution 1 using onclick on the submit button
// use an onclick='_submit()' in html and use fn below
// ---------------------------
// function _submit() {
//event.preventDefault(formName);
//const form = document.querySelector(`form[name='${formName}']`);
// event.target.disabled=true; form.submit();
// }

//solution 2 using onsubmit="__submit()" on the form itself
// ---------------------------
// function __submit(nameofSubmitBtn) {
// 	event.preventDefault();
	// const submitBtn = document.querySelector(`[name=${nameofSubmitBtn}]`)
// 	if (submitBtn.getAttribute('type') == 'submit') {
// 		event.target.submit();	submitBtn.setAttribute('type', 'button');
// 		submitBtn.disabled=true; submitBtn.style.cursor='not-allowed';//4web
// 	}
// }

// solution 3: add an event listener to the form dynamically
// ---------------------------

</script>