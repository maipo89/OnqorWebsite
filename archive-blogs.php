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

                <div>
                    <div>
                        <h1>Blogs</h1>
                    </div>
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
<?php get_footer(); ?>
