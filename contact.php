<?php include('includes/header.php'); ?>
                                
          	<div id="middle-contact">
         
                <div id="contact-joe">
                  <h2><em>Contact: Joe Micheals</em></h2>
                  
                  <address>
                    <p> Call or fax Joe at [206] 284.5482 </p><!--, <a href="http://facebook.com/joe.micheals">Facebook</a>-->
                  </address>   
                
                  <fieldset>
                    <legend><h3>Message Joe</h3></legend>
                    <form id="contact-form" action="submit.php" method="post">
                     <div class="error">
                      <p>
                        <label>First Name: </label>
                        <input type="text" id="first-name" name="first-name" required min-length="2" title="Please enter your first name." />
                      </p>
                      
                      <p>
                        <label>Last Name: </label>
                         <input type="text" id="last-name" name="last-name" required min-length="2" title="Please enter your last name." />
                      </p>
                      
                      <p>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required title="Please enter a valid email address." /> <!--required data-msg-email-->
                      </p>
                      
                      <p>
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required title="What is this email regarding?">
                      </p>
                      
                      <p>
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" required title="Please enter your message."></textarea>
                      </p>
                      
                      <p id="buttons">
                        <button type="submit" name="submit" value="submit">Send Message</button>
                      </p>
                      
                     </div> <!-- end error div -->
                    </form>
                  </fieldset>
                       
                  <div id="result"></div>
                 
                </div> <!-- end contact-joe -->
                
                <div class="flip-container" title="Illustration by Pat Cashman">   
                    <div class="cashman-drawing">
                        <div class="front-contact">
                            <!-- front side content -->
                        </div>
                        <div class="back-contact">
                            <!-- back side content -->
                        </div>
                    </div>   <!-- end .cashman-drawing --> 
                </div>	<!-- end .flipcontainer --> 
                 
              </div> <!-- end middle-contact --> 
              
              <script src="js/jquery-2.1.1.min.js"></script>
    
    		  <!-- form is for the ajax submit -->
              <script src="js/jquery.form.js"></script> 
              <script src="js/jquery.validate.min.js"></script>
              <script src="js/formscript.js"></script> 

<?php include("includes/footer.php"); ?>
            