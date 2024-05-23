    <?php if ($selected_value == 'image_small'): ?>
        <?php $basic = get_sub_field('image_small'); 
        if( have_rows('image_small') ): ?>
            <?php while( have_rows('image_small') ): the_row(); 
                $img = get_sub_field('image');
                $imgVisual = $img['sizes']['medium'];
                $selected_value = get_sub_field('options');
            ?>
            <!-- images -->
            <div class="image-small">
                <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
            </div>

        <?php endwhile; ?> 
        <?php endif; ?> 
    <?php endif; ?> 