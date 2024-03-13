<?php if ($selected_value == 'abstract'): ?>
    <?php $basic = get_sub_field('abstract'); 
        if( have_rows('abstract') ): ?>
            <?php while( have_rows('abstract') ): the_row(); 
            ?>
            <div class="abstract">
                <?php
                    $media = get_sub_field('images'); 
                    foreach($media as $image) {
                        echo '<img src="',esc_url($image['sizes']['medium']),'" alt="',esc_attr($image['alt']),'">';
                    }
                ?>
            </div>
            <div class="photography__slider">
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