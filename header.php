<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/img/headers/default.jpg">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Portfolio site for Mary Kate Meese">
		<meta name="apple-mobile-web-app-title" content="MKM Portfolio">
		<meta property="og:title" content="Mary Kate Meese">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo home_url(); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<?php if (is_front_page()): echo('<header class="hfront clear" role="banner">'); ?>
			<?php else: echo('<header class="header clear" role="banner">')?>
			<?php endif; ?>
			
				<!-- wrapper -->
				<div class="wrapper">	
				
					<!-- logo -->
					<?php if (is_front_page()): echo('<div class="flogo">'); ?>
					<?php else: echo('<div class="nlogo">')?>
					<?php endif; ?>
						<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" id="logo-img">
						</a>
					</div>
					<!-- /logo -->
					
					<!-- Site title, description and social nav -->
					<div class="site-title">
						<a href="<?php echo home_url(); ?>" id="name"><?php bloginfo('name'); ?></a>
						<a href="<?php echo home_url(); ?>" id="tagline"><?php bloginfo('description'); ?></a>
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
					</div>
					<!-- /Site title -->
					
					<!-- nav 1, with toggle button that shows up under 1100px -->
					<nav class="nav" id="topnav" role="navigation">
						<button class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

				</div>
			</header>
			<!-- /header -->