<?php $basic= get_sub_field('text'); 
   if( have_rows('text') ): ?>
      <?php while( have_rows('text') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
         $selected_value = get_sub_field('options');
?>

    <div class="text">  
        <div class="container">

        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 