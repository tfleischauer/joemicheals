<?php

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Home'; }

if ($page == 'commercial.php') { print 'Commercial'; }

if ($page == 'industrial.php') { print 'Industrial'; }

if ($page == 'imaging.php') { print 'Imaging'; }

if ($page == 'portal2.php') { print 'Portal 2'; }

if ($page == 'on-camera.php') { print 'On-Camera'; }

if ($page == 'dance.php') { print 'Dance'; }

if ($page == 'bio.php') { print 'Bio'; }

if ($page == 'contact.php') { print 'Contact'; }

if ($page == 'thankyou.php') { print 'Thank You'; }

?>
