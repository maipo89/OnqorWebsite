<?php $basic= get_sub_field('stats'); 
   if( have_rows('stats') ): ?>
      <?php while( have_rows('stats') ): the_row(); 
         $img = get_sub_field('image');
         $imgVisual = $img['sizes']['medium'];
?>
    <div class="stats">
            <div class="container center">
                <div class="title">
                    <p class="body1"><?php echo $basic['number'] ?></p>
                    <h2 class="h3"><?php echo $basic['title'] ?></h2>
                </div>
                <?php echo $basic['text'] ?>
            </div>
        <div class="stats__stats">
            <div class="container center">
                <div class="stats__stats__title">
                    <img src="<?php echo $imgVisual ?>"/>
                    <p>Results</p>
                </div>
                <div class="stats__stats__items">
                    <?php if( have_rows('stat') ): ?>
                        <?php while( have_rows('stat') ): the_row(); ?>
                            <div>
                                <p class="subtitle1"><?php echo the_sub_field('number') ?></p>
                                <h3 class="body2"><?php echo the_sub_field('title') ?></h3>
                            </div>
                        <?php endwhile; ?> 
                    <?php endif; ?> 
                </div>
            </div>  
        </div>
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 