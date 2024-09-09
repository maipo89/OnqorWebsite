<div class="dropdown-text">
    <div class="container center overflow-visible">

        <!-- dropdown -->
        <div class="dropdown">
            <div id="category-dropdown" name="text-category" class="dropdown__filter">
                All
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                    <path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <!-- options -->
            <div class="dropdown__options">
                <div class="dropdown__options__items">
                    <div value="all"><a href="/legal">All</a></div>
                    <?php 
                        $legal_pages = get_pages(array(
                            'meta_key' => '_wp_page_template',
                            'meta_value' => 'page-legal.php' // Change to the actual name of your template file
                        ));
                        foreach ($legal_pages as $page) : 
                    ?>
                        <div value="<?php echo esc_attr($page->post_name); ?>">
                            <a href="<?php echo get_permalink($page->ID); ?>"><?php echo esc_html($page->post_title); ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Show the current page's content --> 
        <?php if (is_page('legal')) : ?>
            <!-- Show all legal pages' titles and excerpts -->
            <div class="dropdown-text__text">
                <?php foreach ($legal_pages as $page) : ?>
                    <div>
                        <h2 class="subtitle1"><?php echo esc_html($page->post_title); ?></h2>
                        <div class="wizywig">
                            <?php echo apply_filters('the_excerpt', $page->post_excerpt); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <!-- Show the current page's content --> 
            <div class="dropdown-text__text">
                <div>
                    <h2 class="subtitle1"><?php echo get_the_title(); ?></h2>
                    <div class="wizywig">
                        <?php echo apply_filters('the_excerpt', $page->post_excerpt); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>
