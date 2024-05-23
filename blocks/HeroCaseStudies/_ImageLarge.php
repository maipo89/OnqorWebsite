
    <?php if ($selected_value == 'image_large'): ?>
        <?php $basic = get_sub_field('image_large'); 
        if( have_rows('image_large') ): ?>
            <?php while( have_rows('image_large') ): the_row(); 
                $img = get_sub_field('image');
                $imgVisual = $img['sizes']['large'];
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="image-large">
                <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
            </div>  
                                
        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 
