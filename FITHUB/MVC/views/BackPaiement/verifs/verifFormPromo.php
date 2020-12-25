<?php
     include '../../../controllers/PromoController.php';

		  	$promoC =  new promoC();
		  	print_r($_POST);
        	 if (isset($_POST['description_promo']) && isset($_POST['date_debut']) && isset($_POST['date_fin']) && isset($_POST['id_pack'])) {
              $promo = new Promo($_POST['description_promo'],$_POST['date_debut'],$_POST['date_fin'],$_POST['id_pack']);
              print_r($promo);
              $promoC->addPromoC($promo);
              echo "haha";
             header('Location:../showPromos.php');
        }

?>