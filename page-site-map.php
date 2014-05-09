<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

		
	<article <?php post_class(); ?>>
		
		<h2 class="text-center"><?php the_title(); ?></h2>
	
		<?php the_content(); ?>	
		
		<div class="search-form-wrap text-center">
		<?php get_search_form(); ?>
		</div>
		
	</article>
		
	<?php endwhile; ?>
	<?php endif; ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/site-map/vars.php'); ?> 
	
	<section id="site-map-lists">
	
		<div class="row">
		
			<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-left-col.php'); ?> 
		
			<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-middle-col.php'); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-right-col.php'); ?>
			
		</div>
	
	</section>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
