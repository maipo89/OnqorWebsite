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
                            <video playsinline autoplay muted loop>
                                <source src="<?php echo $link; ?>">   
                            </video>
                        <?php } ?>
                    <?php  } ?>
                </div>

                <!-- title  -->
                <div class="container">
                    <div class="hero-video__text">
                        <div >
                            <h1 id="dynamicTitle"> <?php echo get_sub_field('title') ?></h1>
                            <p class="hero-video__text__subtext"><?php echo get_sub_field('subtext') ?></p>
                            <?php if( get_sub_field('text') ) { ?> 
                                <div class="wizywig">
                                    <?php echo get_sub_field('text') ?>
                                </div>
                            <?php } ?>
                            <div class="hero-video__text__logos">
                                <?php
                                    $media = get_sub_field('logos'); 
                                    foreach($media as $image) {
                                        echo '<img src="',esc_url($image['sizes']['medium']),'" alt="',esc_attr($image['alt']),'">';
                                    }
                                ?>  
                            </div>
                        </div>

                        <!-- right side -->
                        <div>
                            <a href="<?php echo get_sub_field('btn_link')['url'] ?>">
                                <button class="btn-transparent"><?php echo get_sub_field('btn_text') ?></button>
                            </a>
                            <div class="hero-video__text__logos">
                                <?php
                                    $media = get_sub_field('logos'); 
                                    foreach($media as $image) {
                                        echo '<img src="',esc_url($image['sizes']['medium']),'" alt="',esc_attr($image['alt']),'">';
                                    }
                                ?>  
                            </div>
                        </div>
                  
                    </div>
                </div>
      
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 