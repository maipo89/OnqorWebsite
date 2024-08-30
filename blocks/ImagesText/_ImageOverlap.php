<!-- images single -->
<?php if ($selected_value == 'image_overlap'): ?>
    <?php if( have_rows('image_overlap') ): ?>
        <?php while( have_rows('image_overlap') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['large'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="image-overlap">
                <div class="container ">

                    <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                    <div class="image-overlap__text">
                        <div class="title">
                            <!-- <p><?php echo $basic['number'] ?></p> -->
                            <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        </div>
                        <div class="wizywig">
                            <?php echo the_sub_field('text') ?>
                        </div>
                    </div>

                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 