<!-- images triple offset -->
<?php if ($selected_value == 'image_triple_offset'): ?>
    <?php if( have_rows('image_triple_offset') ): ?>
        <?php while( have_rows('image_triple_offset') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options'); 
        ?>
            <div class="image-triple-offset">
                <div class="container ">
                    <div class="image-triple-offset__title">
                        <div class="title">
                            <p class="body1"><?php echo $basic['number'] ?></p>
                            <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        </div>
                        <?php echo the_sub_field('text') ?>
                    </div>
                    <div class="image-triple-offset__images">
                        <div class="image-triple-offset__images__column">
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
                        <div class="image-triple-offset__images__column">
                            <img src="<?php echo $imgVisual ?>"/>
                            <div clas="image-triple-offset__subtext-desktop">
                                <?php echo the_sub_field('subtext') ?>
                            </div>
                        </div>
                    </div>
                    <div clas="image-triple-offset__subtext-mobile">
                        <?php echo the_sub_field('subtext') ?>
                    </div>
                    
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 