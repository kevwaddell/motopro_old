<div class="sidebar-feeds-block hidden-xs hidden-sm">

<h3><?php bloginfo('name'); ?> Social</h3>
	
	<ul class="list-unstyled feed-links">
		<li class="active"><a href="#twitter-feed" data-toggle="tab" title="Twitter"><i class="fa fa-twitter fa-lg"></i><span class="sr-only">Twitter</span></a></li>
		<li><a href="#facebook-feed" data-toggle="tab" title="Twitter"><i class="fa fa-facebook fa-lg"></i><span class="sr-only">Facebook</span></a></li>
		<li><a href="#google-plus-feed" data-toggle="tab" title="Twitter"><i class="fa fa-google-plus fa-lg"></i><span class="sr-only">Google+</span></a></li>
	</ul>
	
	<div class="tab-content sidebar-tab-content">
		
		<div id="twitter-feed" class="feed-panel tab-pane fade in active">
			<div class="feed-wrap">
			<?php echo do_shortcode('[wp_rss_multi_importer category="2"]'); ?>
				
			</div>

		</div>
		
		<div id="facebook-feed" class="feed-panel tab-pane fade">
			<div class="feed-wrap">
			<?php echo do_shortcode('[wp_rss_multi_importer category="1"]'); ?>
				
			</div>

		</div>
		
		<div id="google-plus-feed" class="feed-panel tab-pane fade">
			<div class="feed-wrap">
			<?php echo do_shortcode('[wp_rss_multi_importer category="3"]'); ?>
				
			</div>
		</div>

		
	</div>
	
</div>