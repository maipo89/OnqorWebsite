<?php
/*
 * Archive Blogs
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
						<div class="archive__blogs__hero__slider universal__slider">
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
													<?php the_post_thumbnail('medium'); ?>
												<?php endif; ?>
												<div class="text">
													<p>Featured Blog</p>
													<h3 class="h3"><?php the_title(); ?></h3>
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

			 	<!-- blog filter -->
			 	<div class="container center overflow-visible">
                    <!-- dropdown filter -->
                    <div class="dropdown">
                        <div id="category-dropdown" name="study_category" class="dropdown__filter">
                            Select a Category
                            <svg class="dropdown__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                <path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="dropdown__options">
                            <div class="dropdown__options__items">
                                <div value="all">All Categories</div>
                                <?php 
                                $terms = get_terms('category', array('hide_empty' => true));
                                foreach ($terms as $term) {
                                    echo '<div value="' . $term->slug . '">' . $term->name . '</div>';
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- posts -->
				<div class="articles-wrapper">
					<div id="articles-container">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'blogs',
							'posts_per_page' => 21,
							'paged' => $paged,
						);
						$query = new WP_Query($args);
						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();
								?>
								<article class="article anim-fadeinstagger" id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
									<a href="<?php the_permalink(); ?>">
										<div>
											<?php if (has_post_thumbnail()) : ?>
												<div class="article__img">
													<?php the_post_thumbnail(); ?>
													<div class="article__img__hover">
														<h3 class="subtitle1"><?php the_title(); ?></h3>
														<button class="btn-secondary">View Blog</button>
													</div>
												</div>
											<?php endif; ?>
											<h3 class="subtitle2"><?php the_title(); ?></h3>
										</div>
									</a>
								</article>
								<?php
							endwhile;?>
					</div>
				</div>
							<!-- pagination
							<?php $total_pages = $query->max_num_pages;
							if ($total_pages > 1) {
								echo '<div class="container"><div class="pagination">';
								for ($i = 1; $i <= $total_pages; $i++) {
									echo '<button class="page" data-page="' . $i . '">' . $i . '</button>';
								}
								echo '</div></div>';
							}
							endif;
							wp_reset_postdata();
							?> -->


				<?php include('blocks/RelatedBlogs.php'); ?>
			</div>
<?php get_footer(); ?>
 