<div class="clients">
    <?php if( have_rows('clients') ): ?>
        <div class="clients__wrapper">
            <div class="clients__inner">
                <?php while( have_rows('clients') ): the_row(); 
                    $image = get_sub_field('image');
                    ?>
                    <div class="clients__image">
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</div>