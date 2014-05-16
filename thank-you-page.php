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

<?php $thank_you_title = get_field('title') ; ?>	
	
		<article <?php post_class(); ?>>
				<h2><?php echo $thank_you_title; ?> <?php echo $_GET['first-name'] ; ?>.</h2>
				
				<?php the_content(); ?>

				<a href="<?php echo get_permalink($post->post_parent) ; ?>" class="link-btn" style="padding-left:10px; width: 300px;" id="reload-form">Continue</a>
				
		</article>
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>