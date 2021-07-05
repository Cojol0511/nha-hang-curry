	<!-- Footer -->
	<footer id="footer" class="footer">
		<section class="footer-logo text-center p-3">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/header-logo.png" alt="" />
			</a>
		</section>
		<section class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4 footer-main--address">
						<div class="title">SEN VIET THAI CURRY RESTAURANT</div>
						<ul>
							<li class="d-flex location">
								<i class="fad fa-map-marker-alt"></i>
								<a href="	<?php echo get_theme_mod("html_maps_link") ?>">
									<?php echo get_theme_mod("html_address") ?>
								</a>
							</li>
							<li class="d-flex phone">
								<i class="fad fa-phone-rotary"></i>
								<a href="tel:<?php echo get_theme_mod("html_phone") ?>"><?php echo get_theme_mod("html_phone") ?></a>
							</li>
							<li class="d-flex time">
								<i class="fad fa-clock"></i>
								<a href=""><?php echo get_theme_mod("html_working_day") ?><br><?php echo get_theme_mod("html_working_time") ?> </a>
							</li>
						</ul>
					</div>
					<div class="
                col-12 col-md-4
                d-block d-md-flex
                justify-content-center
                footer-main--links
              ">
						<ul>
							<li class="menu-item"><a href="<?php echo get_home_url() ?>">HOME</a></li>
							<li class="menu-item"><a href="<?php echo get_home_url() ?>/reservations">RESERVATIONS</a></li>
							<li class="menu-item"><a href="<?php echo get_home_url() ?>/shop">ONLINE ORDER</a></li>
							<li class="menu-item"><a href="<?php echo get_home_url() ?>">OUR STORY</a></li>
							<li class="menu-item"><a href="<?php echo get_home_url() ?>/contact">CONTACT</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-4 footer-main--contact">
						<div class="title">SUBSCRIBE</div>

						<div class="form">
							<?php
							$form_widget = new \MailPoet\Form\Widget();
							echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
							?>
						</div>

						<div class="social">
							<a href="<?php echo get_theme_mod("html_facebook") ?>"> <i style="color: #4064ac" class="fab fa-facebook-f"></i></a>
							<a href="<?php echo get_theme_mod("html_instagram") ?>"> <i style="color: #f06595" class="fab fa-instagram"></i></a>
							<a href="<?php echo get_theme_mod("html_twitter") ?>"> <i style="color: #15aabf" class="fab fa-twitter"></i></a>
							<a href="mailto:<?php echo get_theme_mod("html_email") ?>"><i style="color: #ea4335" class="fab fa-google"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="footer-coppy text-center py-2 py-md-3">
			© Copyright Enzu Media
		</section>
	</footer>

	<div class="hotline-phone-ring-wrap">
		<div class="hotline-phone-ring">
			<div class="hotline-phone-ring-circle"></div>
			<div class="hotline-phone-ring-circle-fill"></div>
			<div class="hotline-phone-ring-img-circle"> <a href="tel:<?php echo get_theme_mod("html_phone") ?>" class="pps-btn-img"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/phone-icon.png" alt="so dien thoai" width="50">
				</a></div>
		</div>
		<div class="float-icon-hotline">
			<ul class="left-icon hotline">
				<li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="<?php echo get_theme_mod("html_facebook") ?>"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
			</ul>
		</div>
	</div>

	<nav id="mobile_menu">
		<ul class="mobile-menu d-block d-lg-none">
			<li class="menu-item"><a href="<?php echo get_home_url() ?>">HOME</a></li>
			<li class="menu-item"><a href="<?php echo get_home_url() ?>/reservations">RESERVATIONS</a></li>
			<li class="menu-item"><a href="<?php echo get_home_url() ?>/shop">ONLINE ORDER</a></li>
			<li class="menu-item"><a href="<?php echo get_home_url() ?>/contact">CONTACT</a></li>
		</ul>
	</nav>

	<button id="scrollToTopBtn" class="btn "><i class="far fa-chevron-up"></i></button>

	<?php wp_footer(); ?>
	</div>
	</body>

	</html>