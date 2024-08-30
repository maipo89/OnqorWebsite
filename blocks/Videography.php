<?php $basic= get_sub_field('videography'); 
   if( have_rows('videography') ): ?>
      <?php while( have_rows('videography') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['xlarge'];
?>
    <div class="videography ">
        <div class="container">
            <div class="title">
                <!-- <p class="body1"><?php echo $basic['number'] ?></p> -->
                <h2 class="h3"><?php echo $basic['title'] ?></h2>
            </div>
            <div class="videography__text <?php if( get_sub_field('text_columns') ) { ?> text-columns <?php  } ?>">
                <?php echo $basic['text'] ?>
            </div>
        </div>  
        <div class="container">
            <div class="videography__video">
                <?php if( get_sub_field('embed') ) { ?> 
                    <?php echo $basic['embed'] ?>
                <?php  } ?>
                <?php if( get_sub_field('video') ) { ?> 
                    <?php 
                        $link_data = get_sub_field('video'); 
                        if(!empty($link_data)){ $link = $link_data['url'];  ?>
                        <video playsinline class="videoplayer">
                            <source src="<?php echo $link; ?>">   
                        </video>
                    <?php } ?>

                    <div class="videoplayer-buttons">
                        <?php include('Videography/PlayButton.php'); ?>
                        <?php include('Videography/PauseButton.php'); ?>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 

