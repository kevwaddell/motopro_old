<?php if (has_post_thumbnail()) { 
$feat_img_id = get_post_thumbnail_id($post->ID);
$thumb_img = wp_get_attachment_image_src( $feat_img_id, 'gallery-img');
$large_img = wp_get_attachment_image_src( $feat_img_id, 'medium');
//echo '<pre>';print_r($large_img);echo '</pre>';

$img_atts = array('class'	=> "img-responsive");
?>
<div class="feat-img hidden-xs hidden-sm">
<?php the_post_thumbnail( 'feat-img', $img_atts ); ?>
</div>

<?php }  ?>

<?php 
$gallery_imgs = get_field('gallery_imgs');

if ($gallery_imgs) { 
//echo '<pre>';print_r($gallery_imgs);echo '</pre>';	
	
?>
<div class="sidebar-block">
	
	<h3>Image Gallery</h3>
	<ul class="list-unstyled img-links clearfix">
	<?php if (has_post_thumbnail()) { ?>
	<li class="visible-xs visible-sm">
		<a href="<?php echo $large_img[0]; ?>" rel="fancybox" class="zoomable">
			<img src="<?php echo $thumb_img[0]; ?>" class="img-responsive" width="<?php echo $thumb_img[1]; ?>" height="<?php echo $thumb_img[2]; ?>">
		</a>
	</li>
	<?php }  ?>
<?php foreach( $gallery_imgs as $gallery_img ): 
		
		$alt = $gallery_img['title'];
		
		if ($gallery_img['caption']) {
		$alt = $gallery_img['caption'];
		}
		
		if ($gallery_img['alt']) {
		$alt = $gallery_img['alt'];
		}
		
		if ($gallery_img['description']) {
		$alt = $gallery_img['description'];
		}	
		?>
		<li>
			<a href="<?php echo $gallery_img['sizes']['medium']; ?>" rel="fancybox" class="zoomable">
				<img src="<?php echo $gallery_img['sizes']['gallery-img']; ?>" class="img-responsive" width="<?php echo $gallery_img['sizes']['gallery-img-width']; ?>" height="<?php echo $gallery_img['sizes']['gallery-img-height']; ?>"<?php echo ($alt) ? ' alt="'.$alt.'"': ''; ?>>
			</a>
		</li>
<?php endforeach; ?>
	</ul>
</div>

<?php } ?>

<?php 
$post_categories = get_categories();
//echo '<pre>';print_r($post_categories);echo '</pre>';

if ($post_categories) { ?>

<ul class="list-unstyled mag-bot-20 btn-list">

<?php foreach ($post_categories as $cat) { ?>
  <li><a href="<?php echo get_category_link($cat->term_id); ?>" title="View: <?php echo $cat->name; ?>"><?php echo $cat->name; ?></a></li>
<?php } ?>

</ul>

<?php } ?>


<div class="share-btns">
	<?php echo do_shortcode('[ssba]'); ?>
</div>