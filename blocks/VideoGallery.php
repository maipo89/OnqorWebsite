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
            $posters = get_sub_field('poster_images');
            
            if ($videos && $posters && count($videos) === count($posters)): ?>
                <div class="video-gallery__slider">
                    <?php foreach ($videos as $index => $video): 
                        $poster = $posters[$index]; // Get the corresponding poster image
                    ?>
                        <div class="video-gallery__slider__item">
                            <video poster="<?php echo esc_url($poster['url']); ?>">
                                <source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_attr($video['mime_type']); ?>">
                            </video>
                            <?php include('Videography/PlayButton.php'); ?>
                            <?php include('Videography/PauseButton.php'); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
        <?php endif; ?>

        <!-- slider buttons -->
        <?php
            if ($videos && $posters && count($videos) === count($posters)): ?>
                <div class="video-gallery__buttons">
                    <?php foreach ($videos as $index => $video): 
                        $poster = $posters[$index]; // Get the corresponding poster image
                    ?>
                        <div class="video-gallery__buttons__item">
                            <video poster="<?php echo esc_url($poster['url']); ?>">
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
