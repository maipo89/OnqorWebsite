
<div class="image-video">
    <?php if ($selected_value == 'image_video'): ?>
        <?php $basic = get_sub_field('image_video'); 
        if( have_rows('image_video') ): ?>
            <?php while( have_rows('image_video') ): the_row(); 
                $img = get_sub_field('image');
                $imgVisual = $img['sizes']['small'];
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="image-video__media">
                <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                <!-- video -->
                <?php $link_data = get_sub_field('video'); 
                if(!empty($link_data)){ $link = $link_data['url'];  ?>
                    <video preload="none" controls class="video">
                        <source src="<?php echo $link; ?>" type="video/mp4">
                        Error Message
                    </video>
                <?php } ?> 
            </div>

            <!-- mobile slider -->
            <div class="hero-case-studies__slider universal__slider">
                <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                <!-- video -->
                <video preload="none" controls class="video">
                    <source src="<?php echo $link; ?>" type="video/mp4">
                    Error Message
                </video>
            </div>
                                
        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 
</div>  