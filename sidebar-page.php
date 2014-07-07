<?php 
/*
Template Name: Sidebar page template
*/
?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

	<div class="row">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php 
$contact_page = get_page_by_title('Request a Callback');
$sb_links = get_field('sb_links');
$brochure_link = get_field('brochure_link');
 ?>	

	<div class="col-md-7 col-md-push-5 col-lg-8 col-lg-push-4">
	
		<article <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
				
	</div>
	
	<div class="col-md-5 col-md-pull-7 col-lg-4 col-lg-pull-8">
		
		<div class="side-action-btns">
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
			<?php if ($brochure_link) { 
			$brochure_download = get_field('global_brochure_download', 'option');	
			?>
			<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
			<?php }  ?>
			
		</div>
	
	</div>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
