<?php
$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$bg_image = get_sub_field('background_image');

?>
<div class="header-banner" style="background-image:url(<?php echo $bg_image; ?>)">
	<span class="filter"></span>
	<span class="flex-content-view">
		<h1><?php echo $heading; ?></h1>
		<?php
		// if there is a sub heading
		if($sub_heading){
			?>
			<p><?php echo $sub_heading; ?></p>
			<?php
		}
		?>
		
	</span>
</div>