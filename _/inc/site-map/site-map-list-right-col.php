<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						
	<h3><i class="icon fa fa-check fa-lg"></i>General</h3>
	
	<?php if ($rescources_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($rescources_pages as $rescources_page) { ?>
				<li><a href="<?php echo get_permalink($rescources_page->ID); ?>"><?php echo $rescources_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<h3><a href="<?php echo get_permalink($legal_page->ID); ?>"><i class="icon fa fa-gavel fa-lg"></i><?php echo $legal_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
	
	<?php if ($legal_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($legal_pages as $legal_page) { ?>
									 
				<li><a href="<?php echo get_permalink($legal_page->ID); ?>"><?php echo $legal_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
</div>
