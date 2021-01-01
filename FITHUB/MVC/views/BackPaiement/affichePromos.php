<?php 
    include("header.php"); 
   include "../../controllers/PromoController.php";
    include "../../controllers/PackController.php";
    $promoC =  new PromoC();
    $liste = $promoC->searchPromoActive();
    $inactives = $promoC->searchPromoInactive();
    $packC =  new PackC();

	
    ?>
    <!DOCTYPE HTML>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backoffice </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"> </script>

</head>
<script>
    $(document).ready(function () {
    $('#table_id').DataTable();
} );

</script>
    <!-- favicon icon -->
    <link rel=icon href="" type="png">
<body>
	

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Tableau des différents Promotions sur les Packs</h4>
                                    <p class="text-muted font-14 mb-3">
                                        </p>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                            <th>Pourcentage de promo</th>
                            <th>Debut</th>
                            <th>Fin</th>
                            <th>Pack concerné</th>
                            <th>ACTIONS</th>
                                        </tr>
                                        </thead>


                                       	 <tbody>
                   <?php foreach($liste as $promo){?>
                    <?php       $result = $packC->getPackById($promo['id_pack']);
 ?>
                        <tr>
                            <td><?php echo $promo["description_promo"]; ?> % </td>
                            <td><?php echo $promo["date_debut"]; ?></td>
                            <td><?php echo $promo["date_fin"]; ?></td>
                            <td><?php echo $result["nom_pack"]; ?></td>
                            <td> <a href="modificationPromo.php?id_promo=<?php echo $promo["id_promo"] ?>" class="btn btn-2" >Modifier</a> <br>
                             <a href="verifs/suppPromo.php?id_promo=<?php echo $promo["id_promo"] ?>"class="btn btn-1" >Supprimer</a> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                        </div>
                            </div>
                            </div>   

 
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Tableau des promos terminées
                                    <p class="text-muted font-14 mb-3">
                                        </p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                    
                    <thead>
                        <tr>
                            <th>Pourcentage de promo</th>
                            <th>Debut</th>
                            <th>Fin</th>
                            <th>Pack concerné</th>
                        </tr>
                    </thead>
                    <tbody>
                   <?php foreach($inactives as $promo){?>
                    <?php       $result = $packC->getPackById($promo['id_pack']);
 ?>
                        <tr>
                            <td><?php echo $promo["description_promo"]; ?> % </td>
                            <td><?php echo $promo["date_debut"]; ?></td>
                            <td><?php echo $promo["date_fin"]; ?></td>
                            <td><?php echo $result["nom_pack"]; ?></td>
                            <td>
                             <a href="modificationPromo.php?id_promo=<?php echo $promo["id_promo"] ?>">Modifier</a> 
                              <a href="verifs/suppPromo.php?id_promo=<?php echo $promo["id_promo"] ?>" class="btn-btn-1">Supprimer</a> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
             	</table> </div>
                            </div>
                            </div>   

</div>
                            </div>
                            </div>
</body>
</html>