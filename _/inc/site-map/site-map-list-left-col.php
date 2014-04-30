<div class="col-sm-6 col-md-4 col-lg-4">

	<?php if ($packages) { ?>
		<h3><a href="<?php echo get_permalink($packages_page->ID); ?>"><i class="icon fa fa-dashboard fa-lg"></i><?php echo $packages_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
	
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($packages as $package) { ?>
				<li><a href="<?php echo get_permalink($package->ID); ?>"><?php echo $package->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	
	<?php } ?>
	
	<?php if ($offences) { ?>
		<h3><a href="<?php echo get_permalink($offences_page->ID); ?>"><i class="icon fa fa-road fa-lg"></i><?php echo $offences_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
	
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($offences as $offence) { ?>
				<li><a href="<?php echo get_permalink($offence->ID); ?>"><?php echo $offence->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	
	<?php } ?>
	
					
</div>