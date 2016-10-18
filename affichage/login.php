<?php
// La page du formulaire de login (il ressemble étrangement à celui de création de compte
// Le formulaire sera envoyé vers ../traitement/connexion.php


include("../divers/connexion.php");
include("../divers/balises.php");



include("entete.php");

// Il faut faire des requêtes pour afficher ses amis, les attentes, les gens qu'on a invités qui ont pas répondu etc..
// Elles sont listées ci-dessous
// Connaitre ses amis : 

include('../traitement/connexion.php');
include('../traitement/deconnexion.php');
?>

<form action="#" method="post">
	<fieldset>
		<label>Nom</label>
		<input type="text" name="login"> <br />
		<label>MDP</label>
		<input type="password" name="password"> <br />
		<input type="submit" name="valider">
	</fieldset>
</form>
<a href="http://localhost/facedebouc/affichage/creer.php#">Créer compte</a>
<?php
include("pied.php");
?>