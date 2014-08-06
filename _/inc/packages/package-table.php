<?php 
$prem_pos = array();
$exec_pos = array();
$ult_pos = array();

//echo '<pre>';print_r($packages);echo '</pre>';


foreach ($packages as $pack) { 
$options = get_field('package_options', $pack->ID);

	foreach ($options as $opt) {
		if ($pack->post_name == "motopro-premier" ) {
			
			if (!in_array($opt['package_option'], $prem_pos)) {
				array_push($prem_pos, $opt['package_option']);
			}
		}	
		
		if ($pack->post_name == "motopro-executive" ) {
			
			if (!in_array($opt['package_option'], $exec_pos)) {
				array_push($exec_pos, $opt['package_option']);
			}
		}
		
		if ($pack->post_name == "motopro-ultimate" ) {
			
			if (!in_array($opt['package_option'], $ult_pos)) {
				array_push($ult_pos, $opt['package_option']);
			}
		}	
	}
	
}

/*
echo '<pre>';
print_r($prem_pos);
echo '<br><br>';
print_r($exec_pos);
echo '<br><br>';
print_r($ult_pos);
echo '</pre>';
*/
 ?>

<table class="package-table hidden-xs" width="100%">
	<colgroup>
		<col class="options"></col>
		<?php foreach ($packages as $package) { 
		$color = get_field('colour', $package->ID);
		?>
		<col class="package-checks col-<?php echo $color; ?>"></col>
		<?php } ?>
	</colgroup>
	<thead>
		<tr>
			<th class="options-header">Package options</th>
			<?php foreach ($packages as $package) { 
			$name = get_field('package_name', $package->ID);
			$color = get_field('colour', $package->ID);
			?>
			<th class="package-header col-<?php echo $color; ?>"><div class="icon"><div class="icon-inner"></div></div><?php bloginfo('name'); ?><span><?php echo $name; ?></span></th>
			<?php } ?>
		</tr>
	</thead>
	<tbody>
	
	<?php foreach ($package_options as $package_option) { 
	$package_options_counter++;
	//echo '<pre>';print_r($package_option);echo '</pre>';
	?>
		<tr class="row-<?php echo $package_options_counter; ?>">
			<td class="option"><?php echo $package_option->post_title; ?></td>
			
			<?php if (in_array($package_option, $prem_pos)) { ?>
			<td class="check-mark col-<?php echo $prem_color; ?>"><div class="icon"><div class="icon-inner"></div></div></td>
			<?php } else { ?>
			<td class="check-mark">-</td>
			<?php } ?>
			
			<?php if (in_array($package_option, $exec_pos )) { ?>
			<td class="check-mark col-<?php echo $exec_color; ?>"><div class="icon"><div class="icon-inner"></div></div></td>
			<?php } else { ?>
			<td class="check-mark">-</td>
			<?php } ?>
			
			
			<?php if (in_array($package_option, $ult_pos)) { ?>
			<td class="check-mark col-<?php echo $ult_color; ?>"><div class="icon"><div class="icon-inner"></div></div></td>
			<?php }else { ?>
			<td class="check-mark">-</td>
			<?php } ?>
			
		</tr>
	<?php } ?>
	
	</tbody>
	<tfoot>
		<tr>
			<td class="table-info"><small>*Meeting location requests may be declined if it is felt the location may pose a risk to the health and safety of the MotoPro employee or agent.</small></td>
			<?php foreach ($packages as $package) { 
			$color = get_field('colour', $package->ID);
			?>
			<td class="package-footer col-<?php echo $color; ?>"><a href="<?php echo get_permalink($package->ID); ?>" title="">Package details <i class="fa fa-angle-right"></i></a></td>
			<?php } ?>
		</tr>
	</tfoot>
</table>
