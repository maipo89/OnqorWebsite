<?php $basic= get_sub_field('images_text'); 
   if( have_rows('images_text') ): ?>
      <?php while( have_rows('images_text') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
         $selected_value = get_sub_field('options');
?>

    <div class="images-text">
        <?php include('ImagesText/_ImagesOffset.php'); ?>
        <?php include('ImagesText/_ImageLeftRight.php'); ?>
        <?php include('ImagesText/_ImageSingle.php'); ?>
        <?php include('ImagesText/_ImageTripleOffset.php'); ?>
        <?php include('ImagesText/_ImageTriple.php'); ?>
        <?php include('ImagesText/_ImageSteps.php'); ?>
        <?php include('ImagesText/_AntsColumns.php'); ?>
        <?php include('ImagesText/_AntsText.php'); ?>
        <?php include('ImagesText/_Branding.php'); ?>
        <?php include('ImagesText/_ImageOverlap.php'); ?>
        <?php include('ImagesText/_ImageOverlapAlt.php'); ?>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 