<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="www-motoprolegal-co-uk" data-template-set="motopro-theme">

	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<?php if (wp_is_mobile()) { ?>
	<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">
		   
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/touch-icon-ipad-retina.png" />
	<link rel="apple-touch-startup-image" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-start-up-img.png">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-startup-image-1024x748.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-startup-image-2048x1496.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<?php } ?>
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="google-site-verification" content="L6441TmkYzS9QFSe5b06hxwhMSNdwuNsmcaOVpwwcOI" />

	<?php wp_head(); ?>
	
	<?php 
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';	
	
		if (is_single() || is_date() | is_category()) {
		$dir = 'news';
		}
	?>
	
</head>

<body id="<?php echo $dir ?>" <?php body_class(); ?>>

<div class="mp-wrapper nav-closed">
	
	<!-- TOP BAR START -->
	<section class="top-bar">
		
		<header class="site-links">
			
			<div class="tel">
				<div class="container">
					<?php $freephone_num = get_field('freephone_num', 'option');?>
					<?php if (isset($freephone_num)) { ?>
					<span>Freephone:</span> <a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="_gaq.push(['_trackEvent', 'Lead', 'ClickToCall']);" title="Call us now"><?php echo $freephone_num; ?></a>
					<?php }  ?>
				</div>
			</div>
			
			<div class="container">
				
				<div class="row">
				
					<div class="col-md-3 col-lg-4">
				
						<h1 id="logo">
							<a href="<?php echo get_option('home'); ?>/" class="text-hide">
							<?php bloginfo('name'); ?> - 
							<?php bloginfo('description'); ?>
							</a>			
						</h1>
						
						<button id="nav-btn" class="visible-xs visible-sm in-active"><i class="fa fa-bars fa-lg"></i><span class="sr-only">Navigation</span></button>
					
					</div>
					
					<div class="col-md-9 col-lg-8">
					
						<nav id="main-nav" class="nav-closed">
							<?php wp_nav_menu(array( 
							'container' => 'false', 
							'menu' => 'Main Menu', 
							'menu_class'  => 'menu clearfix list-unstyled',
							'fallback_cb' => false ) ); 
							?>
						</nav>
					
					</div>
				
				</div>
			
			</div>
			
		</header>
		
		<?php if (!is_front_page()) { ?>

		<div class="breadcrumbs">
			<div class="container">
	    <?php if(function_exists('bcn_display')) { bcn_display();}?>
	    	</div>
		</div>
	
		<?php } ?>

	</section>
	<!-- TOP BAR END -->
	
	<!-- MAIN CONTENT START -->
	<div class="content">
