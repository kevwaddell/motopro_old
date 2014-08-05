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
	
	<title><?php bloginfo('name'); ?> | <?php echo $this->g_opt['mamo_pagetitle']; ?></title>
	<meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
<?php if (wp_is_mobile()) { ?>
	<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="format-detection" content="telephone=yes">	   
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
			
			<a href="/login/" class="login-link" title="Login">Login</a>
			
		</div>
		
		<section id="home-slider">
			<div class="banner-img-wrap">
			
				<span class="slider-item active">
					<div id="slider-img-1" class="slider-img"></div>
				</span>
				<span class="slider-item next">
					<div id="slider-img-2" class="slider-img"></div>
				</span>
				<span class="slider-item">
					<div id="slider-img-3" class="slider-img"></div>
				</span>
				<span class="slider-item prev">
					<div id="slider-img-4" class="slider-img"></div>
				</span>
		
			</div>
		</section>
	
		<div id="content">
			<div class="container">
				<div class="intro">
					<?php echo $this->mamo_template_tag_message(); ?>
				</div>
				
				<div class="btn-box">
					<h3><span>For More Information</span></h3>
					<?php 
					$freephone_num = get_field('freephone_num', 'option');
					$office_num = "0191 293 1500";	
					?>
					<?php if (wp_is_mobile()) { ?>
					<a href="tel:<?php echo $freephone_num; ?>" class="info-btn link" title="Email MotoPro"><i class="fa fa-phone"></i>Freephone: <?php echo $freephone_num; ?></a>
					<?php } else { ?>
					<div class="info-btn tel"><i class="fa fa-phone"></i>Freephone: <?php echo $freephone_num; ?></div>
					<?php } ?>
					<a href="mailto:info@motoprolegal.co.uk" class="info-btn link" title="Email MotoPro"><i class="fa fa-envelope"></i>info@motoprolegal.co.uk</a>
				</div>
			</div>
		</div>
 
		<div id="footer">
		<div class="footer-icon"></div>
			<div class="container">
				<span>&copy; 2014 MotoPro. All rights reserved. <br>MotoPro is a trading style of <a href="http://www.tlwsolicitors.co.uk" title="Go to TLW Solicitors website" target="">TLW LLP</a></span>
				<span class="standards">Authorised and regulated by the <br><a href="http://www.sra.org.uk/" target="_blank" title="Got to Solicitors Regulation Authority website">Solicitors Regulation Authority</a></span>
			</div>
		</div>

	</div>
	
	<?php wp_footer(); ?>
	
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/_/js/offline-functions.js?ver=1.0.1"></script>
	
</body>
</html>