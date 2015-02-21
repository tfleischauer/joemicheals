
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!-- Begin Navigation"  id="navigation-items-->
<nav>
    <ul>
        <li<?php if ($page == 'index.php' ) { print ' class="main-on"'; } ?>><a href="index.php" class="first">Home</a></li>
        <li<?php if ($page == 'commercial.php' ) { print ' class="main-on"'; } ?>><a href="commercial.php">Commercial<!-- &#47; forward slash--> &amp; Industrial</a></li>
        <li<?php if ($page == 'games.php' ) { print ' class="main-on"'; } ?>><a href="games.php">Video Games</a></li>
        <li<?php if ($page == 'imaging.php' ) { print ' class="main-on"'; } ?>><a href="imaging.php">Imaging</a></li>
        <li<?php if ($page == 'on-camera.php' ) { print ' class="main-on"'; } ?>><a href="on-camera.php">On-Camera</a></li>
        <li<?php if ($page == 'dance.php' ) { print ' class="main-on"'; } ?>><a href="dance.php">Dance</a></li>
        <li<?php if ($page == 'bio.php' ) { print ' class="main-on"'; } ?>><a href="bio.php">Bio</a></li>
        <li<?php if ($page == 'contact.php' ) { print ' class="main-on"'; } ?>><a href="contact.php">Contact</a></li>
    </ul>
</nav>
<!-- End Navigation -->