<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<?php include (STYLESHEETPATH . '/_/inc/news/posts-vars.php'); ?>

<!-- Container  -->
<div class="container">

<div class="row">

	<div class="col-md-4 col-lg-4">
	
	<article <?php post_class(); ?>>
		<h2><?php echo $news_page->post_title; ?></h2>
		<?php echo $news_page_content; ?>
	</article>
		
	<?php get_sidebar(); ?>
	</div>
	
	<div class="col-md-8 col-lg-8">

<?php if ( have_posts() ): ?>	

	<h3 class="icon-header hidden-xs hidden-sm"><i class="fa fa-rss fa-lg"></i> 
	<?php
	if ( is_day() ) :
	printf( __( 'Daily Archives: %s', 'tlwsolicitors' ), get_the_date() );
	elseif ( is_month() ) :
	printf( __( 'Monthly Archives: %s', 'tlwsolicitors' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tlwsolicitors' ) ) );
	elseif ( is_year() ) :
	printf( __( 'Yearly Archives: %s', 'tlwsolicitors' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tlwsolicitors' ) ) );
	else :
	_e( 'Archives' );
	endif;
	?>
	</h3>
	
	<section class="posts-list">
	
	<div class="page-num hidden-xs hidden-sm">
	<?php wp_pagenavi(); ?>
	</div>
	
	<?php while ( have_posts() ) : the_post(); 
	$date = get_the_date('l - jS F - Y');
	?>		
		<?php if (has_post_thumbnail()) { 
		$img_atts = array('class'	=> "img-responsive");	
		?>
					
		<?php include (STYLESHEETPATH . '/_/inc/news/post-list-item-thumb.php'); ?>	
	
		<?php } else { ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/news/post-list-item.php'); ?>
		
		<?php } ?>
		
		<?php endwhile; ?>
		
		<div class="page-links">
			<?php wp_pagenavi(); ?>
		</div>	
			
	</section>	
	
	<?php else: ?>
		<div class="well">
			<h3>Sorry</h3>
			<p>There is no news in category <?php single_cat_title(); ?> at the moment.<br>
			Please come back soon.
			</p>
		</div>
	<?php endif; ?>

	</div>

</div>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
