<!-- images single -->
<?php if ($selected_value == 'image_single'): ?>
    <?php if( have_rows('image_single') ): ?>
        <?php while( have_rows('image_single') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['large'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="image-single">
                <div class="container ">
                    <!-- title text -->
                    <div class="<?php if( get_sub_field('text_center') ) { ?> text-center <?php  } ?>">
                        <div class="title">
                            <?php if( $basic['number'] ) { ?> 
                                <!-- <p class="body1"><?php echo $basic['number'] ?></p> -->
                            <?php  } ?>
                            <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        </div>
                        <div class="<?php if( get_sub_field('columns_text_four') ) { ?> col-four <?php  } ?>
                                    <?php if( get_sub_field('columns_text_three') ) { ?> col-three <?php  } ?>
                        " >
                            <div class="image-single__text">
                                <?php echo the_sub_field('text') ?>
                            </div>
                        </div>
                    </div>

                    <!-- image -->
                    <div class="image-single__images">
                        <img src="<?php echo $imgVisual ?>"/>
                    </div>

                    <!-- subtext -->
                    <?php if( get_sub_field('subtext') ) { ?>
                        <div class="<?php if( get_sub_field('columns_text_four') ) { ?> col-four <?php  } ?>
                                    <?php if( get_sub_field('columns_text_three') ) { ?> col-three <?php  } ?>
                                    subtext
                        " >
                            <?php echo the_sub_field('subtext') ?>
                        </div>
                    <?php  } ?>
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 