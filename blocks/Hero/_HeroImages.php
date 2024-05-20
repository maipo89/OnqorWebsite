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
                        <?php
                        $logos = get_sub_field('images');
                        foreach($logos as $image) {
                            echo '<img src="',esc_url($image['sizes']['small']),'" alt="',esc_attr($image['alt']),'" width="200px">';
                            }
                        ?>
                    </div>

                    <p class="hero-images__excerpt"><?php echo get_the_excerpt() ?></p>
                </div>  
            </div>   
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 