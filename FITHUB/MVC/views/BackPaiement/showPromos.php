<!DOCTYPE HTML>
<?php 
    include "../../controllers/PromoController.php";
    include "../../controllers/PackController.php";
    $promoC =  new PromoC();
    $liste = $promoC->searchPromoActive();
    $inactives = $promoC->searchPromoInactive();
    $packC =  new PackC();


?>

                <table>
                    <caption>Tableau des différentes promos</caption>
                    <thead>
                        <tr>
                            <th>Pourcentage de promo</th>
                            <th>Debut</th>
                            <th>Fin</th>
                            <th>Pack concerné</th>
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
                            <td> <a href="modificationPromo.php?id_promo=<?php echo $promo["id_promo"] ?>" class="btn btn-4">Modifier</a>  <a href="verifs/suppPromo.php?id_promo=<?php echo $promo["id_promo"] ?>" class="btn btn-4">Supprimer</a> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                  <table>
                    <caption>Tableau des promos terminées</caption>
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
                            <td> <a href="modificationPromo.php?id_promo=<?php echo $promo["id_promo"] ?>" class="btn btn-4">Modifier</a>  <a href="verifs/suppPromo.php?id_promo=<?php echo $promo["id_promo"] ?>" class="btn btn-4">Supprimer</a> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

</html>