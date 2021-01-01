<?php
     include '../../../controllers/PackController.php';



		  	$packC =  new packC();
        	 if (isset($_POST['nom_pack']) && isset($_POST['description_pack']) && isset($_POST['prix_pack'])) {
              $pack = new Pack($_POST['nom_pack'],$_POST['description_pack'],$_POST['prix_pack']);
              print_r($pack);
              $packC->addPackC($pack);
              //echo "haha";
             header('Location:../affichePack.php');
        }

?>