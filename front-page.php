<?php get_header(); ?>

<!-- Large banner  -->
<?php include (STYLESHEETPATH . '/_/inc/home-page/banner-img.php'); ?>
<!--Large banner end  -->

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
	<article <?php post_class('home-page'); ?>>
	
		<h2 class="text-center"><?php the_title(); ?></h2>
		
		<div class="entry-txt">
		 <?php the_content(); ?>
		</div>
		
	</article>
<?php endwhile; ?>
<?php endif; ?>

<!-- Quick Links -->
<?php include (STYLESHEETPATH . '/_/inc/global/quick-links.php'); ?>
<!--Quick Links end  -->

<!-- Packages -->
<?php include (STYLESHEETPATH . '/_/inc/home-page/packages.php'); ?>
<!--Packages end  -->


</div>
<!-- Container end  -->

<?php get_footer(); ?>
