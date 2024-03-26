<!-- images single -->
<?php if ($selected_value == 'ants_text'): ?>
    <?php if( have_rows('ants_text') ): ?>
        <?php while( have_rows('ants_text') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['large'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="ants-text">
                <div class="container ">
                    <div class="title">
                        <!-- <p><?php echo $basic['number'] ?></p> -->
                        <h2 class="h3"><?php echo $basic['title'] ?></h2>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="804" height="234" viewBox="0 0 804 234" fill="none">
                            <path d="M801 234L801 3.00002L-5.82842e-06 3.00001" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                        </svg> -->
                    </div>

                    <div class="ants-text__text">
                        <?php echo the_sub_field('text') ?>
                    </div>
                    <img src="<?php echo $imgVisual ?>"/>

                    <div class="ants-text__subtext">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="612" height="143" viewBox="0 0 612 143" fill="none">
                            <path d="M3 0L2.99999 140L612 140" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                        </svg> -->
                        <div class="ants-text__subtext__wrapper">
                            <?php echo the_sub_field('subtext') ?>
                        </div>
                    </div>
         
                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 