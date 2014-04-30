<article <?php post_class(); ?>>
	<a href="<?php esc_url( the_permalink() ); ?>" title="View <?php the_title_attribute(); ?> article" rel="bookmark">
		<h4><?php the_title(); ?></h4>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar"></i> <?php echo $date; ?></time>
		<?php the_excerpt(); ?>
	</a>
</article>
