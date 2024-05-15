<?php $basic= get_sub_field('video_gallery'); 
   if( have_rows('video_gallery') ): ?>
      <?php while( have_rows('video_gallery') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="video-gallery">  
        <div class="container center">
            <!-- slider -->
            <?php
                $videos = get_sub_field('videos');
                if ($videos): ?>
                    <div class="video-gallery__slider">
                        <?php foreach ($videos as $video): ?>
                            <div class="video-gallery__slider__item">
                                <video controls>
                                    <source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_attr($video['mime_type']); ?>">
                                </video>
                            </div>
                        <?php endforeach; ?>
                    </div>
            <?php endif; ?>



            <!-- slider buttons -->
            <?php
                $videos = get_sub_field('videos');
                if ($videos): ?>
                    <div class="video-gallery__buttons">
                        <?php foreach ($videos as $video): ?>
                            <div class="video-gallery__buttons__item">
                                <video>
                                    <source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_attr($video['mime_type']); ?>">
                                </video>
                                <?php include('Videography/PlayButton.php'); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
            <?php endif; ?>


        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 
