<?php
     include '../../../controllers/PromoController.php';

		  	$promoC =  new promoC();
        	 if (isset($_POST['description_promo']) && isset($_POST['date_debut']) && isset($_POST['date_fin']) && isset($_POST['id_pack'])) {
              $promo = new Promo($_POST['description_promo'],$_POST['date_debut'],$_POST['date_fin'],$_POST['id_pack']);
              print_r($promo);
              $promoC->updatePromo($promo,$_POST['id_promo']);
              print_r($promoC);
             header('Location:../showPromos.php');
        }

?>

