<div class="image-double">
    <?php if ($selected_value == 'image_double'): ?>
        <?php $basic = get_sub_field('image_double'); 
        if( have_rows('image_double') ): ?>
            <?php while( have_rows('image_double') ): the_row(); 
                $img = get_sub_field('image');
                $imgVisual = $img['sizes']['medium'];
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="image-double__media">
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