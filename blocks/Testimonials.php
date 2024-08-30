<?php $basic= get_sub_field('testimonials'); 
   if( have_rows('testimonials') ): ?>
      <?php while( have_rows('testimonials') ): the_row(); 
?>
<?php $test = get_field('testimonials', 'options'); 
	if( have_rows('testimonials', 'options') ): ?>
	<?php while( have_rows('testimonials', 'options') ): the_row(); 	
	
?>
<div class="testimonials">
    <div class="container">
        <h2 class="h3">What do our clients think?</h2>
        <div class="testimonials__buttons">
        <?php $tab_count = 0; // Initialize tab counter ?>
            <?php if( have_rows('client') ): ?>
                <?php while( have_rows('client') ): the_row(); 
                     $img = get_sub_field('logo');
                     $imgVisual = $img['sizes']['small'];
                ?>
                    <div class="testimonial-tab-link" data-tab="testimonial-tab-<?php echo $tab_count; ?>">
                        <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                    </div>
                    <?php $tab_count++; ?>
                <?php endwhile; ?> 
            <?php endif; ?> 
        </div>

        <div class="testimonials__tabs desk">
            <?php $tab_count = 0; // Reset tab counter for content matching ?>
            <?php if( have_rows('client') ): ?>
                <?php while( have_rows('client') ): the_row(); 
                     $img = get_sub_field('image');
                     $imgVisual = $img['sizes']['medium'];
                     $link = get_sub_field('button_link'); // This returns an array
                ?>
                    <div class="testimonials__tabs__item" id="testimonial-tab-<?php echo $tab_count; ?>">
                        <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                        <div class="testimonials__tabs__item__text">
                            <h3 class="subtitle1"><?php echo the_sub_field('title'); ?></h3>
                            <div class="wizywig">
                                <?php echo the_sub_field('text'); ?>
                            </div>
                            <p class="subtitle3"><?php echo the_sub_field('author'); ?></p>
                            <?php if ( $link ) { ?>
                                <a href="<?php echo esc_url($link['url']); ?>">
                                    <button class="btn-secondary"><?php echo the_sub_field('button_text'); ?></button>
                                </a>
                            <?php } ?> 
                        </div>
                        <?php $tab_count++; ?>
                    </div>
                <?php endwhile; ?> 
            <?php endif; ?> 
        </div>

        <div class="testimonials__tabs testimonials__tabs__slider">
            <?php if( have_rows('client') ): ?>
                <?php while( have_rows('client') ): the_row(); 
                     $img = get_sub_field('image');
                     $imgVisual = $img['sizes']['medium'];
                     $link = get_sub_field('button_link'); // This returns an array
                ?>
                    <div class="testimonials__tabs__item" >
                        <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                        <div class="testimonials__tabs__item__text">
                            <h3 class="subtitle1"><?php echo the_sub_field('title'); ?></h3>
                            <div class="wizywig">
                                <?php echo the_sub_field('text'); ?>
                            </div>
                            <p class="subtitle3"><?php echo the_sub_field('author'); ?></p>
                            <?php if ( $link ) { ?>
                                <a href="<?php echo esc_url($link['url']); ?>">
                                    <button class="btn-secondary"><?php echo the_sub_field('button_text'); ?></button>
                                </a>
                            <?php } ?> 
                        </div>
                    </div>
                <?php endwhile; ?> 
            <?php endif; ?> 
        </div>
    </div>
</div>
<?php endwhile; ?> 
<?php endif; ?> 

<?php endwhile; ?> 
<?php endif; ?> 
