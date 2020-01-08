<!DOCTYPE HTML>

<!-- 

Joe Micheals: Voice-Over the Northwest

Web Design 2012 by Troy Fleischauer
http://portfolio.troyfleischauer.com

-->

<html id="top">
    <head>
		<title>Joe Micheals | <?php include('includes/titles.php'); ?></title>
        <meta charset="UTF-8">
        <meta name="ROBOTS" content="INDEX, FOLLOW">
        <meta name="description" content="<?php include('includes/meta-page-descriptions.php'); ?>" />
        <meta name=viewport content="width=device-width, initial-scale=1"> 
        
        <!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
          if ( $(window).width() > 600) {
            $('ul.myMenu').removeAttr('style');
          }
        });

      });
      </script>
    
		<link rel="stylesheet" type="text/css" href="jmstylesheet.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,400i,700,700i&display=swap" rel="stylesheet">   
    </head>
    
    <body>
        <div id="wrapper">
    
            <header>
                  <h1><a href="http://www.joemicheals.com/"> <img src="images/JMSignatureTrace2-405x160px-transparent.png" alt="Joe Micheals header image" /></a><span>Joe Micheals: Voice-Over Artist</span></h1>
                  <h2 class="tagline"><a href="http://www.joemicheals.com/">Joe Micheals | Voice-Over The Northwest</a></h2>
            </header>  <!-- End Header -->
      
            <?php include ('includes/navigation.php'); ?>
            
            
              
            <!-- Begin Middle -->
              