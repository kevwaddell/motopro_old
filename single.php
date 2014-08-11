<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">


<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
$date = get_the_date('l - jS F - Y');	
$gallery_imgs = get_field('gallery_imgs');		
?>		

<?php if (has_post_thumbnail() || $gallery_imgs) { ?>	

<div class="row">
		
		<div class="col-md-8 col-md-push-4">
	
			<article <?php post_class(); ?>>
			
				<time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar fa-lg"></i> <?php echo $date; ?></time>
				
				<?php if (has_post_thumbnail() && empty($gallery_imgs)) { 
				$feat_img_id = get_post_thumbnail_id($post->ID);
				$thumb_img = wp_get_attachment_image_src( $feat_img_id, 'gallery-img');
				$large_img = wp_get_attachment_image_src( $feat_img_id, 'medium');
				?>
				
				<div class="feat-img-thumb visible-xs visible-sm">
					
					<a href="<?php echo $large_img[0]; ?>" rel="fancybox" class="zoomable">
						<img src="<?php echo $thumb_img[0]; ?>" class="img-responsive" width="<?php echo $thumb_img[1]; ?>" height="<?php echo $thumb_img[2]; ?>">
					</a>
					
				</div>
				
				<?php }  ?>
				
				<h2 style="margin-top: 0px;"><?php the_title(); ?></h2>
				
				<?php the_content(); ?>
				
			</article>
	
		</div>
		
		<aside class="sidebar single col-md-4 col-md-pull-8">
			
			<?php get_sidebar('single'); ?>
			
		</aside>
		
</div>

<?php } else { ?>	

	<?php $post_categories = get_the_category_list(" | "); ?>

	<article <?php post_class(); ?>>
			
		<time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar fa-lg"></i> <?php echo $date; ?></time>
		
		<h2 style="margin-top: 0px;"><?php the_title(); ?></h2>
		
		<?php the_content(); ?>
		
	</article>
	
	<?php if ($post_categories) { ?>
	<div class="topic-list">
		<?php echo $post_categories; ?>
	</div>
	<?php } ?>
	
	<div class="share-btns">
		<?php echo do_shortcode('[ssba]'); ?>
	</div>

<?php } ?>
	
<?php endwhile; ?>

<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
