<?php
$layout = get_sub_field('layout');
// full width variables
$full_width_sub_heading = get_sub_field('full_width_top_sub_heading');
$full_width_heading = get_sub_field('full_width_heading');
$full_width_paragraph = get_sub_field('full_width_paragraph');
$full_width_bg_color = get_sub_field('full_width_color');
// left copy right image variables
$left_width_heading = get_sub_field('left_width_heading');
$left_width_paragraph = get_sub_field('left_width_paragraph');
$left_width_bg_color = get_sub_field('left_width_color');
$left_width_right_image = get_sub_field('left_width_right_image');
// right copy left image variables
$right_width_heading = get_sub_field('right_width_heading');
$right_width_paragraph = get_sub_field('right_width_paragraph');
$right_width_bg_color = get_sub_field('right_width_color');
$right_width_left_image = get_sub_field('right_width_left_image');

/*----------------------------------------------------------------
<--------------------------LAYOUT ONE --------------------------->
-----------------------------------------------------------------*/

if($layout == "Full Width"){
	?>
	<div class="body-content full-width" style="background-color:<?php echo $full_width_bg_color; ?>">
		<span>
			<?php
				if($full_width_sub_heading){
					?>
					<h3><?php echo $full_width_sub_heading; ?></h3>
					<?php
				}
				if($full_width_heading){
					?>
					<h2><?php echo $full_width_heading; ?></h2>
					<?php
				}
				if($full_width_paragraph){
					echo $full_width_paragraph;
				}
			?>
			<div class="button-wrapper">
				<?php
				// Check rows exists.
				if( have_rows('full_width_links') ):

				    // Loop through rows.
				    while( have_rows('full_width_links') ) : the_row();

				        // Load sub field value.
				        $button_name = get_sub_field('button_name');
				        $button_link = get_sub_field('button_link');
				       	if($button_name){
				       		?>
				       		<a href="<?php echo $button_link; ?>"><?php echo $button_name; ?></a>
				       		<?php
				       	}

				    // End loop.
				    endwhile;

				// No value.
				else :
				    // Do something...
				endif;
				?>
			</div>
		</span>
	</div>
	<?php
}
/*----------------------------------------------------------------
<-------------------------- LAYOUT TWO --------------------------->
-----------------------------------------------------------------*/

else if($layout == "Left Copy Right Image Column"){
	?>
	<div class="body-content left-copy-right-image" style="background-color:<?php echo $left_width_bg_color; ?>">
		<div class="column">
			<?php
			if($left_width_heading){
					?>
					<h3><?php echo $left_width_heading; ?></h3>
					<?php
				}
				if($left_width_paragraph){
					echo $left_width_paragraph;
				}
			?>
			<div class="button-wrapper">
				<?php
				// Check rows exists.
				if( have_rows('left_width_links') ):

				    // Loop through rows.
				    while( have_rows('left_width_links') ) : the_row();

				        // Load sub field value.
				        $button_name = get_sub_field('button_name');
				        $button_link = get_sub_field('button_link');
				       	if($button_name){
				       		?>
				       		<a href="<?php echo $button_link; ?>"><?php echo $button_name; ?></a>
				       		<?php
				       	}

				    // End loop.
				    endwhile;

				// No value.
				else :
				    // Do something...
				endif;
				?>
			</div>
		</div>
		<div class="column">
			<?php
			if($left_width_right_image){
				?>
					<img src="<?php echo $left_width_right_image; ?>" alt="image" style="width:100%;">
				<?php
				}
			?>
			
		</div>
	</div>
	<?php
}

/*----------------------------------------------------------------
<-------------------------- LAYOUT THREE --------------------------->
-----------------------------------------------------------------*/

else if ($layout == "Right Copy Left Image Column"){
	?>
	<div class="body-content right-copy-left-image" style="background-color:<?php echo $right_width_bg_color; ?>">
		<div class="column">
			<?php
			if($right_width_left_image){
				?>
					<img src="<?php echo $right_width_left_image; ?>" alt="image" style="width:100%;">
				<?php
				}
			?>
		</div>
		<div class="column">
				<?php
			if($right_width_heading){
					?>
					<h3><?php echo $right_width_heading; ?></h3>
					<?php
				}
				if($right_width_paragraph){
					echo $right_width_paragraph;
				}
			?>
			<div class="button-wrapper">
				<?php
				// Check rows exists.
				if( have_rows('right_width_links') ):

				    // Loop through rows.
				    while( have_rows('right_width_links') ) : the_row();

				        // Load sub field value.
				        $button_name = get_sub_field('button_name');
				        $button_link = get_sub_field('button_link');
				       	if($button_name){
				       		?>
				       		<a href="<?php echo $button_link; ?>"><?php echo $button_name; ?></a>
				       		<?php
				       	}

				    // End loop.
				    endwhile;

				// No value.
				else :
				    // Do something...
				endif;
				?>
			</div>
		</div>
	</div>
<?php
}

?>
