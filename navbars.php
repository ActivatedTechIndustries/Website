	<?php 
        session_start();

     	if(isset($_SESSION["email"]) && $_SESSION["email"] != "" )
        {
        	include 'navbar_logged_in.php';
        }
        else{
        	include 'default_navbar.php';
        }
    ?>