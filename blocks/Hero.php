<?php $basic= get_sub_field('hero'); 
   if( have_rows('hero') ): ?>
      <?php while( have_rows('hero') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
         $selected_value = get_sub_field('options');
?>

    <div class="hero">
        <?php include('Hero/_TextImage.php'); ?>
    </div>

<?php endwhile; ?> 
<?php endif; ?> 