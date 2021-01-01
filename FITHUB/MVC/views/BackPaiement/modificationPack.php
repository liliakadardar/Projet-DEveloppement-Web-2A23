
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
                                    <h4 class="header-title">Modification d'une Packs</h4>
                                    <p class="sub-header">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-2">
                                               
<form action="verifs/modifFormPack.php" method="POST" class="form-horizontal" role="form">
 <?php
    include "../../controllers/PackController.php";
        $packC =  new PackC();

 if (isset($_GET['id_pack'])){
      $result = $packC->getPackById($_GET['id_pack']);
  ?>
<input type="hidden" name="id_pack" value="<?php echo $_GET['id_pack'] ?>">

                                           <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Prix</label>
                                                        <div class="col-md-10">
                                                           <input type="number" name="prix_pack" value="<?php echo $result['prix_pack']?>">
                                                        </div>
                                                    </div>



                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Prix</label>
                                                        <div class="col-md-10">
                                                           <input type="text" name="nom_pack" value="<?php echo $result['nom_pack']?>">
                                                        </div>
                                                    </div>


<div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Prix</label>
                                                        <div class="col-md-10">
                                                           <input type="text" name="description_pack" value="<?php echo $result['description_pack']?>">
                                                        </div>
                                                    </div>


<button type="submit" name="submit" class="btn btn-1">Modifier</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php }; ?>
</html>