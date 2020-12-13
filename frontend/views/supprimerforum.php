
<?PHP
include "../controller/servC.php";
include "../config.php";
$promotionC=new servC();
if (isset($_POST["nomp"])){
	$promotionC->supprimerforums($_POST["nomp"]);
	header('Location: afficherforum.php');
}	
?>



