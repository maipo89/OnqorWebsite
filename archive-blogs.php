<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div class="archive archive__blogs ">

                <div class="archive__blogs__hero">
					<div class="container">
						<div class="archive__blogs__hero__slider">
							<?php 
							$current_id = get_the_ID(); // Get current post ID to exclude it from the query

							$args = array(
								'post_type' => 'blogs', // Updated to your custom post type for blogs
								'posts_per_page' => 3, // Number of posts to show
								'post__not_in' => array($current_id), // Exclude current post
								'orderby' => 'rand', // Order by random
							);

							$related_blogs = new WP_Query($args);
								if($related_blogs->have_posts()) : 
									while($related_blogs->have_posts()) : $related_blogs->the_post(); ?>
										<div class="archive__blogs__hero__slider__item">
											<a href="<?php the_permalink(); ?>">
												<?php if(has_post_thumbnail()): ?>
													<?php the_post_thumbnail('thumbnail'); ?>
												<?php endif; ?>
												<div class="text">
													<p>Featured Blog</p>
													<h3 class="subtitle2"><?php the_title(); ?></h3>
													<p><?php the_excerpt(); ?></p>
													<p>Read more</p>
												</div>
											</a>
										</div>
									<?php endwhile; ?>
								<?php else: ?>
							<p>No related blogs found.</p>
							<?php endif; wp_reset_postdata(); ?>
                        </div>
					</div>
                </div>

				<!--  -->

                <!-- posts -->
				<div id="articles-container">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php $post_categories = get_the_category(); ?>
							<article class="article <?php foreach ($post_categories as $cat) { echo esc_attr($cat->slug) . ' '; } ?>" id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
                                <a href="<?php the_permalink(); ?>">
									<div>
										<?php if (has_post_thumbnail()) : ?>
										    <a href="<?php the_permalink(); ?>">
											    <?php the_post_thumbnail(); ?>
										    </a>
										<?php endif; ?>
										<h3 class="subtitle2"><?php the_title(); ?></h3>
									</div>
                                </a>
							</article>
						<?php endwhile; ?>
						<?php endif; ?>
				</div>
				<?php include('blocks/RelatedBlogs.php'); ?>
			</div>
<?php get_footer(); ?>
