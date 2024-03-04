<?php $basic= get_sub_field('text'); 
   if( have_rows('text') ): ?>
      <?php while( have_rows('text') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
         $selected_value = get_sub_field('options');
?>

    <div class="text-basic">  
        <div class="container">
             <div class="title">
               <p class="body1"><?php echo $basic['number'] ?></p>
               <h2 class="h3"><?php echo $basic['title'] ?></h2>
            </div>
            <?php echo $basic['text'] ?>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 