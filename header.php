<!doctype html>

<!--[if lt IE 7]><html lang="en-gb" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="en-gb" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="en-gb" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-gb" class="no-js"><!--<![endif]-->
 
	<head>
		<meta charset="utf-8">
		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- CANDDi -->
		<script async type=“text/javascript” src=“//cdns.canddi.com/p/b5a8140d78390ee105c115863919808a.js”></script>
		<!-- /END CANDDi -->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
		<?php // wordpress head functions ?> 
		<?php wp_head(); ?> 
		<?php // end of wordpress head ?>
		<!-- Google tag (gtag.js) --> 
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-0TSJYXWE6V"></script> 
		<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-0TSJYXWE6V'); </script>	
	</head> 
	
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container" class="header">
			<header  role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div class="container">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>


					<!-- menu -->
					<div class="menu">
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
									'container' => false,                           // remove nav container
									'container_class' => 'menu cf',                 // class of container (should you choose to use it)
									'menu' => __( 'header', 'bonestheme' ),  // nav name
									'menu_class' => 'nav top-nav cf',               // adding custom nav class
									'theme_location' => 'main-nav',                 // where it's located in the theme
									'before' => '',                                 // before the menu
									'after' => '',                                  // after the menu
									'link_before' => '',                            // before each link
									'link_after' => '',                             // after each link
									'depth' => 0,                                   // limit the depth of the nav
									'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
						</nav>
						<?php $footer= get_field('header', 'options'); 
							if( have_rows('header', 'options') ): ?>
								<?php while( have_rows('header', 'options') ): the_row(); 	
									$link = get_sub_field('cta_link');
							?>
								<a  href="<?php echo esc_url($link['url']); ?>">
									<button class="btn-secondary"><?php echo get_sub_field('cta_text') ?></button>
								</a>
							<?php endwhile; ?> 
						<?php endif; ?> 
					</div>

					<!-- hamburger -->
					<div id="hamburger">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</header>
