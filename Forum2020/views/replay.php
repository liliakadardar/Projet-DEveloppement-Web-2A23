
<?PHP
include "../core/servC.php";
include "../config.php";
$promotionC=new servC();
if (isset($_POST["nomp"])){
	$promotionC->replayforums($_POST["nomp"]);
	header('Location: .php');
}	
?>

