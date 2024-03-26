
<div class="image-stats">
    <?php if ($selected_value == 'image_stats'): ?>
        <?php $basic = get_sub_field('image_stats'); 
        if( have_rows('image_stats') ): ?>
            <?php while( have_rows('image_stats') ): the_row(); 
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="image-stats__images">
                <?php
                    $images = get_sub_field('images');
                    $image_counter = 1; // Initialize counter
                        foreach($images as $image) {
                        // Use the counter to add a unique class to each image
                            echo '<img class="image-' . $image_counter . '" src="' . esc_url($image['sizes']['small']) . '" alt="' . esc_attr($image['alt']) . '">';
                            $image_counter++; // Increment counter
                        }
                    ?>
            </div>

            <div class="hero-case-studies__slider universal__slider">
                <?php
                    $images = get_sub_field('images');
                    $image_counter = 1; // Initialize counter
                        foreach($images as $image) {
                        // Use the counter to add a unique class to each image
                            echo '<img class="image-' . $image_counter . '" src="' . esc_url($image['sizes']['small']) . '" alt="' . esc_attr($image['alt']) . '">';
                            $image_counter++; // Increment counter
                        }
                    ?>
            </div>
                                
            <!-- stats -->
            <div class="image-stats__stats">
                <?php if( have_rows('stats') ): ?>
                    <?php while( have_rows('stats') ): the_row(); ?>
                        <div>
                            <p class="subtitle1"><?php echo the_sub_field('number') ?></p>
                            <p class="body2"><?php echo the_sub_field('title') ?></p>
                        </div>
                    <?php endwhile; ?> 
                <?php endif; ?> 
            </div>

        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 
</div>  