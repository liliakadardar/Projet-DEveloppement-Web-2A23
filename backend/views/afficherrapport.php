<?PHP
	include "../controller/rapportC.php";

	$rapportC=new rapportC();
	$listerapport=$rapportC->afficherrapport();

?>






<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste rapport </title>
    </head>
    <body>
    	<button><a href="recette.php">Back</a></button>
		<button><a href="formrapport.php">Ajouter un rapport</a></button>
		<button><a href = "searchrapport.php" >rechercher un rapport </a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id_rapport</th>
				<th>Nom_nutritioniste</th>
				<th>nom_client</th>
				<th>prenom_client</th>
				<th>email_client</th>
				<th>bilan_client</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listerapport as $rapport){
			?>
				<tr>
					<td><?PHP echo $rapport['id_rapport']; ?></td>
					<td><?PHP echo $rapport['nom_nutritioniste']; ?></td>
					<td><?PHP echo $rapport['nom_client']; ?></td>
					<td><?PHP echo $rapport['prenom_client']; ?></td>
					<td><?PHP echo $rapport['email_client']; ?></td>
					<td><?PHP echo $rapport['description_client']; ?></td>
					<td>
						<form method="POST" action="supprimerrapport.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" name="id_rapport" value=<?PHP echo $rapport['id_rapport']; ?> >
						</form>
					</td>
					<td>
						<a href="modifierrapport.php?id=<?PHP echo $rapport['id_rapport']; ?>"> Modifier </a>
					</td>
				</tr>
				
			<?PHP
				}
			?>
		</table>
	</body>
</html>