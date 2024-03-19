<?php $basic= get_sub_field('embed'); 
   if( have_rows('embed') ): ?>
      <?php while( have_rows('embed') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
         $selected_value = get_sub_field('background_color');
?>
    <div class="embed  <?php echo $basic ?>">
        <div class="container center">
            <?php echo $basic['code'] ?>
        </div>  
    </div>  

<?php endwhile; ?> 
<?php endif; ?> 