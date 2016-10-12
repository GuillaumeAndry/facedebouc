<?php
if(isset($_GET['action']) && $_GET['action']=="deconnexion") { // Il taut détruire la session
	session_destroy();
	header("Location:login.php");
}
?>