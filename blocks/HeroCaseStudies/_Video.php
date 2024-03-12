
<div class="video">
    <?php if ($selected_value == 'video'): ?>
        <?php $basic = get_sub_field('video'); 
        if( have_rows('video') ): ?>
            <?php while( have_rows('video') ): the_row(); 
                $img = get_sub_field('image');
                $imgVisual = $img['sizes']['medium'];
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="video__media">
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