<?php 
    include("header.php"); 
    include_once ("../../controllers/PackController.php");
    include_once ("../../controllers/PromoController.php");

        $packC =  new PackC();
        $liste = $packC->ListePackC();
        $promoC = new PromoC();
	
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
                                    <h4 class="mt-0 header-title">Tableau des différents packs</h4>
                                    <p class="text-muted font-14 mb-3">
                                        </p>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                            <th>Nom</th>
             				<th>Description</th>
             				<th>Prix</th>
             				<th>ACTIONS</th>
                                        </tr>
                                        </thead>


                                       	<tbody>
             	   <?php foreach($liste as $pack){
                                         $packExist = $promoC->getPromoByPack($pack["id_pack"]);
?>
             			<tr>
             				<td><?php echo $pack["nom_pack"]; ?></td>
             				<td><?php echo $pack["description_pack"]; ?></td>
                           <td> <?php if($packExist){?>
                            <strike><?php echo $pack['prix_pack'];?></strike>
                             <?php
                    $price = $pack["prix_pack"] - ($pack["prix_pack"] * $packExist["description_promo"] / 100 ) ;
                    echo $price; ?>
                <?php }else{ echo $pack["prix_pack"]; }?> Dt/mois </td>
                
                  
                                
             				<td> <a href="modificationPack.php?id_pack=<?php echo $pack["id_pack"] ?>" class="btn btn-1">Modifier</a><br><br>
                              <a href="verifs/suppPack.php?id_pack=<?php echo $pack["id_pack"] ?>" class="btn btn-2">Supprimer</a><br>
                                <?php 
                                $packExist = $promoC->getPromoByPack($pack["id_pack"]);
                                if(!($packExist)){?>
                               <a href="ajoutPromos.php?id_pack=<?php echo $pack["id_pack"] ?>" class="btn btn-1">Ajouter une promo</a>
                                <?php } ?>
                                </td>

             			</tr>
             		<?php } ?>
             		</tbody>
             	</table> 

</body>
</html>