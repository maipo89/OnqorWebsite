<?php if ($selected_value == 'layout_three'): ?>
    <?php if( have_rows('layout_three') ): ?>
        <?php while( have_rows('layout_three') ): the_row(); 
            $imgOne = get_sub_field('image_one');
            $imgVisualOne = $imgOne['sizes']['medium'];

            $imgTwo = get_sub_field('image_two');
            $imgVisualTwo = $imgTwo['sizes']['medium'];

            $imgThree = get_sub_field('image_three');
            $imgVisualThree = $imgThree['sizes']['medium'];

            $selected_value = get_sub_field('options');
        ?> 
            <div class="layout-three">
                <div class="container ">
                    <div class="title">
                        <!-- <p><?php echo $basic['number'] ?></p> -->
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                    </div>
                    <div class="layout-three__text">
                        <?php echo the_sub_field('text') ?>
                    </div>
                    <!-- images -->
                    <div class="layout-three__images">
                        <!-- left -->
                        <div class="layout-three__images__left">
                            <div class="layout-three__images__left__colors">
                                <div class="colors">
                                    <?php if( have_rows('colors') ): ?>
                                        <?php while( have_rows('colors') ): the_row(); 
                                            $img = get_sub_field('image');
                                            $imgVisual = $img['sizes']['medium'];
                                        ?>
                                            <div style="background-color: <?php echo the_sub_field('color')?>"
                                                class="colors__item">
                                            </div>
                                        <?php endwhile; ?> 
                                    <?php endif; ?> 
                                </div>
                                <img src="<?php echo $imgVisualOne ?>" alt="<?php echo esc_attr($imgOne['alt']); ?>"/>
                            </div>
                            <img src="<?php echo $imgVisualTwo ?>" alt="<?php echo esc_attr($imgTwo['alt']); ?>"/>
                        </div>

                        <!-- right -->
                        <div class="layout-three__images__right">
                            <img src="<?php echo $imgVisualThree ?>" alt="<?php echo esc_attr($imgThree['alt']); ?>"/>
                            <!-- <div class="wizywig">
                                <?php echo the_sub_field('text') ?>
                            </div> -->
                        </div>
                    </div>
                    
                    <!-- tablet text -->
                    <div class="wizywig layout-three__text-mobile">
                        <?php echo the_sub_field('text') ?>
                    </div>

                    <!-- mobile -->
                    <!-- slider -->
                        <div class="layout-three__mobile">
                            <div class="layout-three__mobile__slider universal__slider">
                                <img src="<?php echo $imgVisualOne ?>" alt="<?php echo esc_attr($imgOne['alt']); ?>"/>
                                <img src="<?php echo $imgVisualTwo ?>" alt="<?php echo esc_attr($imgTwo['alt']); ?>"/>
                                <img src="<?php echo $imgVisualThree ?>" alt="<?php echo esc_attr($imgThree['alt']); ?>"/>
                            </div>
                        </div>
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 