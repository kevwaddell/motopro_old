<?php 
$packages_page = get_page_by_title('Packages');

$packages_args = array(
'sort_column'		=> 'menu_order',
'parent' => $packages_page->ID,
'sort_order' => 'ASC'
);

$packages = get_pages($packages_args);

$offences_page = get_page_by_title('Motoring Offences');

$offences_args = array(
'sort_column'		=> 'menu_order',
'parent' => $offences_page->ID,
'sort_order' => 'ASC'
);

$offences = get_pages($offences_args );
//echo '<pre>';print_r($offences);echo '</pre>';

$company_page = get_page_by_title('About MotoPro');
$contact_page = get_page_by_title('Request a Callback');

$rescources_args = array(
'sort_column'		=> 'title',
'include'		=> array($company_page->ID, $contact_page->ID, ),
'sort_order'			=> 'ASC'
);

$rescources_pages = get_pages($rescources_args);

$legal_page = get_page_by_title('Legal Notices');

$legal_args = array(
'sort_column'		=> 'menu_order',
'parent'	=> $legal_page->ID,
'sort_order' => 'ASC'
);

$legal_pages = get_pages($legal_args);

$news_page_ID = get_option('page_for_posts');
$news_page = get_page($news_page_ID);

$topics_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'hierarchical'       => 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'desc'
); 
$topics = get_categories($topics_args);

$subjects_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'parent'		=> 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'desc'
); 
$subjects = get_tags($subjects_args);

//echo '<pre>';print_r($topics);echo '</pre>';

 ?>