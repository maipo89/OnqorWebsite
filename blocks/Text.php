<?php $basic= get_sub_field('text'); 
   if( have_rows('text') ): ?>
      <?php while( have_rows('text') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="text-basic">  
        <div class="container">
             <div class="title">
               <?php if( $basic['title'] ) { ?>
                  <h2 class="subtitle1"><?php echo $basic['title'] ?></h2>
               <?php  } ?>
            </div>
            <div class="wizywig <?php if( $basic['three_columns'] ) { ?> three-col <?php  } ?>">
               <?php echo $basic['text'] ?>
            </div>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 