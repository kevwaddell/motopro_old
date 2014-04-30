<?php 
$contact_page = get_page_by_title("Request a Callback");
 ?>

<section id="quick-links mag-bot-0">

	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo get_permalink($contact_page->ID); ?>" class="link-btn icon-btn" title="<?php echo $contact_page->post_title; ?>"><i class="fa fa-phone fa-lg"></i><?php echo $contact_page->post_title; ?></a>
		</div>
		<div class="col-md-6">
			<a href="#" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
		</div>
	</div>
	
</section>