<?php 
/*
Template Name: Legal pages template
*/
?>

<?php get_header(); ?>

<?php 
$children_args = array(
	'sort_column' => 'menu_order',
	'hierarchical' => 0,
	'post_type' => 'page'
);

if ($post->post_parent == 0) {
$children_args['parent'] = $post->ID;
} else {
$children_args['parent'] = $post->post_parent;	
}

$children = get_pages($children_args);	

//echo '<pre>';print_r($children);echo '</pre>';

?>	

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

		<?php if (isset($children) && $post->post_parent != 0) { ?>
	 			
		<ul class="top-page-links list-unstyled clearfix">
			
		<?php foreach ($children as $child) { ?>
			
			<li<?php echo ($child->ID == $post->ID) ? ' class="active"' : ''; ?>>
				<a href="<?php echo get_permalink($child->ID); ?>" title="<?php echo $child->post_title; ?>">
				<?php echo $child->post_title; ?>
				<?php if ($child->ID == $post->ID) { ?> 				
				<i class="fa fa-angle-down fa-lg"></i>
				<?php }  ?>
				</a>
			</li>
		<?php } ?>
			
		</ul>
 		
 		<?php }  ?>
	 			
		<article <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<?php if ($post->post_name == "cookie-policy") { 
				$cookie_law_args = array(
				'post_type'	=> 'cookielawinfo',
				'post_per_page'	=> -1
				);
				$cookie_law_items = get_posts($cookie_law_args);
				//echo '<pre>';print_r($cookie_law_items);echo '</pre>';
				?>
					<div class="hidden-xs hidden-sm">
					<?php echo do_shortcode('[cookie_audit]'); ?>
					</div>
					
					
					<div id="cookie-law-list" class="hidden-md hidden-lg">
					
					<?php foreach ($cookie_law_items as $post) : 
					setup_postdata($post);	
					$type = get_post_meta(get_the_ID(), '_cli_cookie_type', true);
					$duration = get_post_meta(get_the_ID(), '_cli_cookie_duration', true);
					//echo '<pre>';print_r($type);echo '</pre>';
					//echo '<pre>';print_r($duration);echo '</pre>';
					?>
					<h4 class="icon-header"><i class="fa fa-info-circle fa-lg"></i><?php the_title() ; ?></h4>
					<p class="tag-label"><strong>Type:</strong> <?php echo $type; ?></p>
					<p class="tag-label"><strong>Duration:</strong> <?php echo $duration; ?></p>
					<p class="tag-label"><strong>Description:</strong></p>
					<div class="desc">
					<?php the_content() ; ?>
					</div>
					
					<?php endforeach; 
					wp_reset_postdata();	
					?>
					
					</div>
					
				<?php } ?>

		</article>
		
		<?php if (isset($children) && $post->post_parent == 0) { ?>
	 			
		<ul class="bottom-page-links list-unstyled clearfix">
			
		<?php foreach ($children as $child) { ?>
			
			<li><a href="<?php echo get_permalink($child->ID); ?>" title="<?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
		<?php } ?>
			
		</ul>
	 		
	 	<?php }  ?>

<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
