
<div class="video">
    <?php if ($selected_value == 'video'): ?>
        <?php $basic = get_sub_field('video'); 
        if( have_rows('video') ): ?>
            <?php while( have_rows('video') ): the_row(); 
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="video__media">
                <!-- video -->
                <?php $link_data = get_sub_field('video'); 
                    if(!empty($link_data)){ $link = $link_data['url'];  ?>
                    <video >
                        <source src="<?php echo $link; ?>" type="video/mp4">
                    </video>
                <?php } ?>
                <div class="videoplayer-buttons">
                    <svg class="PlayButton" width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 13.5L0.749999 26.9234L0.75 0.0765981L24 13.5Z" fill="#00AAFF"/>
                    </svg>
                    <svg class="PauseButton" width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="7" height="25" fill="#00AAFF"/>
                    <rect x="11" width="7" height="25" fill="#00AAFF"/>
                    </svg>
                </div>
            </div>
                                
        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 
</div>  