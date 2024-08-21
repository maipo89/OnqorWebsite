    <div class="contact contact-form-footer <?php if (is_front_page()) echo 'home-footer'; ?>">  
        <div class="container">
            <div class="contact-form-footer__wrapper">
                <h2>Have a project you want to discuss?</h2>
              <!--  ----------------------------------------------------------------------  -->
                <!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
                <!--  If necessary, please modify the charset parameter to specify the        -->
                <!--  character set of your HTML page.                                        -->
                <!--  ----------------------------------------------------------------------  -->

                <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

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

                    <!-- Salutation -->
                    <!-- <div class="form-input-wrap">
                        <label for="salutation">Salutation</label><select  id="salutation" name="salutation"><option value="">--None--</option><option value="Dr.">Dr.</option>
                        <option value="Miss">Miss</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Prof.">Prof.</option>
                        </select>
                    </div> -->

                    <div class="form-wrap">
                        <!-- first name -->
                        <div class="form-input-wrap">
                            <label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
                        </div>

                        <!-- last name -->
                        <div class="form-input-wrap">
                            <label for="last_name">Last name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" />
                        </div>
                    </div>

                    <div class="form-wrap">
                        <!-- country -->
                        <div class="form-input-wrap">
                            <label for="country">Country</label><input  id="country" maxlength="40" name="country" size="20" type="text" />
                        </div>

                        <!-- phone -->
                        <div class="form-input-wrap">
                            <label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" />
                        </div>
                    </div>

                    <!-- position -->
                    <!-- <div class="form-input-wrap">
                        <label for="position">Position:</label><input  id="00NJ7000000hvnL" maxlength="128" name="00NJ7000000hvnL" size="20" type="text" />
                    </div> -->

                    <!-- company -->
                    <div class="form-input-wrap">
                        <label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" />
                    </div>

                    <!-- service interests -->
                    <!-- <div class="form-input-wrap">
                        <label for="serviceinterests">Service Interests:</label><select  id="00N8d00000WqA9l" multiple="multiple" name="00N8d00000WqA9l" title="Service Interests"><option value="Animation">Animation</option>
                        <option value="APP Development">APP Development</option>
                        <option value="Branding">Branding</option>
                        <option value="Content Creation">Content Creation</option>
                        <option value="Copywriting">Copywriting</option>
                        <option value="Digital Advertising">Digital Advertising</option>
                        <option value="Email Marketing">Email Marketing</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Photography">Photography</option>
                        <option value="Print Work">Print Work</option>
                        <option value="SEO">SEO</option>
                        <option value="Social Media Management">Social Media Management</option>
                        <option value="Strategy">Strategy</option>
                        <option value="UI/UX Design">UI/UX Design</option>
                        <option value="Videography">Videography</option>
                        <option value="Website Development">Website Development</option>
                        </select>
                    </div> -->
                    <div class="form-input-wrap">
                        <label for="serviceinterests">Service Interests:</label>
                        <div id="serviceinterests">
                            <label><input type="checkbox" id="00N8d00000WqA9l_Animation" name="00N8d00000WqA9l" value="Animation" title="Service Interests"> Animation</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_APP_Development" name="00N8d00000WqA9l" value="APP Development" title="Service Interests"> APP Development</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Branding" name="00N8d00000WqA9l" value="Branding" title="Service Interests"> Branding</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Content_Creation" name="00N8d00000WqA9l" value="Content Creation" title="Service Interests"> Content Creation</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Copywriting" name="00N8d00000WqA9l" value="Copywriting" title="Service Interests"> Copywriting</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Digital_Advertising" name="00N8d00000WqA9l" value="Digital Advertising" title="Service Interests"> Digital Advertising</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Email_Marketing" name="00N8d00000WqA9l" value="Email Marketing" title="Service Interests"> Email Marketing</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Graphic_Design" name="00N8d00000WqA9l" value="Graphic Design" title="Service Interests"> Graphic Design</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Photography" name="00N8d00000WqA9l" value="Photography" title="Service Interests"> Photography</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Print_Work" name="00N8d00000WqA9l" value="Print Work" title="Service Interests"> Print Work</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_SEO" name="00N8d00000WqA9l" value="SEO" title="Service Interests"> SEO</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Social_Media_Management" name="00N8d00000WqA9l" value="Social Media Management" title="Service Interests"> Social Media Management</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Strategy" name="00N8d00000WqA9l" value="Strategy" title="Service Interests"> Strategy</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_UI_UX_Design" name="00N8d00000WqA9l" value="UI/UX Design" title="Service Interests"> UI/UX Design</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Videography" name="00N8d00000WqA9l" value="Videography" title="Service Interests"> Videography</label>
                            <label><input type="checkbox" id="00N8d00000WqA9l_Website_Development" name="00N8d00000WqA9l" value="Website Development" title="Service Interests"> Website Development</label>
                        </div>
                    </div>
                    
                    <!-- submit -->
                    <input type="submit" name="submit" value="Send">

                </form>
            </div>
        </div>
   </div>