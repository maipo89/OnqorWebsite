<?php if ($selected_value == 'columns_three'): ?>
    <?php $basic = get_sub_field('columns_three'); 
        if( have_rows('columns_three') ): ?>
            <?php while( have_rows('columns_three') ): the_row(); 
            ?>
            <div class="columns-three">
                <?php
                    $media = get_sub_field('images'); 
                    foreach($media as $image) {
                        echo '<img src="',esc_url($image['sizes']['medium']),'" alt="',esc_attr($image['alt']),'">';
                    }
                ?>
            </div>

            <div class="photography__slider universal__slider">
                <?php
                    $media = get_sub_field('images'); 
                    foreach($media as $image) {
                        echo '<img src="',esc_url($image['sizes']['medium']),'" alt="',esc_attr($image['alt']),'">';
                    }
                ?>  
            </div>
        <?php endwhile; ?> 
    <?php endif; ?>
<?php endif; ?> 