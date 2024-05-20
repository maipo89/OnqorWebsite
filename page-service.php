<?php
/*
 Template Name: Service Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name it "page-whatever.php" and add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template, and voila, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
<div class="services-page">
	<!-- hero -->
	<div class="services-page__hero" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'xlarge')); ?>');">
		<div class="container">
			<div class="services-page__hero__title">
				<h1><?php the_title(); ?></h1>
				<div class="wizywig">
					<?php the_excerpt(); ?>
				</div>
			</div>
			<div class="services-page__hero__services">
				<?php
				$current_page_id = get_the_ID();
				// Query children pages of the current page
				$children_query = new WP_Query(array(
					'post_type' => 'page',
					'post_parent' => $current_page_id,
					'posts_per_page' => -1, // Retrieve all children pages
					'orderby' => 'menu_order', // Order by menu order
					'order' => 'ASC', // Ascending order
				));

				// children
				if ($children_query->have_posts()) :
					while ($children_query->have_posts()) :
						$children_query->the_post();
						$service_color = get_field('service_color', get_the_ID());
				?>
						<div  style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'small')); ?>');">
							<h2 class="subtitle1"><?php the_title(); ?></h2>
							<span style="background-color: <?php echo $service_color; ?>"></span>
						</div>

					<?php endwhile;
				endif;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

	<!-- services -->
	<div class="container">
		<?php
		$current_page_id = get_the_ID();
		// Query children pages of the current page
		$children_query = new WP_Query(array(
			'post_type' => 'page',
			'post_parent' => $current_page_id,
			'posts_per_page' => -1, // Retrieve all children pages
			'orderby' => 'menu_order', // Order by menu order
			'order' => 'ASC', // Ascending order
		));

		// children
		if ($children_query->have_posts()) :
			while ($children_query->have_posts()) :
				$children_query->the_post();
		?>
					<div class="services-page__item">
						<div class="services-page__item__title">
							<h2><?php the_title(); ?></h2>
							<div class="wizywig">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>
						<?php if ($thumbnail_url) : ?>
							<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
						<?php endif; ?>

						<div class="services-page__item__child">
							<?php
							// Query children pages of the current child page
							$child_page_id = get_the_ID();
							$grandchildren_query = new WP_Query(array(
								'post_type' => 'page',
								'post_parent' => $child_page_id,
								'posts_per_page' => -1, // Retrieve all children pages
								'orderby' => 'menu_order', // Order by menu order
								'order' => 'ASC', // Ascending order
							));
							// grandchiildren 

							if ($grandchildren_query->have_posts()) :
								while ($grandchildren_query->have_posts()) :
									$grandchildren_query->the_post();
							?>
									<a href="<?php the_permalink(); ?>">
										<div class="services-page__item__child__item">
										<?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'small'); ?>
											<?php if ($thumbnail_url) : ?>
												<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
											<?php endif; ?>
											<h4 class="subtitle3"><?php the_title(); ?></h4>
											<button class="btn-primary">view</button>
										</div>
									</a>
								<?php endwhile;
							endif;
							wp_reset_postdata(); ?>
						</div>
					</div>
			<?php endwhile;
		endif;
		wp_reset_postdata(); ?>
	</div>
</div>
<?php include('blocks-builder.php'); ?>
<?php get_footer(); ?>

