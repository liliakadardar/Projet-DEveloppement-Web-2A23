
<?php 
  include("header.php"); 

?>


<!DOCTYPE HTML>
<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Modification d'une Promotion</h4>
                                    <p class="sub-header">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-2">
                                               
<form action="verifs/modifFormPromo.php" method="POST"class="form-horizontal" role="form">
 <?php
    include "../../controllers/PromoController.php";
        $promoC =  new PromoC();

 if (isset($_GET['id_promo'])){
      $result = $promoC->getPromoById($_GET['id_promo']);
  ?>
  	<input type="hidden" name="id_promo" value="<?php echo $_GET['id_promo'] ?>">

  <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Pourcentage %</label>
                                                        <div class="col-md-10">
                                                           <input type="number" name="description_promo" value="<?php echo $result['description_promo']?>">
                                                        </div>
                                                    </div>
	
<div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Date debut</label>
                                                        <div class="col-md-10">
                                                           <input type="datetime-local" name="date_debut" value="<?php echo $result['date_debut']?>">
                                                        </div>
                                                    </div>



<div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Date Fin</label>
                                                        <div class="col-md-10">
                                                           <input type="datetime-local" name="date_fin" value="<?php echo $result['date_fin']?>">
                                                        </div>
                                                    </div>
<div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">ID_Pack</label>
                                                        <div class="col-md-10">
                                                           <input type="number" name="id_pack" value="<?php echo $result['id_pack']?>">
                                                        </div>
                                                    </div>
	
	
	
	<button type="submit" name="submit" class="btn btn-1">Modifier</button>

</form>
</div>
</div></div></div></div></div></div></div></div>
<?php }; ?>
</html>