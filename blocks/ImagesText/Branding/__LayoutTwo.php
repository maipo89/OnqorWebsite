<?php if ($selected_value == 'layout_two'): ?>
    <?php if( have_rows('layout_two') ): ?>
        <?php while( have_rows('layout_two') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['large'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="layout-two">
                <div class="container ">
                    <div class="title">
                        <p><?php echo $basic['number'] ?></p>
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1032" height="72" viewBox="0 0 1032 72" fill="none">
                            <path d="M1029 72L1029 3.00002L-3.92315e-05 3" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                        </svg>
                    </div>

                    <div class="layout-two__text">
                        <?php echo the_sub_field('text') ?>
                    </div>
                    <!-- images desktop-->
                    <div class="layout-two__images">
                        <div class="layout-two__images__left">
                            <?php
                                $images = get_sub_field('images');
                                $image_counter = 1; // Initialize counter
                                    foreach($images as $image) {
                                    // Use the counter to add a unique class to each image
                                        echo '<img class="image-' . $image_counter . '" src="' . esc_url($image['sizes']['medium']) . '" alt="' . esc_attr($image['alt']) . '">';
                                        $image_counter++; // Increment counter
                                    }
                                ?>
                        </div>
                        <div class="layout-two__images__right">
                            <img src="<?php echo $imgVisual ?>"/>
                            <!-- colors -->
                            <div class="layout-two__colors">
                                <?php if( have_rows('colors') ): ?>
                                    <?php while( have_rows('colors') ): the_row(); 
                                    ?>
                                        <div style="background-color: <?php echo the_sub_field('color')?>"
                                            class="layout-two__colors__item">
                                        </div>
                                    <?php endwhile; ?> 
                                <?php endif; ?> 
                            </div>
                        </div>

                    </div>

                    <!-- mobile -->
                    <!-- slider -->
                    <div class="layout-two__mobile">
                            <div class="layout-two__mobile__slider">
                                <?php
                                    $media = get_sub_field('images'); 
                                    foreach($media as $image) {
                                        echo '<img src="',esc_url($image['sizes']['medium']),'" alt="',esc_attr($image['alt']),'">';
                                    }
                                ?> 
                            </div>
                            <!-- colors -->
                            <div class="layout-two__colors">
                                <?php if( have_rows('colors') ): ?>
                                    <?php while( have_rows('colors') ): the_row(); 
                                        $img = get_sub_field('image');
                                        $imgVisual = $img['sizes']['medium'];
                                    ?>
                                        <div style="background-color: <?php echo the_sub_field('color')?>"
                                            class="layout-two__colors__item">
                                        </div>
                                    <?php endwhile; ?> 
                                <?php endif; ?> 
                            </div>
                    </div>
            
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 