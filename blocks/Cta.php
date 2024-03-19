<?php $basic= get_sub_field('cta'); 
   if( have_rows('cta') ): ?>
      <?php while( have_rows('cta') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
         $selected_value = get_sub_field('options');
?>

    <div class="cta">  
        <div class="container">
            <a href="<?php echo $basic['btn_link'] ?>"><button class="btn-primary"><?php echo $basic['btn_text'] ?></button></a>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 