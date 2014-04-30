<?php 
$children_args = array(
'sort_column' => 'menu_order',
'parent' => $post->ID,
'post_type' => 'page',
'exclude' => 167
);
$children = get_pages($children_args);
//echo '<pre>';print_r($children);echo '</pre>';
 ?>