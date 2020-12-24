<!DOCTYPE HTML>

<?php
    include_once ("../../controllers/PackController.php");
    include_once ("../../controllers/PromoController.php");

        $packC =  new PackC();
        $liste = $packC->ListePackC();
        $promoC = new PromoC();
	
?>
             	<table>
             		<caption>Tableau des différents packs</caption>
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