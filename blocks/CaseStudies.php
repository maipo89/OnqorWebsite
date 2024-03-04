<?php $basic= get_sub_field('case_studies'); 
   if( have_rows('case_studies') ): ?>
      <?php while( have_rows('case_studies') ): the_row(); 
         $img = get_sub_field('img');
         $imgVisual = $img['sizes']['medium'];
?>
    <div class="case-studies ">
        <div class="container">
            <h2>case studies blocks </h2>
            <div>
                
            </div>
        </div>  
    </div>  


<?php endwhile; ?> 
<?php endif; ?> 