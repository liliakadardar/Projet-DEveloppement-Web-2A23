<?php  

// ajout panier 
  include("header.php");
  include "../Controllers/ProduitController.php";
  
 

  $produitC=new produitC();
  $listeProduit=$produitC->afficherproduit();
  ?>
  
  
    
    <!-- ===========================
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Boutique</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->

<section>
<br><br><br>

    <!-- ===========================
    =====>> Shop <<===== -->
 <div class="x_content">
                    
                    <table>
                      
                        <tbody>
                        <?php
                          
                          foreach ($listeProduit as $row) {?>
            <tr>
                      
                                <td>
                              <img src="images/<?php echo $row['chemin_img']; ?>" >
                            </td>
                            <td>
                             <strong><h2><?php echo $row['nom']; ?></h2></strong><br>
                                Reference: <?php echo $row['reference']; ?><br><br>
                             <strong>Prix: <?PHP echo $row['prix']."DT"; ?></strong><br>
                            <br>
                            Description : <br><i><?PHP echo $row['description']; ?></i><br>
                            
                    
                                <a href="ajoutPanier.php?id_produit=<?= $row['id_produit']?>" class="btn btn-4">Ajouter au panier</a>
                              </td>
                          
                          </tr>
                          
                          <?php
                          }
                          ?>
                      </tbody>
                      
                    </table>
                  </div>
               






</section>


   <!-- <?php  foreach ($listeProduit as $row) {?>
        <div class="prod_box">
            <div class="center_prod_box">
               
                 <div class="product_img">
                  <a href="details.php">
                    <img src="images/<?php echo $row['chemin_img']; ?>" </img>

                  </a>
                </div>
                 <div class="product_title">
                  <a href=""><?php echo $row['nom']; ?></a></div>
                  <div class="product_price"><a href=""><?php echo $row['prix']."DT"; ?></a></div>
              </div>
              <div calss="prod_details_tab">
                <button type="button" class="button" onclick="window.location.href='acheter.html'">Ajouter au panier </button>
           <a href="acheter.html" class="prod_buy">Acheter</a>  

                <button class="button button1" onclick="window.location.href='acheter.html'">Description</button>
            </div>
        </div>
    <?php } ?>-->


    
    
    <!-- =====>> End Shop <<===== 
    =========================== -->

   <?php include("footer.php"); ?>