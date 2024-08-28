<!-- List Image -->
<?php if ($selected_value == 'hero_images'): ?>
    <?php if( have_rows('hero_images') ): ?>
        <?php while( have_rows('hero_images') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');

            $parent_page_name = '';
            $parent_id = wp_get_post_parent_id(get_the_ID());
            if ($parent_id) {
                $parent_page_name = get_the_title($parent_id);
            }
        ?>
            <div class="hero-images">
                <div class='container'>
                    <div class="title">
                        <?php if($parent_page_name) : ?>
                            <p class="subtitle2" style="border-bottom-color: <?php echo $page_color; ?>"><?php echo $parent_page_name; ?></p>
                        <?php endif; ?> 
                        <h1 ><?php echo get_the_title() ?></h1>
                    </div>
     

                    <!-- images -->
                    <div class="hero-images__images">
                        <!-- images option -->
                        <?php if(get_sub_field('images')) : ?>
                            <?php
                            $logos = get_sub_field('images');
                            foreach($logos as $image) {
                                echo '<img src="',esc_url($image['sizes']['small']),'" alt="',esc_attr($image['alt']),'" width="200px">';
                                }
                            ?>
                        <?php endif; ?> 

                        <!-- case studies option -->
                        <?php if(get_sub_field('images') == false) : ?>
                        <?php
                        // Query arguments to fetch the latest 6 case studies
                        $args = array(
                            'post_type' => 'case-studies',
                            'posts_per_page' => 6,  // Fetch only 6 posts
                            'orderby' => 'date',   // Order by date
                            'order' => 'DESC',     // Show latest posts first
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'study_category', // Adjust if using a custom taxonomy
                                    'field' => 'slug',
                                    'terms' => 'photography', // Replace 'photography' with your actual category slug
                                    'operator' => 'IN',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); // Adjust thumbnail size as needed ?>
                                <?php endif; ?>
                                <div class="hero-images__hover">
									<h3 class="subtitle1"><?php the_title(); ?></h3>
									<button class="btn-secondary">View</button>
								</div>
                            </a>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                        <?php endif; ?> 
                    </div>

                    <p class="hero-images__excerpt"><?php echo get_the_excerpt() ?></p>
                </div>  
            </div>   
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 