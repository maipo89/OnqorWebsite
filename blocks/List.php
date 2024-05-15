<?php $basic= get_sub_field('list'); 
   if( have_rows('list') ): ?>
      <?php while( have_rows('list') ): the_row(); 
    ?>

    <div class="list">  
        <div class="container">
            <h2 class="h3"><?php echo $basic['title']?></h2>
            <div class="list__wrapper">
                <?php if( have_rows('list_item') ): ?>
                    <?php while( have_rows('list_item') ): the_row(); ?>
                        <div class="list__wrapper__item" style="border-bottom-color: <?php echo $page_color; ?>";>
                            <h3 class="subtitle2"><?php echo the_sub_field('title'); ?></h3>
                            <div class="wizywig">
                                <?php echo the_sub_field('text'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?> 
                <?php endif; ?> 
            </div>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 