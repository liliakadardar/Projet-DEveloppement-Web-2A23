<?php
$conn=mysqli_connect('localhost', 'root', '', 'espace_membre') or die(mysqli_error());
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$date=$_POST['date_naissance'];
$taille=$_POST['taille'];
$poids=$_POST['poids'];
$tel=$_POST['telephone'];
$adresse=$_POST['adresse'];
$mail=$_POST['mail'];
$mdp=$_POST['mdp'];
$mdp2=$_POST['mdp2'];

$req="INSERT INTO membres (nom, prenom, sexe, taille, poids, adresse mail, date_naissance, mdp, telephone) VALUES ('$nom','$prenom', '$sexe', '$date', '$taille', '$poids', '$tel', '$adresse', '$mail', '$mdp', '$mdp2')";

$res=mysqli_query($conn,$req);

?>