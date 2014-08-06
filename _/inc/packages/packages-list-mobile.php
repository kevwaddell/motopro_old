<div class="package-list visible-xs">

	<h3>Package Options</h3>
	
	<?php foreach ($packages as $package) { 
	$name = get_field('package_name', $package->ID);
	$color = get_field('colour', $package->ID);
	$package_options = get_field('package_options', $package->ID);
	?>
	<div class="package-list-item col-<?php echo $color; ?>">
	
		<h4><div class="icon"><div class="icon-inner"></div></div><?php bloginfo('name'); ?><span> <?php echo $name; ?></h4>
		
		<ul class="list-unstyled">
			<?php foreach ($package_options as $option) { ?>
			<li><div class="icon"><div class="icon-inner"></div></div><?php echo $option[package_option]->post_title; ?></li>
			<?php } ?>
		</ul>
		
		<a href="<?php echo get_permalink($package->ID); ?>" title="View <?php echo $package->post_title; ?> Package">Package Details <i class="fa fa-angle-right"></i></a>
	
	</div>
	<?php } ?>
	
	<div class="message">
		<small>*Meeting location requests may be declined if it is felt the location may pose a risk to the health and safety of the MotoPro employee or agent.</small>
	</div>

</div>