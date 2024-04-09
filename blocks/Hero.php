<?php $basic= get_sub_field('hero'); 
   if( have_rows('hero') ): ?>
      <?php while( have_rows('hero') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="hero">
        <?php include('Hero/_TextImage.php'); ?>
        <?php include('Hero/_HeroVideo.php'); ?>
    </div>

<?php endwhile; ?> 
<?php endif; ?> 