<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<?php
$site_map_page = get_page_by_title('Site map');
?>	

<!-- Container  -->
<div class="container">

		<article <?php post_class(); ?>>
			<h2 class="text-center">Sorry! We couldn't find it.</h2>
				
				<div class="text-center" style="margin-bottom: 20px;">
				
					<p><strong>You have requested a page or file which does not exist.</strong></p>
					
					<p>Here are a few options to find what you are looking for.</p>
					
					<p><strong class="red-txt">1)</strong> Double check the web address for typos.<br>
					<strong class="red-txt">2)</strong> Head back to our <a href="<?php echo get_option('home'); ?>" title="Home page">home page</a>.<br>
					<strong class="red-txt">3)</strong> Visit our website <a href="<?php echo get_permalink($site_map_page->ID); ?>" title="Home page">sitemap here</a>.<br>
					<strong class="red-txt">4)</strong> Use our search box below.</p>
				
				</div>
				
				<div class="search-form-wrap text-center">
				<?php get_search_form(); ?>
				</div>
		</article>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
