<?php get_header(); ?>

<?php 
$allsearch = new WP_Query("s=$s&showposts=-1"); 
wp_reset_query();
$search_count = $allsearch->post_count;
$search_query = get_search_query(); 
//echo '<pre>';print_r($posts);echo '</pre>';
?><!-- Banner small  -->

<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

		<article <?php post_class(); ?>>
			<h2 class="text-center">You Searched for: "<?php the_search_query(); ?>"</h2>
			<p class="intro text-center">Results: <?php echo $search_count; ?></p>
			
			<div class="search-form-wrap">
			<?php get_search_form(); ?>
			</div>
		</article>
		
		<section class="posts-list">
		
			<?php if ( have_posts() ): ?>
			
			<h3 class="icon-header"><i class="fa fa-check-circle fa-lg"></i> Search results</h3>
			
			<div class="page-num">
			<?php wp_pagenavi(); ?>
			</div>
				
						<?php while ( have_posts() ) : the_post();
						$date = get_the_date('l - jS F - Y');
						$intro = get_field('intro');
						 ?>	
					
						<article <?php post_class(); ?>>
							<a href="<?php esc_url( the_permalink() ); ?>" title="View <?php the_title_attribute(); ?> article" rel="bookmark">
								<h4><?php the_title(); ?></h4>
								
								<?php if ($post->post_type == 'post') { ?>
								<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar"></i> <?php echo $date; ?></time>
								<?php } ?>
										
								<?php the_excerpt(); ?>	
								
							</a>
						</article>
		
						<?php endwhile; ?>
						
				<div class="page-links">
					<?php wp_pagenavi(); ?>
				</div>					
			
			<?php else: ?>
			<h3 class="text-center">Sorry</h3>
			<p class="text-center">There are no search results for "<?php echo $search_query; ?>". Please try again.</p>
		
			<?php endif; ?>
		
		</section>
		
</div>
<!-- Container end  -->

<?php get_footer(); ?>
