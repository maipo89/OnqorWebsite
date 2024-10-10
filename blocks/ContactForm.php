<?php $basic= get_sub_field('contact_form'); 
   if( have_rows('contact_form') ): ?>
      <?php while( have_rows('contact_form') ): the_row(); 
         $selected_value = get_sub_field('options');
?>

    <div class="contact contact-form">  
        <!-- text -->
        <div class="container">
            <div class="wizywig">
                <?php echo $basic['text'] ?>
            </div>
        </div>
        <!-- contatc form -->
        <div class="container fdr jcsb no-wrap">
            <div class="contact-form__form">
                <h2 class="h3"><?php echo $basic['title'] ?></h2>
                <!--  ----------------------------------------------------------------------  -->
                <!--  NOTE: Please add the following <FORM> element to your page.             -->
                <!--  ----------------------------------------------------------------------  -->
                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D8d00000AySZV" method="POST">

                    <input type=hidden name="oid" value="00D8d00000AySZV">
                    <input type=hidden name="retURL" value="https://onqor.com/thank-you/">

                    <!--  ----------------------------------------------------------------------  -->
                    <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
                    <!--  these lines if you wish to test in debug mode.                          -->
                    <!--  <input type="hidden" name="debug" value=1>                              -->
                    <!--  <input type="hidden" name="debugEmail"                                  -->
                    <!--  value="login@marketing-logic.com">                                      -->
                    <!--  ----------------------------------------------------------------------  -->

                    <div class="form-wrap">
                        <!-- first name -->
                        <div class="form-input-wrap">
                            <!-- <label for="first_name">First Name</label> -->
                            <input required placeholder="First Name*" id="first_name" maxlength="40" name="first_name" size="20" type="text" />
                        </div>

                        <!-- last name -->
                        <div class="form-input-wrap">
                            <!-- <label for="last_name">Last Name</label> -->
                            <input required placeholder="Last Name*"  id="last_name" maxlength="80" name="last_name" size="20" type="text" />
                        </div>
                    </div>

                    <div class="form-wrap">
                        <!-- Email -->
                        <div class="form-input-wrap">
                            <!-- <label for="email">Email</label> -->
                            <input required placeholder="Email*" id="email" maxlength="80" name="email" size="20" type="text" />
                        </div>

                        <!-- Tel -->
                        <div class="form-input-wrap">
                            <!-- <label for="phone">Phone</label> -->
                            <input placeholder="Tel" id="phone" maxlength="40" name="phone" size="20" type="text" />
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-input-wrap">
                        <!-- <label for="description">Tell us about your project*</label> -->
                        <textarea placeholder="Tell us about your project*" id="description" required name="description"></textarea>
                    </div>

                    <!-- submit -->
                    <input type="submit" name="submit" value="Send">

                    <p class="subtitle1">or call <a href="tel:+44 020 3927 7377">+44 020 3927 7377</a></p>
                </form>
                <!-- end form  -->


            </div>
            <p class="h3 or">Or</p>
            <div class="contact-form__book">
                <h2 class="h3"><?php echo $basic['subtitle'] ?></h2>
                <p><?php echo $basic['subtext'] ?></p>
                <a target="_blank"href="<?php echo $basic['btn_link']['url'] ?>"><button class="btn-primary"><?php echo $basic['btn_text'] ?></button></a>
            </div>
        </div>
     
   </div>

<?php endwhile; ?> 
<?php endif; ?> 