            <footer>
			   <script>
                 var date = new Date();
                 var year = date.getFullYear(); 
                 document.write("<p>&copy; " + year + " Joe Micheals. &nbsp;All rights reserved.</p>");
               </script>
            </footer>
        
        </div> <!-- end .wrapper -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
        <!--<script src="../js/navigation.js"></script>-->
        <script>
		  $(document).ready(function() {
			$('ul.myMenu > li').on('mouseover', openSubMenu);
			$('ul.myMenu > li').on('mouseout', closeSubMenu);
	
			function openSubMenu() {
			  $(this).find('ul').css('visibility', 'visible');
			};
	
			function closeSubMenu() {
			  $(this).find('ul').css('visibility', 'hidden');
			};
	
			$('div.navicon-container').click(function () {
				$('ul.myMenu').slideToggle();
			});
	
			$(window).resize(function () {
			  if ( $(window).width() >= 860) {
				$('ul.myMenu').removeAttr('style');
			  }
			});
	
		  });
		 </script>
         
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