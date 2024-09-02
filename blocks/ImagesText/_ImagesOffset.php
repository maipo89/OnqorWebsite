<!-- images offset -->
<?php if ($selected_value == 'images_offset'): ?>
    <?php if( have_rows('images_offset') ): ?>
        <?php while( have_rows('images_offset') ): the_row(); 
            $selected_value = get_sub_field('options');
        ?>
            <div class="images-offset">
                <div class="container ">
                    <div class="title">
                        <!-- <p class="body1"><?php echo $basic['number'] ?></p> -->
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                    </div>
                    <div class="images-offset__text-mobile">
                        <?php echo the_sub_field('subtext') ?>
                    </div>

                    <div class="images-offset__images">
                        <?php
                            $images = get_sub_field('images');
                            $image_counter = 1; // Initialize counter
                            foreach($images as $image) {
                                // Use the counter to add a unique class to each image
                                echo '<img class="image-' . $image_counter . '" src="' . esc_url($image['sizes']['large']) . '" alt="' . esc_attr($image['alt']) . '">';
                                $image_counter++; // Increment counter
                            }
                        ?>
                    </div>
                    <div class="images-offset__text-desktop">
                        <?php echo the_sub_field('subtext') ?>
                    </div>

                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 