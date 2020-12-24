<!DOCTYPE HTML>

<form action="verifs/modifFormPack.php" method="POST">
 <?php
    include "../../controllers/PackController.php";
        $packC =  new PackC();

 if (isset($_GET['id_pack'])){
      $result = $packC->getPackById($_GET['id_pack']);
  ?>
  	<input type="hidden" name="id_pack" value="<?php echo $_GET['id_pack'] ?>">
	<input type="number" name="prix_pack" value="<?php echo $result['prix_pack']?>">
	<input type="text" name="nom_pack" value="<?php echo $result['nom_pack']?>">
	<input type="text" name="description_pack" value="<?php echo $result['description_pack']?>">
	<input type="submit" name="submit">
</form>
<?php }; ?>
</html>