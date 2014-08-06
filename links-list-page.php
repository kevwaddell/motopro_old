<?php 
/*
Template Name: Links list page template
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
$classes = array('mag-bot-30');
$sb_links = get_field('sb_links');
$brochure_link = get_field('brochure_link');
 ?>	

<?php include (STYLESHEETPATH . '/_/inc/pages/child-vars.php'); ?>

	<div class="col-md-5 col-lg-4">
	
		<article <?php post_class($classes); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
		
		<div class="side-action-btns hidden-xs hidden-sm">
		
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
			<?php if ($brochure_link) { 
			$brochure_download = get_field('global_brochure_download', 'option');	
			//echo '<pre>';print_r($brochure_download);echo '</pre>';
			?>
			<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
			<?php }  ?>


		</div>
		
	</div>
	
	<div class="col-md-7 col-lg-8">
	
		<?php if (!empty($children)) { ?>
			<ul class="list-unstyled btn-list">
			<?php foreach ($children as $child) { ?>
				<li><a href="<?php echo get_permalink($child->ID); ?>" title="View: <?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
			<?php } ?>
			</ul>
		<?php } ?>
		
		<div class="action-btns visible-xs visible-sm">
		
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
			<?php if ($brochure_link) { 
			$brochure_download = get_field('global_brochure_download', 'option');	
			//echo '<pre>';print_r($brochure_download);echo '</pre>';
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
