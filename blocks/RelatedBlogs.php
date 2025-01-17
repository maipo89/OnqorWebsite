<div class="related-projects ">
    <div class="container">
        <h2 class="h3">Check out some other blogs</h2>
        
        <div class="related-projects__wrapper">
            <?php 
            $current_id = get_the_ID(); // Get current post ID to exclude it from the query

            $args = array(
                'post_type' => 'post', // Updated to your custom post type for blogs
                'posts_per_page' => 3, // Number of posts to show
                'post__not_in' => array($current_id), // Exclude current post
                'orderby' => 'rand', // Order by random
            );

            $related_blogs = new WP_Query($args);
                if($related_blogs->have_posts()) : 
                    while($related_blogs->have_posts()) : $related_blogs->the_post(); ?>
                        <div class="related-projects__wrapper__item anim-fadeinstagger">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <div>
                                    <h3 class="subtitle2"><?php the_title(); ?></h3>
                                    <a href="<?php the_permalink(); ?>/">
                                        <button class="btn-secondary">View</button>
                                    </a>
                                </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
            <p>No related blogs found.</p>
            <?php endif; wp_reset_postdata(); ?>
        </div>

        <!-- slider -->
        <div class="related-projects__slider universal__slider">
            <?php 
            $args['posts_per_page'] = 5; // Adjust number of posts for the slider

            $related_blogs = new WP_Query($args);
                if($related_blogs->have_posts()) : 
                    while($related_blogs->have_posts()) : $related_blogs->the_post(); ?>
                        <div class="related-projects__wrapper__item anim-fadeinstagger">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <div>
                                    <h3 class="subtitle2"><?php the_title(); ?></h3>
                                    <a href="<?php the_permalink(); ?>/">
                                        <button class="btn-secondary">View</button>
                                    </a>
                                </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
            <p>No related blogs found.</p>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>  
</div>
