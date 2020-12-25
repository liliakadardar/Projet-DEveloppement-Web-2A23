<!DOCTYPE HTML>

<form action="verifs/verifFormPromo.php" method="POST">
	<input type="number" name="description_promo">
	<input type="hidden" name="id_pack" value="<?php echo $_GET['id_pack'] ?>">
	<input type="datetime-local" name="date_debut" >
	<input type="datetime-local" name="date_fin">
	<input type="submit" name="submit">
</form>

</html>