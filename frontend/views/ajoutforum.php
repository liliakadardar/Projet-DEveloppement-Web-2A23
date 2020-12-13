
<?PHP
include "../model/serv.php";
include "../controller/servC.php";
include "../config.php";

if (isset($_POST['nomp']) and isset($_POST['topic']) and isset($_POST['commentaire']) and isset($_POST['ask'])){
	
$forum1=new serv($_POST['nomp'],$_POST['topic'],$_POST['commentaire'],$_POST['ask']);

$forum1C=new servC();
$forum1C->ajouterforum($forum1);

/*ini_set('smtp_port', 587);
 $header="MIME-Version: 1.0\r\n";
 $header.='From:"dmc.tn"<dmc.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Un Nouveau Evenement Est Disponnible Dans Notre Site Web ";
 mail("mariem.nacib@esprit.tn", "Nouveau event !", $message, $header); 
*/
header('Location: afficherforum.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>