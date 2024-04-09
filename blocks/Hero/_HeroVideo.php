<!-- video-->
<?php if ($selected_value == 'video'): ?>
    <?php if( have_rows('video') ): ?>
        <?php while( have_rows('video') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="hero-video">
                <!-- embed option -->
                <?php if( get_sub_field('embed') ) { ?> 
                    <?php echo $basic['embed'] ?>
                <?php  } ?>

                <!-- video file option -->
                <div class="hero-video__video">
                    <?php if( get_sub_field('embed') ) { ?> 
                        <?php echo $basic['embed'] ?>
                    <?php  } ?>
                    <?php if( get_sub_field('video') ) { ?> 
                        <?php 
                            $link_data = get_sub_field('video'); 
                            if(!empty($link_data)){ $link = $link_data['url'];  ?>
                            <video playsinline autoplay muted loop class="video">
                                <source src="<?php echo $link; ?>">   
                            </video>
                        <?php } ?>
                    <?php  } ?>
                </div>

            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 