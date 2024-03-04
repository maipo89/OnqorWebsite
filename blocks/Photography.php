<?php $basic= get_sub_field('photography'); 
   if( have_rows('photography') ): ?>
      <?php while( have_rows('photography') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
         $selected_value = get_sub_field('options');
?>
    <div class="photography
                <?php if( get_sub_field('images_center') ) { ?> images-center <?php  } ?>
    ">
        <div class="container ">
            <div class="title">
                <p class="body1"><?php echo $basic['number'] ?></p>
                <h2 class="h3"><?php echo $basic['title'] ?></h2>
            </div>
            <?php echo $basic['text'] ?>
            <!-- image options -->
            <?php include('Photography/_ColumnsThree.php'); ?>
            <?php include('Photography/_ColumnsTwo.php'); ?>
        </div>  
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 