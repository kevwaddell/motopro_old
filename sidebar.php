<?php 
$news_page_ID = get_option('page_for_posts');
$news_page = get_page($news_page_ID);

$topics_args = array(
	'orderby'            => 'meta_value',
	'hierarchical'       => 0,
	'title_li'           => "",
	'show_option_none'   => "",
	'echo'               => 0,
	'taxonomy'           => 'category',
	'exclude'		     => 1
	);
	
if (is_home()) {
$topics_args['current_category'] = 1;	
}

$topics = wp_list_categories($topics_args);
?>

<aside class="sidebar">

<div id="search-form">
	<?php get_search_form(); ?>
</div>

<ul class="list-unstyled btn-list mag-bot-20 cats-list">
	<li class="cat-item<?php echo (is_home() || is_category(1)) ? ' current-cat' : ''; ?>"><a href="<?php echo get_permalink($news_page_ID); ?>" title="View all posts filed under Latest News">Latest News</a></li>
	<?php if ($topics) { ?>
	<?php echo $topics; ?>
	<?php }  ?>
</ul>

<?php include (STYLESHEETPATH . '/_/inc/sidebar/social-feed.php'); ?>
	

</aside>