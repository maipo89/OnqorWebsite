<!-- images single -->
<?php if ($selected_value == 'ants_columns'): ?>
    <?php if( have_rows('ants_columns') ): ?>
        <?php while( have_rows('ants_columns') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="ants-columns">
                <div class="container ">
                    <div class="title">
                        <!-- <p><?php echo $basic['number'] ?></p> -->
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="924" height="54" viewBox="0 0 924 54" fill="none">
                            <path d="M921 54L921 3.00001L-8.22343e-07 3" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                        </svg> -->
                    </div>

                    <div class="ants-columns__text">
                        <?php echo the_sub_field('text') ?>
                    </div>
                    <img src="<?php echo $imgVisual ?>"/>

                    <div class="ants-columns__subtext">
                        <div class="ants-columns__subtext__wrapper">
                            <?php echo the_sub_field('subtext') ?>
                        </div>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="449" height="104" viewBox="0 0 449 104" fill="none">
                            <path d="M446 0L446 101L-1.53821e-05 101" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                        </svg> -->
                    </div>
         
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 