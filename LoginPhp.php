<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=fithub', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage() );
}

$req = $bdd->prepare('INSERT INTO projet (id, nom, prenom, sexe, taille, poids, adresse, mail, imc, date_naissance, mdp) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['id'],$_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['taille'], $_POST['poids'], $_POST['adresse'], $_POST['mail'], $_POST['imc'], $_POST['date_naissance'], $_POST['mdp']));

header('Location: Login.php');
?>