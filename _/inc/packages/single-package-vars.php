<?php 
$contact_page = get_page_by_title("Request a Callback");
$package_name = get_field('package_name');
$color = get_field('colour');
$package_options = get_field('package_options');
$fee_guilty = get_field('fee_guilty');
$fee_not_guilty = get_field('fee_not_guilty');
//echo '<pre>';print_r($package_options);echo '</pre>';
 ?>