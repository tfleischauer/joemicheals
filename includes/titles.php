<?php

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Home'; }

if ($page == 'commercial.php') { print 'Commercial &amp; Industrial'; }

if ($page == 'games.php') { print 'Video Games'; }

if ($page == 'imaging.php') { print 'Imaging'; }

if ($page == 'on-camera.php') { print 'On-Camera'; }

if ($page == 'dance.php') { print 'Dance'; }

if ($page == 'bio.php') { print 'Bio'; }

if ($page == 'contact.php') { print 'Contact'; }

if ($page == 'thankyou.php') { print 'Thank You'; }

?>
