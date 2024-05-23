<?php if ($selected_value == 'layout_one'): ?>
    <?php if( have_rows('layout_one') ): ?>
        <?php while( have_rows('layout_one') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['large'];
        ?>
            <div class="layout-one">
                <div class="container ">
                    <div class="title">
                        <!-- <p><?php echo $basic['number'] ?></p> -->
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                    </div>

                    <?php echo the_sub_field('text') ?>
                    <!-- image -->
                    <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>

                    <!-- colors -->
                    <!-- <div class="layout-one__colors__wrapper">
                        <div class="layout-one__colors">
                            <?php if( have_rows('colors') ): ?>
                                <?php while( have_rows('colors') ): the_row(); 
                                    $img = get_sub_field('image');
                                    $imgVisual = $img['sizes']['medium'];
                                ?>
                                    <div style="background-color: <?php echo the_sub_field('color')?>"
                                        class="layout-one__colors__item">
                                    </div>
                                <?php endwhile; ?> 
                            <?php endif; ?> 
                        </div>
                    </div> -->
      
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 