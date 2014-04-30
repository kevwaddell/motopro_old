<?php 
$children_args = array(
'sort_column' => 'menu_order',
'parent' => $post->post_parent,
'exclude' => array(167 ,get_the_ID()),
'post_type' => 'page'
);
$children = get_pages($children_args);
//echo '<pre>';print_r($children);echo '</pre>';
 ?>