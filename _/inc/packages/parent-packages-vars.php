<?php  
$classes = array('mag-bot-30');	
$package_options_args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'mp_package_option'
);

$package_options = get_posts($package_options_args);
$package_options_counter = 0;

$packages_args = array(
'sort_column' => 'menu_order',
'parent' => $post->ID,
'post_type' => 'page'
);
$packages = get_pages($packages_args);
$prem_options = get_field('package_options', $packages[0]->ID);
$prem_total = count($prem_options);
$prem_color = get_field('colour', $packages[0]->ID);
$exec_options = get_field('package_options', $packages[1]->ID);
$exec_total = count($exec_options);
$exec_color = get_field('colour', $packages[1]->ID);
$ult_options = get_field('package_options', $packages[2]->ID);
$ult__total = count($ult_options);
$ult_color = get_field('colour', $packages[2]->ID);

/*
echo '<pre>';
print_r($prem_options);
print_r($prem_total);
echo '</pre>';
*/
?>