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
                                                <form class="form-horizontal" role="form"action="verifs/verifFormPack.php" method="POST">
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Prix</label>
                                                        <div class="col-md-10">
                                                            <input type="number" id="simpleinput" class="form-control" name="prix_pack">
                                                        </div>
                                                    </div>
                                                    
                                   <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Nom Pack</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="simpleinput" class="form-control" name="nom_pack">
                                                        </div>
                                                    </div>
                                                                     
                                                    
 <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Description</label>
                                                        <div class="col-md-10">
                                                            <input type="text area" id="simpleinput" class="form-control"  name="description_pack">
                                                        </div>
                                                    </div>
                                                           
           <button type="submit" name="submit" class="btn btn-1">Ajouter</button>                          
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