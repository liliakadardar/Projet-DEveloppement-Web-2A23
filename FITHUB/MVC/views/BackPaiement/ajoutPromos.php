<?php 
  include("header.php"); 

?>


<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Ajout des Packs</h4>
                                    <p class="sub-header">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-2">
                                                <form class="form-horizontal" role="form"action="verifs/verifFormPromo.php" method="POST">
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Pourcentage Promos %
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="number" name="description_promo">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="id_pack" value="<?php echo $_GET['id_pack'] ?>">
                                   
                                                                     
                                                    
 <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Date début
                                                        </label>
                                                        <div class="col-md-10">
                                                           <input type="datetime-local" name="date_debut" >
                                                        </div>
                                                    </div>
                                                           
<div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Date Fin
                                                        </label>
                                                        <div class="col-md-10">
                                                           <input type="datetime-local" name="date_fin">
                                                        </div>
                                                    </div>


                                                          
           <button type="submit" name="submit" class="btn btn-warning">Ajouter</button>                          
	<!--<input type="submit" name="submit" class="btn btn-warning">               -->
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
</html>