<!-- images single -->
<?php if ($selected_value == 'image_overlap_alt'): ?>
    <?php if( have_rows('image_overlap_alt') ): ?>
        <?php while( have_rows('image_overlap_alt') ): the_row(); 
            $imgOne = get_sub_field('image');
            $imgVisualOne = $imgOne['sizes']['medium'];

            $imgTwo = get_sub_field('image_two');
            $imgVisualTwo = $imgTwo['sizes']['medium'];

            $imgThree = get_sub_field('image_three');
            $imgVisualThree = $imgThree['sizes']['medium'];

            $selected_value = get_sub_field('options');
        ?>
            <div class="image-overlap-alt">
                <div class="container ">
                    <div class="image-overlap-alt__text">
                        <div class="title">
                            <p><?php echo $basic['number'] ?></p>
                            <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        </div>
                        <?php echo the_sub_field('text') ?>
                    </div>
                    <img src="<?php echo $imgVisualOne ?>"/>
                    <img src="<?php echo $imgVisualTwo ?>"/>
                    <img src="<?php echo $imgVisualThree ?>"/>
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 