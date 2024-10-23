<?php
/*
 * Archive Cast Studies
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
                <div class="archive__case-studies__header" >
                    <div class="overlay"></div> 
                    <div class="bg-image"></div>
                    <div class="container fdc">
                        <h1>Case Studies</h1>
                        <h2 class="subtitle2">Featured Case Studies</h2>
                        <div class="archive__case-studies__header__slider universal__slider">
                            <?php 
                            $current_id = get_the_ID(); // Get current case study ID to exclude it from the query

                            $args = array(
                                'post_type' => 'case-studies', // Your custom post type
                                'posts_per_page' => 3, // Number of posts to show
                                'post__not_in' => array($current_id), // Exclude current post
                                'orderby' => 'rand', // Order by random
                            );

                            $related_case_studies = new WP_Query($args);
                            if($related_case_studies->have_posts()) : 
                                while($related_case_studies->have_posts()) : $related_case_studies->the_post(); ?>
                                    <div>
                                        <h3><?php the_title(); ?></h3>
                                        <?php 
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                        $cover_image_url = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'cover-image');
                                        ?>
                                        <!-- Set the cover image URL as a data attribute -->
                                        <img class="case-study-thumbnail" src="<?php echo $thumbnail_url; ?>" data-cover-image="<?php echo $cover_image_url; ?>" alt="<?php the_title(); ?>">
                                        <p><?php the_excerpt(); ?></p>
                                        <a  href="<?php the_permalink(); ?>"><button class="button btn-secondary">View Full Case Study</button></a>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>No related case studies found.</p>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                  
                <!-- filter -->
                <div class="archive__case-studies__filter">
                    <div class="container fdr jcsb overflow-visible">
                        <h2 class="subtitle1">All Case Studies</h2> 
    
                        <!-- dropdown filter -->
                        <div class="dropdown dark">
                            <div id="category-dropdown" name="study_category" class="dropdown__filter">
                                Select a Category
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                    <path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="dropdown__options">
                                <div class="dropdown__options__items">
                                    <div value="all">All Categories</div>
                                    <?php 
                                    $terms = get_terms('study_category', array('hide_empty' => true));
                                    foreach ($terms as $term) {
                                        echo '<div value="' . $term->slug . '">' . $term->name . '</div>';
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
           
 
                <!-- casestudies -->
                <div class="articles-wrapper">
                    <div id="articles-container" class="casestudies">
                        <!-- posts -->
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php $post_categories = get_the_category(); ?>
							<article class="article anim-fadeinstagger <?php foreach ($post_categories as $cat) { echo esc_attr($cat->slug) . ' '; } ?>" id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
                                <a href="<?php the_permalink(); ?>">
									<div >
										<?php if (has_post_thumbnail()) : ?>
										    <div class="article__img">
											    <?php the_post_thumbnail(); ?>
                                                <div class="article__img__hover">
                                                    <?php 
                                                        $headline_copy = get_field('headline_copy');
                                                        $industry = get_field('industry');
                                                        $department = get_field('department');
                                                    ?>
                                                    <div class="container-subtitle">
                                                        <h3 class="subtitle1"><?php the_title(); ?></h3>
                                                        <?php if($industry) : ?>
                                                            <p class="industry"><?php echo $industry ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if($department || $headline_copy) : ?>
                                                        <div class="container-headline">
                                                            <?php if($headline_copy) : ?>
                                                                <p class="headline-copy"><?php echo $headline_copy ?></p>
                                                            <?php endif; ?>
                                                            <?php if($department) : ?>
                                                                <p class="department"><?php echo $department ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <button class="btn-secondary">View Project</button>
                                                </div>
                                            </div>
										<?php endif; ?>
									</div>
                                </a>
							</article>
						<?php endwhile; ?>
						<?php endif; ?>
				    </div>
                </div>

			</div>
<?php get_footer(); ?>
