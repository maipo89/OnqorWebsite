<?php $basic= get_sub_field('banner'); 
   if( have_rows('banner') ): ?>
      <?php while( have_rows('banner') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
?>
    <div class="banner">
        <div class="container ">
      
            <h2 class="h3">
                <span>
                    <?php echo $basic['title'] ?>
                </span>      
                <svg xmlns="http://www.w3.org/2000/svg" width="686" height="42" viewBox="0 0 686 42" fill="none">
                    <path d="M683 42L683 3.00001L-7.64116e-06 3" stroke="#00AAFF" stroke-width="5" stroke-dasharray="50 50"/>
                </svg>
            </h2>
            <div class="banner__text">
                <?php echo the_sub_field('text') ?>
            </div>
        </div>  
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 