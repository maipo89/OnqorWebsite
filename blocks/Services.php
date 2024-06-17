<?php if( have_rows('services') ): ?>
    <?php while( have_rows('services') ): the_row(); 
        $img = get_sub_field('image');
        $imgVisual = $img['sizes']['medium'];
        $selected_value = get_sub_field('options');
    ?>
        <div class="services">
            <div class="container center">
            <?php if( have_rows('service') ): ?>
                <?php while( have_rows('service') ): the_row(); 
                    $unique_class = 'service-' . $index ; // Generate a unique class
                    $index++;
                ?>
                    <div class="services__item <?php echo $unique_class; ?>">
                        <div>
                            <?php 
                                $link = get_sub_field('link');
                                if ($link) {
                                    $link_title = $link['title'];  // First, get the link title
                                    $page = get_page_by_title($link_title);  // Then, retrieve the page using the title
                          
                                    if ($page) {
                                        // Get the service color from the retrieved page
                                        $service_color = get_field('service_color', $page->ID);
                                        $style = $service_color ? ' style="background-color:' . esc_attr($service_color) . ';"' : '';
                                        echo '<a><h2>' . esc_html($link_title) . '<span' . $style . '></span></h2></a>';

                                        // Fetch child pages
                                        $child_pages = get_pages(['child_of' => $page->ID]);
                                        if (count($child_pages) > 0) {
                                            echo '<ul>';
                                            foreach ($child_pages as $child) {
                                                echo '<li><a href="' . get_permalink($child->ID) . '">' . esc_html($child->post_title) . '</a></li>';
                                            }
                                            echo '</ul>';
                                        } else {
                                            echo '<p>No child pages available.</p>';
                                        }
                                    } else {
                                        echo '<a><h2>' . esc_html($link_title) . '<span>.</span></h2></a>';
                                    }
                                }
                            ?>
                        </div>
                        <?php if ($page) {
                            // Get the service color from the retrieved page
                            $service_colors = get_field('service_color', $page->ID); ?>
                            <a href="/services/<?php echo sanitize_title($link['title'])  ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="49" viewBox="0 0 72 49" fill="none" class="service-svg">
                                    <path d="M2 24.5L70 24.5M70 24.5L47.7692 2.00001M70 24.5L47.7692 47" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>

                            <!-- inline style for use of php -->
                            <style>
                                .<?php echo $unique_class; ?> > div:hover + a .service-svg path {
                                    stroke: <?php echo $service_colors ?>;
                                }
                                .<?php echo $unique_class; ?> > a:hover .service-svg path {
                                    stroke: <?php echo $service_colors ?>;
                                }

                            </style>
                        <?php } ?>
                    </div>
                <?php endwhile; ?> 
            <?php endif; ?>
            </div>  
        </div>  
    <?php endwhile; ?> 
<?php endif; ?>
