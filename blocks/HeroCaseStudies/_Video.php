
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
                <video controls>
                    <source src="your_video's_name.mp4" type="video/mp4">
                    Error Message
                </video>
            </div>
                                
        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 
</div>  