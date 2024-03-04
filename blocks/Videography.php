<?php $basic= get_sub_field('videography'); 
   if( have_rows('videography') ): ?>
      <?php while( have_rows('videography') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
?>
    <div class="videography ">
        <div class="container">
            <div class="title">
                <p class="body1"><?php echo $basic['number'] ?></p>
                <h2 class="h3"><?php echo $basic['title'] ?></h2>
            </div>
            <div class="<?php if( get_sub_field('text_columns') ) { ?> text-columns <?php  } ?>">
                <?php echo $basic['text'] ?>
            </div>
        </div>  
        <div class="videography__video">
        </div>
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 