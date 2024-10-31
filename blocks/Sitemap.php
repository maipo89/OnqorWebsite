<div class="sitemap">
<h1 class="container">Sitemap</h1>
<div class="container">
    <?php
    // Check if the 'sitemap' field is set to true (assuming this is a global option)
    $sitemap = get_sub_field('sitemap');
    if ($sitemap) {
        $query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));
        $query2 = new WP_Query(array(
            'post_type'      => 'case-studies',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));
        $query3 = new WP_Query(array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order', // Order by menu order for hierarchical display
            'order'          => 'ASC'         // Ascending for parent-child ordering
        ));

        if ($query->have_posts() || $query2->have_posts() || $query3->have_posts()) {
            // Collect pages into a hierarchy
            $pages_hierarchy = array();

            while ($query3->have_posts()) {
                $query3->the_post();
                $parent_id = wp_get_post_parent_id(get_the_ID());

                // Group pages by parent
                if (!isset($pages_hierarchy[$parent_id])) {
                    $pages_hierarchy[$parent_id] = array();
                }
                $pages_hierarchy[$parent_id][] = get_the_ID();
            }

            // Recursive function to display pages with subpages
            function display_pages_hierarchy($parent_id, $pages_hierarchy) {
                if (isset($pages_hierarchy[$parent_id])) {
                    echo '<ul>';
                    foreach ($pages_hierarchy[$parent_id] as $page_id) {
                        echo '<li><a href="' . get_permalink($page_id) . '">' . get_the_title($page_id) . '</a>';
                        // Recursively display subpages
                        display_pages_hierarchy($page_id, $pages_hierarchy);
                        echo '</li>';
                    }
                    echo '</ul>';
                }
            }

            // Display the hierarchical list starting from top-level pages (parent_id = 0)
            echo '<div class="sitemap-content"><h2>Pages</h2>';
            display_pages_hierarchy(0, $pages_hierarchy);

            echo '<h2>Case Studies</h2><ul>';
            
            while ($query2->have_posts()) {
                $query2->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';

            // Display blog categories
            $categories = get_categories();
            if ($categories) {
                echo '<h2>Blog Categories</h2><ul>';
                foreach ($categories as $category) {
                    echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }
                echo '</ul></div>';
            echo '<div class="sitemap-content"><h2>Blogs</h2><ul>';
            
            while ($query->have_posts()) {
                $query->the_post();
                echo '<li><a href="' . get_permalink() . '/' . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul></div>';
            } else {
                echo '<p>No categories found.</p>';
            }

            // Reset post data
            wp_reset_postdata();
        } else {
            echo '<p>No content found.</p>';
        }
    }
    ?>
</div>
</div>
