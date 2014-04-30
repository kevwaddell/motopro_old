
		</section>
		<!-- MAIN CONTENT END -->
		
		<!-- FOOTER START -->
		<section class="footer-info">
		
		<div class="footer-icon"></div>
		
			<footer>
				
				<div class="container">
					 <div class="row">
					 	<div class="col-sm-6 col-md-3">
						 <h3 class="first-head">Packages</h3>
						 <?php wp_nav_menu(array( 
							'container' => 'false', 
							'menu' => 'Packages Footer Menu', 
							'menu_class'  => 'footer-nav list-unstyled',
							'fallback_cb' => false ) ); 
						 ?>
					 	</div>
					 	<div class="col-sm-6 col-md-3">
					 	<h3>General</h3>
						<?php wp_nav_menu(array( 
							'container' => 'false', 
							'menu' => 'General Footer menu', 
							'menu_class'  => 'footer-nav list-unstyled',
							'fallback_cb' => false ) ); 
						?>
					 	</div>
					 	<div class="col-sm-12 col-md-6">
					 		
					 		<div class="row">
					 			
					 			<div class="col-sm-6 col-sm-push-6 col-md-12 col-md-push-0">
							 	<?php wp_nav_menu(array( 
									'container' => 'false', 
									'menu' => 'Social Links Menu', 
									'menu_class'  => 'footer-social-nav list-unstyled',
									'fallback_cb' => false ) ); 
								?>
							 	</div>
							 	
							 	<div class="col-sm-6 col-sm-pull-6 col-md-12 col-md-pull-0">
								 	<div class="footer-logo">
								 	
								 		<div class="logo"></div>
								 		<?php $standards_notice = get_field('standards_notice', 'option');?>
								 		<?php if (isset($standards_notice)) { ?>
								 		<small><?php echo $standards_notice; ?></small>	
								 		<?php }  ?>
									 	
								 	</div>
							 	</div>
							 	
						 	</div>
					 	</div>
					 	
					 </div>
					 
					 <div class="row">
					 	<div class="col-lg-12">		
					 		<?php $copyright = get_field('copyright_notice', 'option');?>
							<?php if (isset($copyright)) { ?>
							<small class="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. <?php echo $copyright; ?></small>	
							<?php }  ?>
					 	</div>
					 </div>
				</div>
			</footer>
			
		</section>
		
		</div>
		<!-- wrapper end -->
		
		<?php wp_footer(); ?>

	</body>
</html>