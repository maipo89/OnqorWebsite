<!-- images left right -->
    <?php if( have_rows('services') ): ?>
        <?php while( have_rows('services') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');
        ?>
            <div class="services">
                <div class="container center">
                    <?php if( have_rows('service') ): ?>
                        <?php while( have_rows('service') ): the_row(); ?>
                            <div class="services__item">
                                <div>
                                    <a><h2><?php echo get_sub_field('link')['title']; ?><span>.</span></h2></a>
                                    <!-- <?php var_dump(get_sub_field('link')) ?> -->
                                    <ul>
                                        <a><li>Website,</li></a>
                                        <a><li>Website,</li></a>
                                        <a><li>Website,</li></a>
                                        <a><li>Website</li></a>
                                    </ul>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="49" viewBox="0 0 72 49" fill="none">
                                    <path d="M2 24.5L70 24.5M70 24.5L47.7692 2.00001M70 24.5L47.7692 47" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        <?php endwhile; ?> 
                    <?php endif; ?>

                </div>  
            </div>  
    <?php endwhile; ?> 
    <?php endif; ?> 