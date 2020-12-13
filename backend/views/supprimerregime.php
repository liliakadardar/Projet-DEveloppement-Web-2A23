<?PHP
	include "../controller/regimeC.php";

	$regimeC=new regimeC();
	
	if (isset($_POST["id_regime"])){
		$regimeC->supprimerregime($_POST["id_regime"]);
		header('Location:afficherregime.php');
	}

?>