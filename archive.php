<?php get_header(); ?>

<div class="archive archive__blogs">

    <div class="archive__blogs__hero">
        <div class="container">
            <div class="archive__blogs__hero__slider universal__slider">
                <?php 
                $current_id = get_the_ID(); // Get current post ID to exclude it from the query

                $args = array(
                    'post_type' => 'post', // Custom post type for blogs
                    'posts_per_page' => 3, // Number of posts to show
                    'post__not_in' => array($current_id), // Exclude current post
                    'orderby' => 'rand', // Order by random
                );

                $related_blogs = new WP_Query($args);
                if($related_blogs->have_posts()) : 
                    while($related_blogs->have_posts()) : $related_blogs->the_post(); ?>
                        <div class="archive__blogs__hero__slider__item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <div class="text">
                                    <p>Featured Blog</p>
                                    <h3 class="h3"><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <p>Read more</p>
                                </div> 
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No related blogs found.</p>
                <?php endif; wp_reset_postdata(); ?> 
            </div>
        </div>  
    </div>

    <!-- blog filter -->
    <div class="container center overflow-visible">
        <!-- dropdown filter -->
        <div class="dropdown">
            <div id="category-dropdown" name="study_category" class="dropdown__filter">
                Select a Category
                <svg class="dropdown__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                    <path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="dropdown__options">
                <div class="dropdown__options__items">
                    <div value="all">All Categories</div>
                    <?php 
                    $terms = get_terms('category', array('hide_empty' => true));
                    foreach ($terms as $term) {
                        echo '<div value="' . $term->slug . '">' . $term->name . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- posts -->
    <div class="articles-wrapper">
        <div id="articles-container">
            <?php
            // Pagination: Handle the page number from the URL (both /blog/ and /blog/?page=1)
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            
            // Get the category from the query or default to all
            $category = get_query_var('category_name') ?: '';

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 21,
                'paged' => $paged,
            );

            // Add category filter if it's not "all"
            if (!empty($category) && $category !== 'all') {
                $args['category_name'] = $category;
            }

            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="article anim-fadeinstagger" id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
                        <a href="<?php the_permalink(); ?>">
                            <div>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="article__img">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="article__img__hover">
                                            <?php 
                                                $headline_copy = get_field('headline_copy');
                                                $industry = get_field('industry');
                                                $department = get_field('department');
                                            ?>
                                            <div class="container-subtitle">
                                                <h3 class="subtitle1"><?php the_title(); ?></h3>
                                                <?php if($industry) : ?>
                                                    <p class="industry"><?php echo $industry ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <?php if($department || $headline_copy) : ?>
                                                <div class="container-headline">
                                                    <?php if($headline_copy) : ?>
                                                        <p class="headline-copy"><?php echo $headline_copy ?></p>
                                                    <?php endif; ?>
                                                    <?php if($department) : ?>
                                                        <p class="department"><?php echo $department ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <button class="btn-secondary">View Project</button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <h3 class="subtitle2"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- Pagination -->
        <!-- <?php $total_pages = $query->max_num_pages;
        if ($total_pages > 1) {
            echo '<div class="container"><div class="pagination">';
            for ($i = 1; $i <= $total_pages; $i++) {
                echo '<button class="page" data-page="' . $i . '">' . $i . '</button>';
            }
            echo '</div></div>';
        }
        endif;
        wp_reset_postdata();
        ?> -->
    </div>
</div>

<?php include('blocks/RelatedBlogs.php'); ?>
<?php get_footer(); ?>
