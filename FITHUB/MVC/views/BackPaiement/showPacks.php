<!DOCTYPE HTML>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITHUB BACKOFFICE</title>

    <!-- favicon icon -->
    <link rel=icon href=iconFit.png type="png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"> </script>

</head>
<script>
    $(document).ready(function () {
    $('#table_id').DataTable();
} );

</script>

<?php
    include_once ("../../controllers/PackController.php");
    include_once ("../../controllers/PromoController.php");

        $packC =  new PackC();
        $liste = $packC->ListePackC();
        $promoC = new PromoC();
	
?>                  <caption>Tableau des différents packs</caption>

             	<table id="table_id" class="display">
             		<thead>
             			<tr>
             				<th>Nom</th>
             				<th>Description</th>
             				<th>Prix</th>
             				<th>Actions</th>
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
                
                  
                                
             				<td> <a href="modificationPack.php?id_pack=<?php echo $pack["id_pack"] ?>" class="btn btn-4">Modifier le pack</a>
                              <a href="verifs/suppPack.php?id_pack=<?php echo $pack["id_pack"] ?>" class="btn btn-4">Supprimer</a>
                                <?php 
                                $packExist = $promoC->getPromoByPack($pack["id_pack"]);
                                if(!($packExist)){?>
                               <a href="promoPack.php?id_pack=<?php echo $pack["id_pack"] ?>" class="btn btn-4">Ajouter une promo</a>
                                <?php } ?>
                                </td>

             			</tr>
             		<?php } ?>
             		</tbody>
             	</table>                   
</html>