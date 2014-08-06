<?php 
/*
Template Name: Motoring Offences page template
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
$classes = array('mag-bot-40');
$sb_links = get_field('sb_links');
$brochure_link = get_field('brochure_link');
$parent_page = get_page($post->post_parent);
//echo '<pre>';print_r($faqs);echo '</pre>';
$faqs_args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'mp_faq'
);
$faqs = get_posts($faqs_args);
$rel_faqs = array();
$rel_faqs_counter = 0;

if ($faqs) {

	foreach ($faqs as $f) {
	$q = get_field('faq_question', $f->ID);
	$a = get_field('faq_answer', $f->ID);
	$related = get_field('related', $f->ID);
	
		foreach ($related as $r) {
			
			if ($r == $post->ID) {
			array_push($rel_faqs, array('q' => $q, 'a' => $a));	
			}
		}
		
	}
	
}

//echo '<pre>';print_r($rel_faqs);echo '</pre>';

 ?>	

<?php include (STYLESHEETPATH . '/_/inc/pages/single-child-vars.php'); ?>

	<div class="col-md-7 col-md-push-5 col-lg-8 col-lg-push-4">
	
		<article <?php post_class($classes); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
		
		
		<?php if (!empty($rel_faqs)) { ?>
		<section id="faq-box-wrap" class="faq-box">
			<h3>FAQ's</h3>
			
			<?php foreach ($rel_faqs as $faq) { 
			$rel_faqs_counter++;	
			?>
			
			 <div class="faq-panel panel">
			 	<button data-toggle="collapse" data-target="#panel-<?php echo $rel_faqs_counter; ?>" data-parent="#faq-box-wrap" class="faq-btn collapsed"><?php echo $faq[q]; ?></button>
				 <div id="panel-<?php echo $rel_faqs_counter; ?>" class="collapse">
				 	<p><?php echo $faq[a]; ?></p>
				 </div>
			 </div>
				 
			<?php } ?>
			
		</section>
		
		<?php }  ?>
				
	</div>
	
	<div class="col-md-5 col-md-pull-7 col-lg-4 col-lg-pull-8">
	
		<aside class="sidebar-actions">
		
			<button id="sidenav-btn" class="visible-xs visible-sm"><i class="fa fa-bars fa-lg"></i> <?php echo $parent_page->post_title; ?></button>
		
			<?php if (!empty($children)) { ?>
				<ul class="list-unstyled btn-list btns-closed">
					<li class="active-page"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(array('before'=>'View page:')); ?>"><?php the_title(); ?></a></li>
				<?php foreach ($children as $child) { ?>
					<li><a href="<?php echo get_permalink($child->ID); ?>" title="View: <?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			
			<div class="side-action-btns">
			
				<?php if (!empty($sb_links)) { ?>
					
				<?php foreach ($sb_links as $link) { ?>
				<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
				<?php } ?>
					
				<?php }  ?>
				
				<?php if ($brochure_link) { 
				$brochure_download = get_field('global_brochure_download', 'option');	
				?>
				<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
				<?php }  ?>

	
			</div>
			
		</aside>
	
	</div>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
