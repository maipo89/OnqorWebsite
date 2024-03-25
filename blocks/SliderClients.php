<?php $basic= get_sub_field('slider_clients'); 
   if( have_rows('slider_clients') ): ?>
      <?php while( have_rows('slider_clients') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['small'];
?>
    <div class="slider-clients ">
        <div class="container center">
        <?php echo $basic['text'] ?>
            <div class="slider-clients__slider" dir="rtl">
                <?php
                    $logos = get_sub_field('clients');
                    foreach($logos as $image) {
                        echo '<div class="logo">
                                <img src="',esc_url($image['sizes']['small']),'" alt="',esc_attr($image['alt']),'" width="200px">
                            </div>';
                    }
                ?>
            </div>
        </div>  
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 