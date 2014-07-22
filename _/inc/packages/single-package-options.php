<section class="sgl-package-options col-<?php echo $color; ?>">
	
	<div class="row">
	
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
		
			<h3>Package options</h3>
		
			<ul class="list-unstyled">
				
				<?php foreach ($package_options as $option) { 
				//echo '<pre>';print_r($option);echo '</pre>';	
					
				?>
				
				<li><div class="icon"><div class="icon-inner"></div></div><?php echo $option[package_option]->post_title; ?></li>
				
				<?php } ?>
			
			</ul>
			
			<?php if ($post->post_name == "motopro-ultimate") { ?>
			<small>*Meeting location requests may be declined if it is felt the location may pose a risk to the health and safety of the MP employee or agent.</small>
			<?php } ?>
			
			<?php if ($fee_guilty || $fee_not_guilty) { ?>
		
			<div class="fee-box"><?php echo ($fee_guilty) ? "Guilty Plea &pound;".$fee_guilty:""; ?><?php echo ($fee_guilty&&$fee_not_guilty) ? "<span>|</span>":""; ?><?php echo ($fee_not_guilty) ? "Not Guilty Plea &pound;".$fee_not_guilty:""; ?></div>
	
	<?php } ?>
		
		</div>
	
	</div>

</section>

