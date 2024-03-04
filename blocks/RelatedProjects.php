<?php $basic= get_sub_field('related_projects'); 
   if( have_rows('related_projects') ): ?>
      <?php while( have_rows('related_projects') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
?>
    <div class="related-projects ">
        <div class="container center">
        <?php echo $basic['text'] ?>
            <div class="related-projects__slider" dir="rtl">
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