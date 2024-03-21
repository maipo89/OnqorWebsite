			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<?php $footer= get_field('footer', 'options'); 
					if( have_rows('footer', 'options') ): ?>
						<?php while( have_rows('footer', 'options') ): the_row(); 
							$img = get_sub_field('logo');
							$imgVisual = $img['sizes']['medium'];	
					?>
					<div class="container">
						<!-- footer columns -->
						<div class="footer__columns">
							<img src="<?php echo $imgVisual ?>"/>
							<nav role="navigation">
								<?php wp_nav_menu(array(
								'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
								'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
								'menu' => __( 'footer', 'bonestheme' ),   // nav name
								'menu_class' => 'nav footer-nav cf',            // adding custom nav class
								'theme_location' => 'footer-links',             // where it's located in the theme
								'before' => '',                                 // before the menu
								'after' => '',                                  // after the menu
								'link_before' => '',                            // before each link
								'link_after' => '',                             // after each link
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
								)); ?>
							</nav>

							<nav role="navigation">
								<?php wp_nav_menu(array(
								'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
								'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
								'menu' => __( 'footer', 'bonestheme' ),   // nav name
								'menu_class' => 'nav footer-nav cf',            // adding custom nav class
								'theme_location' => 'footer-links',             // where it's located in the theme
								'before' => '',                                 // before the menu
								'after' => '',                                  // after the menu
								'link_before' => '',                            // before each link
								'link_after' => '',                             // after each link
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
								)); ?>
							</nav>

							<div class="footer__columns__location">
								<p><?php echo get_sub_field('location') ?></p>
							</div>

							<div class="footer__columns__logos">
								<?php if( have_rows('logos') ): ?>
									<?php while( have_rows('logos') ): the_row(); 
										$logo = get_sub_field('logo');
										$logoVisual = $logo['sizes']['medium'];	
									?>
									    <img src="<?php echo $logoVisual ?>"/>
									<?php endwhile; ?> 
								<?php endif; ?> 
							</div>
						</div>
					</div>

					<div class="container center">
						<!-- socials -->
						<div class="footer__socials">
							<div  class="footer__socials__contact">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
									<path d="M21.371 2.42281L21.3346 2.4001L20.6341 2.05496C18.3762 0.942604 15.6463 1.59553 14.1361 3.60912L13.3141 4.70522C12.406 5.91592 12.406 7.58064 13.314 8.79138C13.7977 9.43632 14.0828 10.2484 13.8251 11.0123C13.5956 11.6927 13.2113 12.3169 12.6957 12.8325C12.1801 13.3481 11.5559 13.7324 10.8754 13.9619C10.1116 14.2195 9.29951 13.9344 8.65458 13.4508C7.44386 12.5428 5.77915 12.5428 4.56845 13.4508L3.47241 14.2728C1.45883 15.783 0.805915 18.5129 1.91829 20.7707L2.24454 21.4329L2.26343 21.4714L2.28619 21.5076C2.40597 21.7006 2.57316 21.8598 2.77183 21.9699C2.9705 22.08 3.19405 22.1374 3.4212 22.1367H4.60666C6.89079 22.1367 9.15255 21.6868 11.2628 20.8127C13.3731 19.9386 15.2905 18.6574 16.9056 17.0423C18.5207 15.4272 19.8019 13.5097 20.676 11.3995C21.5501 9.28922 22 7.02745 22 4.74332V3.55781C22.0007 3.33067 21.9433 3.10712 21.8332 2.90845C21.7231 2.70977 21.564 2.54259 21.371 2.42281ZM20.3022 4.74332C20.3022 13.3979 13.2612 20.439 4.60666 20.439C4.01936 20.439 3.48307 20.1053 3.22355 19.5785L3.00382 19.1324C2.50617 18.1221 2.79834 16.9007 3.69927 16.225L4.89039 15.3317C5.9105 14.5666 7.31315 14.5666 8.33327 15.3317L8.87199 15.7357C9.01892 15.8459 9.19763 15.9055 9.38129 15.9055C11.0749 15.9036 12.6985 15.23 13.8961 14.0324C15.0936 12.8349 15.7672 11.2112 15.7691 9.51764C15.7691 9.33398 15.7095 9.15527 15.5993 9.00834L15.1953 8.46961C14.4302 7.44952 14.4302 6.04691 15.1953 5.0268L16.0882 3.83614C16.764 2.93511 17.9855 2.64294 18.9958 3.1407L19.442 3.36053C19.9687 3.62002 20.3022 4.15618 20.3022 4.74332Z" fill="white"/>
								</svg>
								<p> <?php echo get_sub_field('telephone') ?> </p>
							</div>
							<div  class="footer__socials__contact">
								<svg xmlns="http://www.w3.org/2000/svg" width="23" height="19" viewBox="0 0 23 19" fill="none">
									<path d="M0 0.863281V18.8633H23V0.863281H0ZM10.58 11.6258C10.8459 11.8193 11.1686 11.9238 11.5 11.9238C11.8314 11.9238 12.1541 11.8193 12.42 11.6258L13.5445 10.8008L21.4667 16.6133V17.3633H1.53333V16.6133L9.45554 10.8008L10.58 11.6258ZM12.6831 9.55774C11.979 10.0744 11.021 10.0744 10.3169 9.55774L1.53333 3.11328V2.36328H21.4667V3.11328L12.6831 9.55774ZM1.53333 4.98828L8.17779 9.86328L1.53333 14.7383V4.98828ZM21.4667 14.7383L14.8222 9.86328L21.4667 4.98828V14.7383Z" fill="white"/>
								</svg>
								<p> <?php echo get_sub_field('email') ?></p>
							</div>
							<div class="footer__socials__icons">
								<?php if( have_rows('icons') ): ?>
									<?php while( have_rows('icons') ): the_row(); 
										$icon = get_sub_field('icon');
										$iconVisual = $icon['sizes']['medium'];	
									?>
									    <img src="<?php echo $iconVisual ?>"/>
									<?php endwhile; ?> 
								<?php endif; ?> 
							</div>
						</div>
					</div>

					<div class="container center">
						<!-- copyright -->
						<p class="footer__copyright">
							<?php echo get_sub_field('copyright') ?>
						</p>
					</div>

				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</footer>
		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
	</body>

</html> <!-- end of site. what a ride! -->
