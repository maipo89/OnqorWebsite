<div class="related-projects">
    <div class="container">
        <?php if( get_sub_field('title') ) { ?>
            <h2 class="h3"><?php echo get_sub_field('title'); ?></h2>
        <?php  } else { ?>
            <h2 class="h3">Check out some other projects</h2>
        <?php  } ?>        
        <div class="related-projects__wrapper">
            <?php 
            $current_id = get_the_ID(); // Get current case study ID to exclude it from the query
            $casestudies = get_sub_field('casestudies'); // Get ACF post object field
            
            if($casestudies) {
                // If specific case studies have been selected in ACF
                $related_case_studies = $casestudies;
            } else {
                // Default to random case studies if no specific ones have been selected
                $args = array(
                    'post_type' => 'case-studies', // Your custom post type
                    'posts_per_page' => 3, // Number of posts to show
                    'post__not_in' => array($current_id), // Exclude current post
                    'orderby' => 'rand', // Order by random
                );

                $related_case_studies = get_posts($args);
            }

            if($related_case_studies) :
                foreach($related_case_studies as $post) : setup_postdata($post); ?>
                    <div class="related-projects__wrapper__item anim-fadeinstagger">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <div>
                                <h3 class="subtitle2"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>">
                                    <button class="btn-secondary">View</button>
                                </a>
                            </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            <?php else: ?>
                <p>No related case studies found.</p>
            <?php endif; ?>
        </div>

        <!-- slider -->
        <div class="related-projects__slider universal__slider">
            <?php 
            $current_id = get_the_ID(); // Get current case study ID to exclude it from the query
            $casestudies = get_sub_field('casestudies'); // Get ACF post object field
            
            if($casestudies) {
                // If specific case studies have been selected in ACF
                $related_case_studies = $casestudies;
            } else {
                // Default to random case studies if no specific ones have been selected
                $args = array(
                    'post_type' => 'case-studies', // Your custom post type
                    'posts_per_page' => 5, // Number of posts to show
                    'post__not_in' => array($current_id), // Exclude current post
                    'orderby' => 'rand', // Order by random
                );

                $related_case_studies = get_posts($args);
            }

            if($related_case_studies) :
                foreach($related_case_studies as $post) : setup_postdata($post); ?>
                    <div class="related-projects__wrapper__item anim-fadeinstagger">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <div>
                                <h3 class="subtitle2"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>">
                                    <button class="btn-secondary">View</button>
                                </a>
                            </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            <?php else: ?>
                <p>No related case studies found.</p>
            <?php endif; ?>
        </div>
    </div>  
</div>
