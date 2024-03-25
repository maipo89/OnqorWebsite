<?php $basic= get_sub_field('dropdown_text'); 
   if( have_rows('dropdown_text') ): ?>
      <?php while( have_rows('dropdown_text') ): the_row(); 
?>

    <div class="dropdown-text">  
        <div class="container center">  
                <!-- dropdown -->
                        <div class="dropdown">
                            <div id="category-dropdown" name="text-category" class="dropdown__filter">
                                All
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                    <path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="dropdown__options">
                                <div class="dropdown__options__items">
                                <div value="all">All</div>
                                    <?php if( have_rows('text_sections') ): ?>
                                        <?php while( have_rows('text_sections') ): the_row(); ?>
                                            <div><?php echo the_sub_field('section_title'); ?></div>
                                        <?php endwhile; ?> 
                                    <?php endif; ?> 
                                </div>
                            </div>
                        </div>

                <!-- text -->
                <?php if( have_rows('text_sections') ): ?>
                    <?php while( have_rows('text_sections') ): the_row(); 
                        $sectionTitle = get_sub_field('section_title');
                    ?>
                            <?php if( have_rows('section_text') ): ?>
                                <?php while( have_rows('section_text') ): the_row(); ?>
                                    <div class="dropdown-text__text <?php echo $sectionTitle ?>">
                                        <h2 class="subtitle1"><?php echo the_sub_field('title'); ?></h2>
                                        <div class="wizywig">
                                            <?php echo the_sub_field('text'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?> 
                            <?php endif; ?> 

                    <?php endwhile; ?> 
                <?php endif; ?> 
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 
                     