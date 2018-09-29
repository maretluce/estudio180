<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!--caracteres-->
		<meta charset="<?php bloginfo('charset'); ?>">
		<!--titulo-->
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>		
		<!--favicon-->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">		
		<!--meta-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!--fuentes-->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?> >

		<!-- header -->
		<header class="header clear" role="banner">

			<!-- nav -->
			<nav class="navbar navbar-expand-lg menu-ppal" role="navigation">

				<!-- logo -->
				<div class="logo">
					<a class="navbar-brand w-65" href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					</a>
				</div>
				<!-- /logo -->

				<!-- hamburguesa -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<!-- /hamburguesa -->

				<!-- menu -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <?php
				        wp_nav_menu( array(			        	
				        	'container'         => false,
							'menu_class'        => 'navbar-nav mr-auto d-flex justify-content-around w-75',
							'menu_id'           => 'menu-ppal',
							'fallback_cb'       => '__return_false',
							'depth'             => 2,
							'walker'            =>  new Walker_Nav_Primary()
						) );
					?>
					<div class="ml-auto w-25 txt-blanco text-center bg-negro telefono"><i class="material-icons">phone</i><span> (+57)  1  6785433</span></div>
			    </div>
			    <!-- /menu -->

			    <!--<?php //the_field('telefono'); ?>-->

			</nav>
			<!-- /nav -->

		</header>
		<!-- /header -->
