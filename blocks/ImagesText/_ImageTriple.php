<!-- images single -->
<?php if ($selected_value == 'image_triple'): ?>
    <?php if( have_rows('image_triple') ): ?>
        <?php while( have_rows('image_triple') ): the_row(); 
            $selected_value = get_sub_field('options');
        ?>
           <div class="text-triple-image">
                <div class="container">
                    <div class="title">
                        <p><?php echo $basic['number'] ?></p>
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                    </div>
                    <div class="text-triple-image__content">
                        <?php echo get_sub_field('text')?>
                        <div class="text-triple-image__content__images">
                            <?php
                            $images = get_sub_field('image');
                            $image_counter = 1; // Initialize counter
                            foreach($images as $image) {
                                // Use the counter to add a unique class to each image
                                echo '<img class="image-' . $image_counter . '" src="' . esc_url($image['sizes']['medium']) . '" alt="' . esc_attr($image['alt']) . '">';
                                $image_counter++; // Increment counter
                            }
                            ?>
                        </div>
                        <!-- slider mobile -->
                        <div class="text-triple-image__slider">
                            <?php
                            $images = get_sub_field('image');
                            $image_counter = 1; // Initialize counter
                            foreach($images as $image) {
                                // Use the counter to add a unique class to each image
                                echo '<img class="image-' . $image_counter . '" src="' . esc_url($image['sizes']['medium']) . '" alt="' . esc_attr($image['alt']) . '">';
                                $image_counter++; // Increment counter
                            }
                            ?>
                        </div>
                    </div>
               
                </div>  
            </div>   
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 