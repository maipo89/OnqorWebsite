<div class="related-projects ">
    <div class="container">
        <h2 class="h3">Check out some other projects</h2>
        <div class="related-projects__wrapper">
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
                        <div class="related-projects__wrapper__item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php endif; ?>
                                <div>
                                    <h3 class="subtitle2"><?php the_title(); ?></h3>
                                    <button class="btn-secondary">View</button>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
        </div>
        <p>No related case studies found.</p>
        <?php endif; wp_reset_postdata(); ?>
    </div>  
</div>