<?php $basic= get_sub_field('testimonials_projects'); 
   if( have_rows('testimonials_projects') ): ?>
      <?php while( have_rows('testimonials_projects') ): the_row(); 
         $img = get_sub_field('image');
         $imgVisual = $img['sizes']['xlarge'];
?>
    <div class="testimonials-projects">
        <img src="<?php echo $imgVisual ?>" />
        <div class="testimonials-projects__text">
            <div class="container aife">
                <div class="testimonials-projects__text__container">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="462" height="214" viewBox="0 0 462 214" fill="none">
                        <path d="M3.44922 0L3.44921 211L461.779 211" stroke="white" stroke-width="5" stroke-dasharray="50 50"/>
                    </svg> -->
                    <h3><?php the_title(); ?> Testimonial</h3>
                    <?php echo $basic['text'] ?>
                    <p class="subtitle3"><?php echo $basic['author'] ?></p>
                </div>
            </div>  
        </div>
    </div>  

<?php endwhile; ?> 
<?php endif; ?> 