<?php 
/*
Template Name: Thank page template
*/
 ?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<article <?php post_class(); ?>>
				<h2>Thank you for contacting us <?php echo $_GET['first-name'] ; ?>.</h2>
				<p>A member of our team will contact you shortly.</p>
				<a href="<?php echo get_permalink($post->post_parent) ; ?>" class="link-btn" style="padding-left:10px; width: 300px;" id="reload-form">Continue</a>
				
		</article>
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
