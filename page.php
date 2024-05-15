<?php
/*
 Template Name: default
*/
?>

<?php get_header(); ?>
	<!-- page color -->
	<?php 
    $development_color = 'rgba(102, 16, 242, 1);';
    $marketing_color = 'rgba(240, 180, 0, 1);';
    $design_color = 'rgba(229, 0, 126, 1);';
    $production_color = '#F00'; 
	?>
	<?php 
		if (get_field('service_color')) {
			$service_color = get_field('service_color');
		} else {
			$parent_id = wp_get_post_parent_id(get_the_ID()); 
			$service_color = get_field('service_color', $parent_id);
		}
		$page_color = $service_color;
		
		if ($page_color === $development_color) {
			$pulse_color = 'development';
		} elseif ($page_color === $marketing_color) {
			$pulse_color = 'marketing';
		} elseif ($page_color === $design_color) {
			$pulse_color = 'design';
		} elseif ($page_color === $production_color) {
			$pulse_color = 'production';
		} else {
			$pulse_color = 'test';
		}
	?>

	<!-- content -->
	<?php //echo the_content(); ?>
	<?php include('blocks-builder.php'); ?>
<?php get_footer(); ?>  