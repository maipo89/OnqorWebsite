<?php if ($selected_value == 'branding'): ?>
   <?php if( have_rows('branding') ): ?>
        <?php while( have_rows('branding') ): the_row(); 
            $img = get_sub_field('image');
            $imgVisual = $img['sizes']['medium'];
            $selected_value = get_sub_field('options');
        ?>

      <?php include('Branding/__LayoutOne.php'); ?>
      <?php include('Branding/__LayoutTwo.php'); ?>
      <?php include('Branding/__LayoutThree.php'); ?>

   <?php endwhile; ?> 
   <?php endif; ?> 
<?php endif; ?> 