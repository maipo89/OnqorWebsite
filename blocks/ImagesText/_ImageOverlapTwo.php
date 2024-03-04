<!-- images single -->
<?php if ($selected_value == 'image_overlap_two'): ?>
    <?php if( have_rows('image_overlap_two') ): ?>
        <?php while( have_rows('image_overlap_two') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="image-overlap-two">
                <div class="container ">

                    <div class="image-overlap-two__text">
                        <div class="title">
                            <p><?php echo $basic['number'] ?></p>
                            <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        </div>
                        <?php echo the_sub_field('text') ?>
                    </div>
                    <img src="<?php echo $imgVisual ?>"/>


                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 