<?php 
$contact_page = get_page_by_title("Request a Callback");
$brochure_download = get_field('global_brochure_download', 'option');
 ?>

<section id="quick-links mag-bot-0">

	<?php if (empty($brochure_download)) { ?>
		
		<a href="<?php echo get_permalink($contact_page->ID); ?>#callback-request" class="link-btn icon-btn col-red" title="<?php echo $contact_page->post_title; ?>"><i class="fa fa-phone fa-lg"></i><?php echo $contact_page->post_title; ?></a>
		
	<?php } else { ?>
	
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo get_permalink($contact_page->ID); ?>#callback-request" class="link-btn icon-btn" title="<?php echo $contact_page->post_title; ?>"><i class="fa fa-phone fa-lg"></i><?php echo $contact_page->post_title; ?></a>
		</div>
		<div class="col-md-6">
			<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
		</div>
	</div>
	
<?php } ?>

	
	
</section>