<div class="image-triple">
    <?php if ($selected_value == 'image_triple'): ?>
        <?php $basic = get_sub_field('image_triple'); 
        if( have_rows('image_triple') ): ?>
            <?php while( have_rows('image_triple') ): the_row(); 
                $img = get_sub_field('image');
                $imgVisual = $img['sizes']['small'];
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="image-triple__media">
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

            <!-- slider -->
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
                                
        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 
</div>  