
<div class="image-video">
    <?php if ($selected_value == 'image_video'): ?>
        <?php $basic = get_sub_field('image_video'); 
        if( have_rows('image_video') ): ?>
            <?php while( have_rows('image_video') ): the_row(); 
                $img = get_sub_field('image');
                $imgVisual = $img['sizes']['medium'];
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="image-video__media">
                <img src="<?php echo $imgVisual ?>"/>
                <!-- video -->
                <?php $link_data = get_sub_field('video'); 
                if(!empty($link_data)){ $link = $link_data['url'];  ?>
                    <video controls>
                        <source src="<?php echo $link; ?>" type="video/mp4">
                        Error Message
                    </video>
                <?php } ?>
            </div>
                                
        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 
</div>  