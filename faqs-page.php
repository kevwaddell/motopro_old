<?php 
/*
Template Name: FAQ's page template
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
$faqs_args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'mp_faq'
);
$faqs = get_posts($faqs_args);
//echo '<pre>';print_r($faqs);echo '</pre>';
$related_qs = array();
$related_qs_none = array();

if ($faqs) {

	foreach ($faqs as $f) {
	$q = get_field('faq_question', $f->ID);
	$a = get_field('faq_answer', $f->ID);
	$related = get_field('related', $f->ID);
	
		if (!empty($related)) {
		
			foreach ($related as $r) {
				//$related_qs[$r] = array($q, $a);
				
				if (!array_key_exists($r, $related_qs)) {
					$related_qs[$r] = array(array('q' => $q, 'a' => $a));
				} else {
					array_push($related_qs[$r], array('q' => $q, 'a' => $a));
				}
			
			}
			
		} else {
			array_push($related_qs_none, $f->ID);
		}
		
	}
	
}

ksort($related_qs);

//echo '<pre>';print_r($related_qs_none);echo '</pre>';
 ?>	

	<div class="col-md-5 col-lg-4">
	
		<article <?php post_class($classes); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
		
		<div class="side-action-btns hidden-xs hidden-sm">
		
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
			<?php if ($brochure_link) { ?>
			<a href="#" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
			<?php }  ?>

		</div>
		
	</div>
	
	<div class="col-md-7 col-lg-8">
		
		<section id="faq-panels-wrap" class="faq-panels">
		
		<?php if (!empty($related_qs_none)) { ?>
		
			<div class="faq-panel panel">
		
				<button data-toggle="collapse" data-target="#panel-general" data-parent="#faq-panels-wrap" class="faq-btn collapsed">General Questions</button>
				
				<div id="panel-general" class="collapse">
				
				<?php foreach ($faqs as $faq) { 
				$question = get_field('faq_question', $faq->ID);
				$answer = get_field('faq_answer', $faq->ID);
				$related = get_field('related', $faq->ID);
				//echo '<pre>';print_r($related);echo '</pre>';
				?>
				
					<?php if (in_array($faq->ID, $related_qs_none)) { ?>
	
					 	<p class="question"><i class="fa fa-comment"></i> <?php echo $answer; ?></p>
						<p class="answer"><i class="fa fa-arrow-right"></i> <?php echo $question; ?></p>
	
				 	<?php } ?>
					 
				<?php } ?>
				
				</div>
			
		</div>	
		<?php } ?>
		
		<?php if (!empty($related_qs)) { ?>

			<?php foreach ($related_qs as $key => $val) { 
			//echo '<pre>';print_r($key);echo '</pre>';
			$rel_page = get_page($key);
			//echo '<pre>';print_r($val);echo '</pre>';
			?>
			
				<div class="faq-panel panel">
					<button data-toggle="collapse" data-target="#panel-<?php echo $key; ?>" data-parent="#faq-panels-wrap" class="faq-btn collapsed"><?php echo $rel_page->post_title; ?> Questions</button>
					 <div id="panel-<?php echo $key; ?>" class="collapse">
						<?php foreach ($val as $item) { ?>
						<p class="question"><i class="fa fa-comment"></i> <?php echo $item[q]; ?></p>
						<p class="answer"><i class="fa fa-arrow-right"></i> <?php echo $item[a]; ?></p>
					 	<?php } ?>
					 </div>
				</div>
							 
			<?php } ?>
			
		<?php } ?>
		
		</section>
		
		<div class="action-btns visible-xs visible-sm">
		
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
			<?php if ($brochure_link) { ?>
			<a href="#" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
			<?php }  ?>

		</div>
	
	</div>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
