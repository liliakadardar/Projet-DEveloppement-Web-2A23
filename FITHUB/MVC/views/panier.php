<?php  
include("header.php");
     include '../controllers/PanierController.php';
     include '../controllers/ProduitController.php';
     include '../controllers/PromoController.php';
        $panierC = new panierC();
        $produitC = new produitC(); 
        $liste = $panierC->ListePanierC();
       // print_r($liste);

        ?>
 <!-- ===========================
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Mon Panier</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->



<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">

          <h3 class="mb-3 text-muted text-uppercase small">Article</h3>

          <?php foreach($liste as $produit){ 
              $result = $produitC->getProduitById($produit['reference_produit']);
                    // $result = $produitC->getProduitById(1);
                     //ou peut etre par reference?
            ?>
          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
    
        <img class="img-fluid w-100" src="images/<?php echo $result['chemin_img']; ?>" >
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h3><?php echo $result["nom"] ?></h3><br> 
                    <p class="mb-3 text-muted text-uppercase small">Reference :<?php echo $result["reference"] ?></p>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                        class="minus decrease"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        class="plus increase"></button>
                    </div>
                    
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>

                    <a href="suppPanier.php?id=<?php echo $produit['id_panier']; ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Supprimer </a>
                    
                  </div>
                  <p class="mb-0"><span><strong id="summary">Prix:<?php echo $produit["prix_produit"] ?>/dt</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <?php } ?>

          

        </div>
      </div>
     
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Livraison</h5>

          <p class="mb-0"> Lundi - Vendredi </p>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Paiement par :</h5>

          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">TOTAL : </h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Montant
              <?php
              $i = 0;
           foreach($liste as $produit){ 
            $i = $i + $produit["prix_produit"];

} ?>              <span><?php echo $i ?> / dt</span> 

      

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Livraison
              <span>Gratuite</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Paiement</strong>
                <strong>
                  <p class="mb-0">(TVA inclus)</p>
                </strong>
              </div>
              <span><strong></strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block">Payer</button>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Ajouter un Code promo (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapse" id="collapseExample">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->
 
<?php  include("footer.php"); ?>