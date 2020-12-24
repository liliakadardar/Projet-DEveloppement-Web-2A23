<?php
     include '../../../controllers/PackController.php';

		  	$packC =  new packC();
        	 if (isset($_GET['id_pack'])) {
              $packC->deletePack($_GET['id_pack']);
           //   echo "haha";
             header('Location:../showPacks.php');
        }

?>