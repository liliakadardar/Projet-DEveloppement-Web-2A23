<?PHP
	include "../controller/recetteC.php";

	$recetteC=new recetteC();
	
	if (isset($_POST["id_recette"])){
		$recetteC->supprimerrecette($_POST["id_recette"]);
		header('Location:afficherrecette1.php');
	}

?>