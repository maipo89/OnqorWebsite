<?php $basic= get_sub_field('cards'); 
   if( have_rows('cards') ): ?>
      <?php while( have_rows('cards') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="cards">  
        <div class="container">
            <h1>Cards</h1>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 