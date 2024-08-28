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
                            <?php if( $basic['title'] ) { ?> 
                                <h2 class="h3"><?php echo $basic['title'] ?></h2>
                            <?php  } ?>

                        </div>
                        <div class="<?php if( get_sub_field('columns_text_four') ) { ?> col-four <?php  } ?>
                                    <?php if( get_sub_field('columns_text_three') ) { ?> col-three <?php  } ?>
                        " >
                            <?php if( get_sub_field('text') ) : ?>
                                <div class="image-single__text">
                                    <?php echo the_sub_field('text') ?>
                                </div>
                            <?php endif; ?> 
                        </div>
                    </div>

                    <!-- image -->
                    <div class="image-single__images">
                        <img class="<?php if( !get_sub_field('text') ) { ?> margin-top-none <?php  } ?>"  src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                    </div>
                    <!-- subtitle -->
                    <?php if( get_sub_field('subtitle')) { ?> 
                        <h2 class="subtitle1 subtitle"><?php echo get_sub_field('subtitle') ?></h2>
                    <?php  } ?>

                    <!-- subtext -->
                    <?php if( get_sub_field('subtext') ) { ?>
                        <div class="<?php if( get_sub_field('columns_text_four') ) { ?> col-four <?php  } ?>
                                    <?php if( get_sub_field('columns_text_three') ) { ?> col-three <?php  } ?>
                                    <?php if( get_sub_field('subtitle') ) { ?> small-margin <?php  } ?>
                                    subtext
                                    wizywig
                        " >
                            <?php echo the_sub_field('subtext') ?>
                        </div>
                    <?php  } ?>
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 