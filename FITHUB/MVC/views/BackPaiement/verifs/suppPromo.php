<?php
     include '../../../controllers/PromoController.php';
		  	$promoC =  new promoC();
        	 if (isset($_GET['id_promo'])) {
              $promoC->deletePromo($_GET['id_promo']);
             header('Location:../showPromos.php');
        }

?>