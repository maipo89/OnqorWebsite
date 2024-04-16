<!-- video_play-->
<?php if ($selected_value == 'video_play'): ?>
    <?php if( have_rows('video_play') ): ?>
        <?php while( have_rows('video_play') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="video-play">
                <!-- embed option -->
                <?php if( get_sub_field('embed') ) { ?> 
                    <?php echo $basic['embed'] ?>
                <?php  } ?>

                <!-- video_play file option -->
                <div class="video-play__video">
                    <?php if( get_sub_field('embed') ) { ?> 
                        <?php echo $basic['embed'] ?>
                    <?php  } ?>
                    <?php if( get_sub_field('video') ) { ?> 
                        <?php 
                            $link_data = get_sub_field('video'); 
                            if(!empty($link_data)){ $link = $link_data['url'];  ?>
                            <video playsinline muted loop class="video">
                                <source src="<?php echo $link; ?>">   
                            </video>
                        <?php } ?>
                        <div class="videoplayer">
                            <?php include('../Videography/PlayButton.php'); ?>
                            <?php include('../Videography/PauseButton.php'); ?>
                        </div>
                    <?php  } ?>
                </div> 

                <!-- title  -->
                <div class="video-play__text">
                    <div class="container">
                        <div class="video-play__text__title">
                            <h1> <?php echo get_sub_field('title') ?></h1>
                            <p><?php echo get_sub_field('text') ?></p>
                        </div>
                        <div class="video-play__text__logos" style="background-image: url('<?php echo $imgVisual; ?>');">
                            <h2> <?php echo get_sub_field('subtitle') ?></h2>
                            <div class="video-play__text__logos__wrapper">
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