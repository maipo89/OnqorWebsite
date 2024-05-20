<?php $basic= get_sub_field('hero'); 
   if( have_rows('hero') ): ?>
      <?php while( have_rows('hero') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="hero">
        <?php include('Hero/_TextImage.php'); ?>
        <?php include('Hero/_HeroVideo.php'); ?>
        <?php include('Hero/_PlayVideo.php'); ?>
        <?php include('Hero/_ListImage.php'); ?>
        <?php include('Hero/_HeroBasic.php'); ?>
        <?php include('Hero/_HeroImages.php'); ?>
    </div>

<?php endwhile; ?> 
<?php endif; ?> 