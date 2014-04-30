<?php 
$news_page_id = get_option('page_for_posts');
$news_page = get_page($news_page_id);
$news_page_content_raw = $news_page->post_content;
$news_page_content = apply_filters('the_content', $news_page_content_raw );
 ?>