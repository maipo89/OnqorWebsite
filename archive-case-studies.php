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

			<div class="archive archive__case-studies ">
                <!-- header -->
                <div class="archive__case-studies__header">
                    <div class="container fdc">
                        <h1>Case Studies</h1>
                        <h2 class="subtitle2">Featured Case Studies</h2>
                        <div class="archive__case-studies__header__slider">
                            <div>
                                <h3>L’actif Case Study</h3>
                                <p>L’ACTIF is an athleisure wear brand conceptualised by a team of creatives who are passionate about fashion, science, and movement. L’ACTIF creates high tech, high performing apparel that empowers the wearer to live their most active life.</p>
                                <a><button class="button btn-primary">View Full Case Study</button></a>
                            </div>

                            <div>
                                <h3>L’actif Case Study</h3>
                                <p>L’ACTIF is an athleisure wear brand conceptualised by a team of creatives who are passionate about fashion, science, and movement. L’ACTIF creates high tech, high performing apparel that empowers the wearer to live their most active life.</p>
                                <a><button class="button btn-primary">View Full Case Study</button></a>
                            </div>

                            <div>
                                <h3>L’actif Case Study</h3>
                                <p>L’ACTIF is an athleisure wear brand conceptualised by a team of creatives who are passionate about fashion, science, and movement. L’ACTIF creates high tech, high performing apparel that empowers the wearer to live their most active life.</p>
                                <a><button class="button btn-primary">View Full Case Study</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- casestudies -->
                <div class="container">
                    <h2 class="subtitle1">All Case Studies</h2> 
                </div>
				<div id="articles-container">
                        <!-- posts -->
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
			</div>
            <?php include 'blocks/Testimonials.php' ; ?>
<?php get_footer(); ?>
