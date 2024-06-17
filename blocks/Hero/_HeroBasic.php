<!-- List Image -->
<?php if ($selected_value == 'hero_basic'): ?>
    <?php if( have_rows('hero_basic') ): ?>
        <?php while( have_rows('hero_basic') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');

             // Get the parent page name
            $parent_page_name = '';
            $parent_id = wp_get_post_parent_id(get_the_ID());
            if ($parent_id) {
                $parent_page_name = get_the_title($parent_id);
            }
        ?>
            <div class="hero-basic parallax-container">
                <!-- Featured image of the current page -->
                <?php echo get_the_post_thumbnail(get_the_ID(), 'xlarge'); ?>
                <div class="container">
                    <?php if($parent_page_name) : ?>
                        <p class="subtitle2" style="border-bottom-color: <?php echo $page_color; ?>"><?php echo $parent_page_name; ?></p>
                    <?php endif; ?> 
                    <h1 ><?php echo the_sub_field('title') ?></h1>
                    <div class="wizywig">
                        <?php echo the_sub_field('text'); ?>
                    </div>

                    <!-- subtitle -->
                    <?php if(get_sub_field('subtitle')) : ?>
                        <h3 class="subtitle1"><?php echo get_sub_field('subtitle') ?></h3>
                    <?php endif; ?> 

                    <!-- buttons -->
                    <div class="hero-basic__buttons">
                    <?php if (have_rows('multi_button')): 
                            $counter = 1; // Initialize the counter before the loop
                            while (have_rows('multi_button')): 
                                the_row(); 
                                $btn_text = get_sub_field('btn_text'); // Get the button text
                                $btn_id = sanitize_title($btn_text); // Sanitize to use as ID
                        ?>
                                <a href="#<?php echo $counter; ?>" class="smooth-scroll">
                                    <button id="btn-<?php echo $btn_id; ?>" class="btn-primary"><?php echo $btn_text; ?></button>
                                    <span class="pseudo-element" style="background-color: <?php echo $page_color; ?>"></span>
                                </a>
                        <?php $counter++; endwhile;
                        endif; ?>
                    </div>
                    <!-- buttton -->
                    <?php if(get_sub_field('btn_link')) : ?>
                        <a href="<?php echo get_sub_field('btn_link')['url']?>" >
                            <button class="btn-secondary anim-pulse anim-pulse-<?php echo $pulse_color; ?>" style="border-color: <?php echo $page_color; ?>"><?php echo get_sub_field('btn_text')?></button>
                        </a>
                    <?php endif; ?> 
                </div>  
            </div>   
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 