<?php $basic= get_sub_field('portfolio'); 
   if( have_rows('portfolio') ): ?>
      <?php while( have_rows('portfolio') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="portfolio">  
        <div class="container center">
            <h1>portfolio</h1>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 