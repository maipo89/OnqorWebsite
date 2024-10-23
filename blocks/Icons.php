<?php $basic= get_sub_field('icons'); 
   if( have_rows('icons') ): ?>
      <?php while( have_rows('icons') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="icons">
        <?php include('Icons/_Row.php'); ?>
        <?php include('Icons/_Grid.php'); ?>
    </div>

<?php endwhile; ?> 
<?php endif; ?> 