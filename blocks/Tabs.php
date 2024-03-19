<?php $basic = get_sub_field('tabs'); 
if( have_rows('tabs') ): ?>
    <?php $tab_count = 0; // Initialize tab counter ?>
    <?php while( have_rows('tabs') ): the_row(); 
        $img = get_sub_field('img');
        $imgVisual = $img['sizes']['medium'];
        $selected_value = get_sub_field('options');
    ?>

    <div class="tabs">  
        <div class="container">
            <!-- tabs buttons -->
            <div class="tabs__buttons">
                <?php if( have_rows('tab') ): ?>
                    <?php while( have_rows('tab') ): the_row(); ?>
                        <button class="tab-link" data-tab="tab-<?php echo $tab_count; ?>">
                            <?php echo the_sub_field('tab_title'); ?>
                        </button>
                        <?php $tab_count++; ?>
                    <?php endwhile; ?> 
                <?php endif; ?> 
            </div>

            <?php $tab_count = 0; // Reset tab counter for content matching ?>

            <!-- tabs content -->
            <div class="tabs__content">
                <?php if( have_rows('tab') ): ?>
                    <?php while( have_rows('tab') ): the_row(); ?>
                        <div id="tab-<?php echo $tab_count; ?>" class="tabs__content__item tab-content">
                            <h3 class="h3"><?php echo the_sub_field('tab_title'); ?></h3>
                            <?php echo the_sub_field('tab_text'); ?>
                        </div>
                        <?php $tab_count++; ?>
                    <?php endwhile; ?> 
                <?php endif; ?> 
            </div>
        </div>
   </div>

    <?php endwhile; ?> 
<?php endif; ?>
