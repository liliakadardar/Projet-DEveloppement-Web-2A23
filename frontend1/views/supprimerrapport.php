<?PHP
	include "../controller/rapportC.php";

	$rapportC=new rapportC();
	
	if (isset($_POST["id_rapport"])){
		$rapportC->supprimerrapport($_POST["id_rapport"]);
		header('Location:afficherrapport.php');
	}

?>