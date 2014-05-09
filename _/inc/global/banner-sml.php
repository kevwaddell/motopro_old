<?php $img_atts = array('class'	=> "img-responsive"); ?>

<section class="banner-img banner-img-page">
	
	<div class="banner-img-sm col-<?php echo $color; ?>">
		<div class="container">
			<?php the_post_thumbnail( 'banner-img', $img_atts ); ?>
		</div>
	</div>
	
	<div class="banner-strip-sm">
		<div class="strip strip-green"></div>
		<div class="strip strip-blue"></div>
	</div>
</section>