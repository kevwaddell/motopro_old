<?php 
/*
Template Name: What to expect at Court page
*/
?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<?php 
$booklet_download = get_field('booklet_download');
$brochure_download = get_field('global_brochure_download', 'option');
$key_length = get_post_meta( $post->ID, 'courtroom_key', true );
$keys = get_field( 'courtroom_key');
$courtroom_layout = get_field('courtroom_img');
$password_message = get_field('password_message');
$flip_book_id = get_field('flip_book_id');

/* echo '<pre>';print_r(the_post_thumbnail( 'feat-img-no-crop' ));echo '</pre>'; */
 ?>
	<?php if ( post_password_required() ) : ?>
		
	<article <?php post_class(); ?>>
		<h2 class="text-center">Protected Area</h2>
		<div class="message">
			<?php echo $password_message; ?>
		</div>

		<?php the_content(); ?>
	</article>
	
	<?php else: ?>
	
	<div class="row">
	
		<div class="col-md-7 col-md-push-5 col-lg-8 col-lg-push-4">
			
			<article <?php post_class(); ?>>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				
				<?php if (!empty($flip_book_id) && !wp_is_mobile()) { ?>
					<?php echo do_shortcode("[book id='".$flip_book_id."' /]"); ?>
				<?php } ?>
				
			</article>
			
		</div>
		
		<div class="sidebar col-md-5 col-md-pull-7 col-lg-4 col-lg-pull-8">
			
			<?php if (has_post_thumbnail()) { 
			
			$img_atts = array('class'=> "img-responsive");
			?>
			<div class="feat-img hidden-xs hidden-sm" style="margin-bottom: 10px;">
			<?php the_post_thumbnail( 'feat-img-no-crop', $img_atts ); ?>
			</div>
			
			<?php }  ?>
					
			<div class="side-action-btns">
				<?php if (!empty($booklet_download)) { ?>
				<a href="<?php echo $booklet_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download Booklet</a>
				<?php }  ?>
				
				<?php if (!empty($brochure_download)) { ?>
				<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-dashboard fa-lg"></i>Packages Brochure</a>
				<?php }  ?>
				
				<?php if ($key_length > 0) { ?>
				<a href="#courtroom-layout-modal" class="link-btn icon-btn" data-toggle="modal" data-target="#courtroom-layout-modal"><i class="fa fa-photo fa-lg"></i>Courtroom Layout</a>
				<?php }  ?>
				
			</div>
		</div>
		
		<?php if ($key_length > 0) { ?>
		
		<div id="courtroom-layout-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Magistrates Courtroom layout</h4>
					</div>
					<div class="modal-body">
					
						<div class="row">
							<div class="col-md-8">
								<figure class="img">
									<img src="<?php echo $courtroom_layout['sizes']['medium']; ?>" class="img-responsive" alt="<?php echo $courtroom_layout['title']; ?>" width="<?php echo $courtroom_layout['sizes']['medium-width']; ?>" height="<?php echo $courtroom_layout['sizes']['height']; ?>">
								</figure>
							</div>
							
							<div class="col-md-4">
								<div class="key">
									<ol>
										<?php foreach ($keys as $key) { ?>
										<li><?php echo $key['key_item']; ?></li>
										<?php } ?>
									</ol>
								</div>
							</div>
						</div>
						
					</div>
					 <div class="modal-footer">
						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
	  			</div>
	  		</div>
	  	</div>
	  	
	</div>
  	
	<?php }  ?>
	
	<?php endif; ?>
	
<?php endwhile; ?>
<?php endif; ?>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
