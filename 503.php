<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="www-tlwsolicitors-co-uk">

	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<title><?php bloginfo('name'); ?> &rsaquo; <?php echo $this->g_opt['mamo_pagetitle']; ?></title>
	<meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<?php if (wp_is_mobile()) { ?>
	<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">
		   
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad-retina.png" />
	<link rel="apple-touch-startup-image" href="<?php bloginfo('template_directory'); ?>/_/img/apple-start-up-img.png">
<?php } ?>

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/_/css/offline.css" type="text/css" media="all">

<?php wp_head(); ?>

</head>

<body>

	<div id="wrapper">
		
		<div id="header">
			<div class="banner-strip">
				<div class="strip strip-green"></div>
				<div class="strip strip-blue"></div>
			</div>
			
			<h1><span><?php bloginfo('name'); ?></span></h1>
			
			<span class="slogan">Keeping You<br>on the Road</span>
			
			<a href="/login/" class="login-link" title="Login">Login</a>
			
		</div>
	
		<div id="content">
			<div class="container">
				<div class="intro">
					<?php echo $this->mamo_template_tag_message(); ?>
				</div>
				
				<div class="btn-box">
					<h3><span>For More Information</span></h3>
					<?php if (wp_is_mobile()) { ?>
					<a href="tel:0123 456 789" class="info-btn link" title="Email MotoPro"><i class="fa fa-phone"></i>Freephone: 0123 456 789</a>
					<?php } else { ?>
					<div class="info-btn tel"><i class="fa fa-phone"></i>Freephone: 0123 456 789</div>
					<?php } ?>
					<a href="mailto:info@motoprolegal.co.uk" class="info-btn link" title="Email MotoPro"><i class="fa fa-envelope"></i>info@motoprolegal.co.uk</a>
				</div>
			</div>
		</div>
 
		<div id="footer">
		<div class="footer-icon"></div>
			<div class="container">
				<span>&copy; 2014 <a href="http://www.tlwsolicitors.co.uk" title="Go to TLW Solicitors website" target="">TLW Solicitors</a>. <br>All rights reserved.</span>
				<span class="standards">Authorised and regulated by the <br><a href="http://www.sra.org.uk/" target="_blank" title="Got to Solicitors Regulation Authority website">Solicitors Regulation Authority.</a></span>
			</div>
		</div>

	</div>
	
	<?php wp_footer(); ?>
	
</body>
</html>