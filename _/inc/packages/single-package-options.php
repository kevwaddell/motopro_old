<section class="sgl-package-options col-<?php echo $color; ?>">

	<h3>Package options</h3>
	
	<ul class="list-unstyled">
		
		<?php foreach ($package_options as $option) { 
		//echo '<pre>';print_r($option);echo '</pre>';	
			
		?>
		
		<li><div class="icon"><div class="icon-inner"></div></div><?php echo $option[package_option]->post_title; ?></li>
		
		<?php } ?>
	
	</ul>
	
	<?php if ($fee_guilty || $fee_not_guilty) { ?>
	
	<div class="fee-box">Fee: <?php echo ($fee_guilty) ? "Guilty &pound;".$fee_guilty:""; ?><?php echo ($fee_guilty&&$fee_not_guilty) ? "<span>|</span>":""; ?><?php echo ($fee_not_guilty) ? "Not Guilty &pound;".$fee_not_guilty:""; ?></div>
	
	<?php } ?>

</section>
