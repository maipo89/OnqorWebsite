<!-- images triple offset -->
<?php if ($selected_value == 'image_steps'): ?>
    <?php if( have_rows('image_steps') ): ?>
        <?php while( have_rows('image_steps') ): the_row(); 
            $selected_value = get_sub_field('options'); 
        ?>
            <div class="image-steps">
                <div class="container ">
                    <div class="title">
                        <!-- <p class="body1"><?php echo $basic['number'] ?></p> -->
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                    </div>
                    <div class="image-steps__steps">
                            <?php if( have_rows('step') ): ?>
                                <?php while( have_rows('step') ): the_row(); 
                                    $img = get_sub_field('image');
                                    $imgVisual = $img['sizes']['medium'];
                                ?>
                                    <div class="image-steps__steps__item">
                                        <?php echo the_sub_field('text') ?>
                                        <img src="<?php echo $imgVisual ?>"/>
                                    </div>
                                <?php endwhile; ?> 
                            <?php endif; ?> 
                    </div>

                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="421" height="324" viewBox="0 0 421 324" fill="none">
                    <path d="M421 3L3.00003 2.99996L3 324" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                    </svg> -->
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 