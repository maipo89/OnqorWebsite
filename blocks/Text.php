<?php $basic= get_sub_field('text'); 
   if( have_rows('text') ): ?>
      <?php while( have_rows('text') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="text-basic">  
        <div class="container">
             <div class="title">
               <?php if( $basic['number'] ) { ?>
                  <!-- <p class="body1"><?php echo $basic['number'] ?></p> -->
               <?php  } ?>
               <h2 class="subtitle1"><?php echo $basic['title'] ?></h2>
            </div>
            <?php echo $basic['text'] ?>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 