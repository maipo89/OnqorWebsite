<?php 
    $basic = get_sub_field('other_services'); 
    if (have_rows('other_services')): 
        while (have_rows('other_services')): the_row(); 
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
                    <h2><?php echo $basic['title'] ?></h2>
                    <div class="wizywig"><?php echo $basic['text'] ?></div>
                    <div class="other-services__wrapper">
                        <div class="other-services__service">
                            <?php $serviceIndex = 0; ?>
                            <?php foreach ($children as $child): ?>
                                 <?php 
                                    // Get featured image of the child page
                                    $child_img = get_the_post_thumbnail($child->ID, 'thumbnail');
                                ?>
                                <?php if ($child_img) : ?>
                                    <div data-service="<?php echo $serviceIndex; ?>">
                                        <?php echo $child_img; ?>
                                        <a href="#"><button class="btn-secondary">View</button></a>
                                    </div>
                                <?php endif; ?>
                            <?php $serviceIndex ++; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="other-services__sub">
                            <!-- Buttons for children pages -->
                            <div class="other-services__sub__buttons">
                                <?php foreach ($children as $child): ?>
                                    <button data-button="<?php echo $btnIndex; ?>" class="Subtitle2"><?php echo $child->post_title; ?></button>
                                <?php $btnIndex ++; ?>
                                <?php endforeach; ?>
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
                                        <div>
                                            <?php 
                                                // Get featured image of the grandchild page
                                                $grandchild_img = get_the_post_thumbnail($grandchild->ID, 'thumbnail');
                                            ?>
                                            <?php if ($grandchild_img) : ?>
                                                <?php echo $grandchild_img; ?>
                                            <?php endif; ?>
                                            <p><?php echo $grandchild->post_title; ?></p>
                                            <a href="#"><button class="btn-primary">View</button></a>
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