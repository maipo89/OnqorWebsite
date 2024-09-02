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
                        <img class="anim-horizontal" src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                        <div class="image-left-right__content__text anim-horizontal">
                            <!-- title -->
                            <div class="title">
                                <h2 class="subtitle1"><?php echo $basic['title'] ?></h2>
                                <?php if( $basic['subtitle'] ) { ?> 
                                    <p class="subtitle1"><?php echo $basic['subtitle'] ?></p>
                                <?php  } ?>
                            </div>

                            <!-- text -->
                            <div class="<?php if(get_sub_field('read_more')) { ?> cap-height <?php  } ?>">
                                <div class="wizywig ">
                                    <?php echo get_sub_field('text')?>
                                </div>
                                <!-- read more -->
                                <?php if(get_sub_field('read_more')) { ?> 
                                    <p class="read-more">Read more</p>
                                <?php  } ?>
                            </div>
      
                            <!-- button -->
                            <?php if(get_sub_field('btn_text')) { ?> 
                                <a href="<?php echo get_sub_field('btn_link')['url'] ?>"><button class="btn-secondary"><?php echo get_sub_field('btn_text') ?></button></a>
                            <?php  } ?>
                        </div>
                    </div>
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 