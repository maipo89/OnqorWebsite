<?php $basic= get_sub_field('photography'); 
   if( have_rows('photography') ): ?>
      <?php while( have_rows('photography') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['large'];
         $selected_value = get_sub_field('options');
?>
    <div class="photography
                <?php if( get_sub_field('images_center') ) { ?> images-center <?php  } ?>
    ">
        <div class="container ">
            <!-- title -->
            <?php if( $basic['title'] ) { ?>
                <div class="title">
                    <p class="body1"><?php echo $basic['number'] ?></p>
                    <h2 class="h3"><?php echo $basic['title'] ?></h2>
                </div>
            <?php  } ?>

            <!-- text -->
            <?php if( $basic['text'] ) { ?>
                <div class="wizywig">
                    <?php echo $basic['text'] ?>
                </div>
            <?php  } ?>

            <!-- image options -->
            <?php include('Photography/_ColumnsThree.php'); ?>
            <?php include('Photography/_ColumnsTwo.php'); ?>
            <?php include('Photography/_Abstract.php'); ?>
        </div>  
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 