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
								<!--Link back to Colorlib can't be removed.Template is licensed under CC BY 3.0-->
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
<script type="text/javascript" defer>
	//solution 2 using onsubmit="__submit()" on the form itself
	// ----------------THIS IS A HYBRID SOLUTION SINCE ITS HOOKED TO THE FORM'S SUBMIT EVENT-------
	function __submit(nameofSubmitBtn) {
		event.preventDefault();
		const submitBtn = document.querySelector(`[name=${nameofSubmitBtn}]`)
		if (submitBtn.getAttribute('type') == 'submit') {
			event.target.submit(); submitBtn.setAttribute('type', 'button');
			submitBtn.disabled = true; submitBtn.style.cursor = 'not-allowed';//4web
		}
	}

	document.addEventListener('DOMContentLoaded', function greeting() {
		console.log('the same thing repeated stuff',new Date().toTimeString().split(" ")[0]);
	}); 

	if (document.readyState === 'loading') {
		console.log('document is stil loading ready, just execute code here', new Date().toTimeString().split(" ")[0]);
	}
</script>

<!-- JS here -->

<script src="/raw_assets/onlineedu/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="/raw_assets/onlineedu/assets/js/vendor/jquery-3.6.min.js"></script>
<script src="/raw_assets/onlineedu/assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="/raw_assets/onlineedu/assets/js/popper.min.js"></script>

<script src="/raw_assets/onlineedu/assets/js/bootstrap.min.js"></script>

<!-- import the bootstrap animate css... plugin udo did  this -->
<script src="/raw_assets/onlineedu/assets/js/vendor/bootstrap-animate-css.js"></script>

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

<!-- laravel Js here -->
<script defer src="{{ mix('js/app.js') }}"></script>
</body>

</html>
<!-- eol__eol===================eol__eol=======================eol__eol================eol__eol -->
<!-- NB: this is outside the dom -->
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