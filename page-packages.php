<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-sml.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		

<?php include (STYLESHEETPATH . '/_/inc/packages/parent-packages-vars.php'); ?>

		<article <?php post_class($classes); ?>>
			<h2 class="with-span text-center"><?php bloginfo('name'); ?> <span><?php the_title(); ?></span></h2>
			
			<div class="entry-txt col-span-2">
				<?php the_content(); ?>
			</div>
		</article>
		
		<section class="package-options">
			<?php include (STYLESHEETPATH . '/_/inc/packages/package-table.php'); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/packages/packages-list-mobile.php'); ?>			
		</section>
		
		<!-- Quick Links -->
		<?php include (STYLESHEETPATH . '/_/inc/packages/quick-links.php'); ?>
		<!--Quick Links end  -->
		
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
