<?php include('includes/header.php'); ?>
                                
          	<div id="middle-contact">
         
                <div id="contact-joe">
                  <h2><em>Contact: Joe Micheals</em></h2>
                  
                  <h3>Your Message Has Been Sent. Thank You!</h3>
                  
                  <address class="thankyou">
                      <p> Call or fax Joe at [206] 284.5482 </p>
                  </address> 
                    
                  <!--<h2 class="section-label max940px">Your message has been sent!</h2>-->
              
                  <fieldset>
                    <!--<legend><h2>Contact</h2></legend>-->
                    <form id="contact-form" action="submit.php" method="post">
                     <div class="error">
                      <p>
                        <!--<label for="fname">First Name: </label>-->
                        <label>First Name: </label>
                        <input type="text" id="first-name" name="first-name" required min-length="2" title="Please enter your first name." />
                      </p>
                      
                      <p>
                        <!--<label for="lname">Last Name: </label>-->
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
                   
                <div class="cashman-drawing">
                    <img src="images/joeByCashman-front-500x746px.jpg" alt="Illustration of Joe Micheals by Pat Cashman" title="Illustration by Pat Cashman">
                </div>
                 
              </div> <!-- end middle-contact --> 

<?php /*?>Not using footer includes because this page has the Pat Cashman illustration credit.<?php */?>             
<?php /*?><?php include("includes/footer.php"); ?><?php */?> 

                <footer>
                  <p><small>Joe Micheals illustrations by Pat Cashman</small></p>
                  <script>
                      var date = new Date();
                      var year = date.getFullYear(); 
                      document.write("<p>&copy; " + year + " Joe Micheals. All rights reserved.</p>");
                  </script>
                <footer>
         
        </div> <!-- end wrapper -->
         
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <script src="js/jquery-2.1.1.min.js"></script>
        <!-- form is for the ajax submit -->
        <script src="js/jquery.form.js"></script> 
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/myscript.js"></script> 
        <script src="js/formscript.js"></script> 
        <script src="js/less-1.7.0.min.js"></script>
             
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-60037331-1', 'auto');
          ga('send', 'pageview');  
        </script>

    </body>
    
</html>
