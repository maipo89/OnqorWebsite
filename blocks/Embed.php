<?php $basic= get_sub_field('embed'); 
   if( have_rows('embed') ): ?>
      <?php while( have_rows('embed') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
?>
    <div class="embed">
        <div class="container ">

        </div>  
    </div>  

<?php endwhile; ?> 
<?php endif; ?> 