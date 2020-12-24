<!DOCTYPE HTML>

<form action="verifs/modifFormPromo.php" method="POST">
 <?php
    include "../../controllers/PromoController.php";
        $promoC =  new PromoC();

 if (isset($_GET['id_promo'])){
      $result = $promoC->getPromoById($_GET['id_promo']);
  ?>
  	<input type="hidden" name="id_promo" value="<?php echo $_GET['id_promo'] ?>">
	<input type="number" name="description_promo" value="<?php echo $result['description_promo']?>">
	<input type="datetime-local" name="date_debut" value="<?php echo $result['date_debut']?>">
	<input type="datetime-local" name="date_fin" value="<?php echo $result['date_fin']?>">
	<input type="number" name="id_pack" value="<?php echo $result['id_pack']?>">
	<input type="submit" name="submit">
</form>
<?php }; ?>
</html>