<!-- images left right -->
<?php if ($selected_value == 'image_left_right'): ?>
    <?php if( have_rows('image_left_right') ): ?>
        <?php while( have_rows('image_left_right') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="image-left-right">
                <div class="container ">
                    <div class="image-left-right__content
                    <?php if( get_sub_field('image_right') ) { ?> image-right <?php  } ?>
                    <?php if( get_sub_field('narrow') ) { ?> narrow <?php  } ?>
                    ">
                        <img src="<?php echo $imgVisual ?>"/>
                        <div class="image-left-right__content__text">
                            <div class="title">
                                <?php if( $basic['number'] ) { ?> 
                                    <!-- <p class="body1"><?php echo $basic['number'] ?></p> -->
                                <?php  } ?>
                                <h2 class="h3"><?php echo $basic['title'] ?></h2>
                            </div>
                            <?php echo get_sub_field('text')?>
                        </div>
                    </div>
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 