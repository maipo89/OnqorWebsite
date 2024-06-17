<?php 
$basic = get_sub_field('other_services'); 
if (have_rows('other_services')): 
    while (have_rows('other_services')): 
        the_row(); 
        $img = get_sub_field('image');
        $imgVisual = $img['sizes']['medium'];
        $selected_value = get_sub_field('options');
        // Get the Services page ID
        $services_page_id = get_page_by_title('Services')->ID;
        // Get only the immediate children of the Services page
        $children = get_pages(array(
            'parent' => $services_page_id, // use 'parent' instead of 'child_of'
            'sort_column' => 'menu_order',
        )); 
        $btnIndex = 0;
?>
        <div class="other-services">
            <div class="container">
                <h2 class="h3"><?php echo $basic['title'] ?></h2>
                <div class="wizywig"><?php echo $basic['text'] ?></div>
                <div class="other-services__wrapper">
                    <div class="other-services__service">
                        <?php $serviceIndex = 0; ?>
                        <?php foreach ($children as $child): ?>
                             <?php 
                                // Get featured image of the child page
                                $child_img = get_the_post_thumbnail($child->ID, 'thumbnail');
                                // Get permalink of the child page
                                $child_permalink = get_permalink($child->ID);
                            ?>
                            <?php if ($child_img) : ?>
                                <a href="<?php echo $child_permalink; ?>">
                                    <div data-service="<?php echo $serviceIndex; ?>">
                                    <?php echo $child_img; ?>
                                            <button class="btn-secondary">View</button>
                                    </div>
                                </a>
                            <?php endif; ?>
                        <?php $serviceIndex ++; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="other-services__sub">
                        <!-- Buttons for children pages -->
                        <div class="other-services__sub__buttons">
                            <?php foreach ($children as $child): ?>
                                <button data-button="<?php echo $btnIndex; ?>" 
                                class="subtitle2">
                                <?php echo $child->post_title; ?>
                                <span style="background-color: <?php echo get_field('service_color', $child->ID); ?>"></span>
                            </button>
                            <?php $btnIndex ++; ?>
                            <?php endforeach; ?>
                        </div>

                        <!-- dropdown -->
                        <?php $dropdownIndex = 0; ?>
                        <div class="other-services__sub__dropdown dropdown">
                            <div id="category-dropdown" name="study_category" class="dropdown__filter">
                                Production
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                    <path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="dropdown__options">
                                <div class="dropdown__options__items">
                                    <?php foreach ($children as $child): ?>
                                        <div data-button="<?php echo $dropdownIndex; ?>" class=""><?php echo $child->post_title; ?></div>
                                        <?php $dropdownIndex++; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Items for grandchildren --> 
                        <?php $tabIndex = 0; ?>
                        <?php foreach ($children as $child): ?>
                            <?php 
                                // Get the grandchildren of the current child page
                                $grandchildren = get_pages(array(
                                    'child_of' => $child->ID,
                                    'sort_column' => 'menu_order',
                                )); 
                            ?>
                            <div class="other-services__sub__items" data-tab="<?php echo $tabIndex; ?>">
                                <!-- Display grandchildren pages -->
                                <?php foreach ($grandchildren as $grandchild): ?>
                                    <?php 
                                        // Get featured image of the grandchild page
                                        $grandchild_img = get_the_post_thumbnail($grandchild->ID, 'thumbnail');
                                        // Get permalink of the grandchild page
                                        $grandchild_permalink = get_permalink($grandchild->ID);
                                    ?>
                                    <a href="<?php echo $grandchild_permalink; ?>">
                                        <div>
                                            <?php if ($grandchild_img) : ?>
                                                <?php echo $grandchild_img; ?>
                                            <?php endif; ?>
                                            <p><?php echo $grandchild->post_title; ?></p>
                                            <button class="btn-primary">View</button>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <?php $tabIndex ++; ?>
                        <?php endforeach; ?>

                        <!-- slider -->
                        <!-- Items for grandchildren -->
                        <?php $tabIndex = 0; ?>
                        <?php foreach ($children as $child): ?>
                            <?php 
                                // Get the grandchildren of the current child page
                                $grandchildren = get_pages(array(
                                    'child_of' => $child->ID,
                                    'sort_column' => 'menu_order',
                                )); 
                            ?>
                            <div class="other-services__sub__items__slider other-services__sub__items__slider-<?php echo $tabIndex; ?>" data-tab="<?php echo $tabIndex; ?>">
                                <!-- Display grandchildren pages -->
                                <?php foreach ($grandchildren as $grandchild): ?>
                                    <div>
                                        <?php 
                                            // Get featured image of the grandchild page
                                            $grandchild_img = get_the_post_thumbnail($grandchild->ID, 'thumbnail');
                                            // Get permalink of the grandchild page
                                            $grandchild_permalink = get_permalink($grandchild->ID);
                                        ?>
                                        <?php if ($grandchild_img) : ?>
                                            <?php echo $grandchild_img; ?>
                                        <?php endif; ?>
                                        <p><?php echo $grandchild->post_title; ?></p>
                                        <a href="<?php echo $grandchild_permalink; ?>"><button class="btn-primary">View</button></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php $tabIndex ++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>  
        </div>  
<?php 
    endwhile; 
endif; 
?>
