<?php $basic= get_sub_field('cta'); 
   if( have_rows('cta') ): ?>
      <?php while( have_rows('cta') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="cta">  
        <div class="container center">
            <a class="anim-pulse" href="<?php echo $basic['btn_link']['url'] ?>"><button class="btn-secondary"><?php echo $basic['btn_text'] ?></button></a>
            <?php if( get_sub_field('text') ) : ?> 
                <?php echo $basic['text']?>
            <?php endif; ?>     
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 