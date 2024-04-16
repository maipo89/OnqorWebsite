<?php $basic= get_sub_field('contact_form'); 
   if( have_rows('contact_form') ): ?>
      <?php while( have_rows('contact_form') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="contact-form">  
        <div class="container">
            <div class="contact-form__wrapper">
                <h2><?php echo $basic['title'] ?></h2>
                <div class="pipedriveWebForms" ref="pipedriveForm" data-pd-webforms="https://webforms.pipedrive.com/f/ccK1FCzKsYMSwdzX5aRq1i1auJvFuoyKHfeE5BeThOXa1kkUV1XR78QPEeGhieAS7F"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
            </div>
        </div>
   </div>

<?php endwhile; ?> 
<?php endif; ?> 