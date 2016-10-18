<?php
// La page du formulaire de création d'un compte.
// Le formulaire sera envoyé vers ../traitement/creercompte.php


session_start();
include("../divers/connexion.php");
include("../divers/balises.php");

if(isset($_POST['login'])){
	$sql = "SELECT * FROM utilisateur WHERE login=?";
	$q = $pdo -> prepare($sql);
	$q -> execute(array($_POST['login']));
	$line = $q -> fetch();
	if($line==false){
		$sql = "INSERT INTO utilisateur VALUES(NULL,?,MD5(?))";
		$q = $pdo -> prepare($sql);
		$q -> execute(array($_POST['login'], $_POST['password']));
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['id'] = $pdo ->lastInsertId();
		header("Location:login.php");
	}
}


include("entete.php");

// Il faut faire des requêtes pour afficher ses amis, les attentes, les gens qu'on a invités qui ont pas répondu etc..
// Elles sont listées ci-dessous
// Connaitre ses amis : 


echo "<form action='#' method='post'>";
echo "<fieldset>";
echo "<label for='login'>Nom d'utilisateur</label>";
echo input("text","login")."<br />";
echo "<label for='password'>Mot de passe</label>";
echo input("password","password")."<br />";
echo input("submit","Valider");
echo "</fieldset>";
echo "</form>";

?>
<a href="http://localhost/facedebouc/affichage/login.php#">Déjà membre ?</a>
<?php

include("pied.php");
?>