<?php $basic= get_sub_field('image_text_columns'); 
   if( have_rows('image_text_columns') ): ?>
      <?php while( have_rows('image_text_columns') ): the_row(); 
         $img = get_sub_field('image');
         $imgVisual = $img['sizes']['large'];
?>
    <div class="image-text-columns">
        <div class="container">
            <h2><?php echo $basic['title'] ?></h2>
            <img src="<?php echo $imgVisual ?>"  alt="<?php echo esc_attr($img['alt']); ?>"/>
            <?php echo $basic['text'] ?>
        </div>  
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 