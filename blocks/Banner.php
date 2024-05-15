<?php $basic= get_sub_field('banner'); 
   if( have_rows('banner') ): ?>
      <?php while( have_rows('banner') ): the_row(); 

?>
    <div class="banner
        <?php if( get_sub_field('no_columns') ) { ?> no-columns <?php  } ?>
        <?php if( get_sub_field('text_right') ) { ?> text-right <?php  } ?>
    ">
        <div class="container ">
            <div class="banner__title">
                <h2 class="h3">
                    <span>
                        <?php echo $basic['title'] ?>
                    </span>    
                </h2>
                <?php if( $basic['btn_text'] ) : ?>  
                    <a class="anim-pulse anim-pulse-<?php echo $pulse_color; ?>"><button class="btn-secondary" style="border-color: <?php echo $page_color; ?>"><?php echo $basic['btn_text'] ?></button></a>
                <?php endif; ?> 
            </div>

            <div class="banner__text">
                <?php echo the_sub_field('text') ?>
            </div>
        </div>  
    </div>  

<?php endwhile; ?> 
<?php endif; ?> 