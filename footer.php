
		</div>
		<!-- MAIN CONTENT END -->
		
		<!-- FOOTER START -->
		<div class="footer-info">
		
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
			
		</div>
		
		</div>
		<!-- wrapper end -->
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('User actions') ) : ?><?php endif; ?>
		
		<noscript>
		
		<?php $no_script_notice = get_field('no_script_notice', 'option'); ?>
		
			<div class="no-script-wrap">
				<div class="no-script-inner-wrap">
			
					<div class="no-script-inner">
						<?php echo $no_script_notice; ?>
						<a href="<?php echo get_option('home'); ?>" title="refresh" class="btn btn-default btn-lg btn-block"><i class="fa fa-refresh fa-lg"></i> Refresh</a>
					</div>
				
				</div>
			</div>
			
		</noscript>
		
		<?php wp_footer(); ?>

	</body>
</html>