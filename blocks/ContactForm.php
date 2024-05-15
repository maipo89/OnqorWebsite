<?php $basic= get_sub_field('contact_form'); 
   if( have_rows('contact_form') ): ?>
      <?php while( have_rows('contact_form') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="contact-form">  
        <!-- text -->
        <div class="container">
            <p class="body1"><?php echo $basic['text'] ?></p>
        </div>
        <!-- contatc form -->
        <div class="container fdr jcsb no-wrap">
            <div class="contact-form__form">
                <h2 class="h3"><?php echo $basic['title'] ?></h2>
                <div class="pipedriveWebForms" ref="pipedriveForm" data-pd-webforms="https://webforms.pipedrive.com/f/ccK1FCzKsYMSwdzX5aRq1i1auJvFuoyKHfeE5BeThOXa1kkUV1XR78QPEeGhieAS7F"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
            </div>
            <p class="h3 or">Or</p>
            <div class="contact-form__book">
                <h2 class="subtitle1"><?php echo $basic['subtitle'] ?></h2>
                <p><?php echo $basic['subtext'] ?></p>
                <a href="#"><button class="btn-primary"><?php echo $basic['btn_text'] ?></button></a>
            </div>
        </div>
     
   </div>

<?php endwhile; ?> 
<?php endif; ?> 