<article <?php post_class(); ?>>
	<a href="<?php esc_url( the_permalink() ); ?>" title="View <?php the_title_attribute(); ?> article" rel="bookmark">
		<div class="row">
			
			<div class="hidden-xs col-sm-5 col-md-5 col-lg-5">
			 <?php the_post_thumbnail( 'feat-img' , $img_atts); ?> 
			</div>
			
			<div class="col-sm-7 col-md-7 col-lg-7">
				<h4><?php the_title(); ?></h4>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar"></i> <?php echo $date; ?></time>
				<?php the_excerpt(); ?>
			</div>
		
		</div> 
	</a>
</article>
