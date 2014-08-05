<?php
$brochure_download = get_field('brochure_download');
//echo '<pre>';print_r($brochure_download);echo '</pre>';
 ?>

<aside class="actions">

	<?php if (empty($brochure_download)) { ?>
		
		<a href="<?php echo get_permalink($contact_page->ID); ?>?package=<?php echo $package_name; ?>#callback-request" class="link-btn icon-btn col-<?php echo $color; ?>"><i class="fa fa-phone fa-lg"></i>Request a Callback</a>
		
	<?php } else { ?>
	
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo get_permalink($contact_page->ID); ?>?package=<?php echo $package_name; ?>#callback-request" class="link-btn icon-btn col-<?php echo $color; ?>"><i class="fa fa-phone fa-lg"></i>Request a Callback</a>
		</div>
		
		<div class="col-md-6">
			<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn col-<?php echo $color; ?>"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
		</div>
	</div>
	
	<?php } ?>
	
	
</aside>