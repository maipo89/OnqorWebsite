<?php $basic= get_sub_field('cta'); 
   if( have_rows('cta') ): ?>
      <?php while( have_rows('cta') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="cta">  
        <div class="container">
            <a class="anim-pulse" href="<?php echo $basic['btn_link'] ?>"><button class="btn-primary"><?php echo $basic['btn_text'] ?></button></a>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 