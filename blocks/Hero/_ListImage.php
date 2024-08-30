<!-- List Image -->
<?php if ($selected_value == 'list_image'): ?>
    <?php if( have_rows('list_image') ): ?>
        <?php while( have_rows('list_image') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');

            $background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
            <div class="list-image parallax-container" >
                <?php echo get_the_post_thumbnail(get_the_ID(), 'xlarge'); ?>
                <div class="container">
                        <h1 class="h3"><?php echo the_sub_field('title') ?></h1>

                        <!-- content wrapper -->
                        <div class="list-image__content">
                            <!-- list wrapper -->
                            <div class="list-image__wrapper">
                                <div class="list-image__list">
                                    <?php if( have_rows('list') ): ?>
                                        <?php while( have_rows('list') ): the_row(); ?>
                                            <div class="list-image__list__item">
                                                <h2 class="subtitle1" ><?php echo the_sub_field('title'); ?></h2>
                                                <div class="wizywig">
                                                    <?php
                                                    $list_items_content = get_sub_field('list_items');
                                                    $marker_style = 'color:' . $page_color;
                                                    $styled_list_items_content = "<style>ul li::marker { $marker_style }</style>$list_items_content";
                                                    echo $styled_list_items_content;
                                                    ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?> 
                                    <?php endif; ?> 
                                </div>

                                <!-- mobile slider -->
                                <div class="list-image__list__slider">
                                    <?php if( have_rows('list') ): ?>
                                        <?php while( have_rows('list') ): the_row(); ?>
                                            <div class="list-image__list__item">
                                                <h2 class="subtitle1"><?php echo the_sub_field('title'); ?></h2>
                                                <?php echo the_sub_field('list_items'); ?>
                                            </div>
                                        <?php endwhile; ?> 
                                    <?php endif; ?> 
                                </div>

                                <div class="wizywig">
                                    <?php echo the_sub_field('text') ?>
                                </div>
                                <a href="<?php echo get_sub_field('btn_link')['url']?>" >
                                    <button class="btn-secondary anim-pulse anim-pulse-<?php echo $pulse_color; ?>" style="border-color: <?php echo $page_color; ?>">Get in Touch</button>
                                </a>
                            </div>

                            <img src="<?php echo $imgVisual ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                        </div>

                </div>  
            </div>   
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 