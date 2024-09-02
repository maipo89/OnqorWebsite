<!-- images left right -->
<?php if ($selected_value == 'text_image'): ?>
    <?php if( have_rows('text_image') ): ?>
        <?php while( have_rows('text_image') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['xlarge'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="text-image">
                <div class="container center">
                    <h1 class="h3"><?php echo the_sub_field('title') ?></h1>
                </div>
                <div class="container fdr">
                    <div class="wizywig"><?php echo the_sub_field('text') ?></div>
                    <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 