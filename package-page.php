<?php 
/*
Template Name: Package page template
*/
 ?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-sml.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<?php include (STYLESHEETPATH . '/_/inc/packages/single-package-vars.php'); ?>
	
	<article <?php post_class('package-intro'); ?>>
		<div class="package-icon col-<?php echo $color; ?>"><div class="icon-inner"></div></div>
		<h2 class="with-span text-center col-<?php echo $color; ?>"><?php bloginfo('name'); ?> <span><?php echo $package_name; ?></span></h2>
		
		<div class="entry-txt col-span-2">
		<?php the_content(); ?>
		</div>
	</article>
	
	<?php if (!empty($package_options)) { ?>
	<!-- Package Options  -->
	<?php include (STYLESHEETPATH . '/_/inc/packages/single-package-options.php'); ?>
	
	<?php }  ?>
	
	<!-- Actions  -->
	<?php include (STYLESHEETPATH . '/_/inc/packages/single-package-actions.php'); ?>
		
<?php endwhile; ?>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
