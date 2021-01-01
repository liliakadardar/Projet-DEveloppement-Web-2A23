<?php  
//session_start();
     include '../Controllers/PackController.php';
     include '../controllers/PromoController.php';
    
        $packC =  new PackC();
        $liste = $packC->ListePackC();
        $promoC = new PromoC();

        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITHUB-Paiement</title>
    <link rel=icon href=iconFit.png type="png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
    </head>

<body>
<div class="container">
<header >
<div class="logo" >
  <a href="membre.php" style="margin-right:10%;">Inscription</a>

  <img src="assets/img/logo FitHUb.png" alt="logo" width="15%" height="15%" style="padding-top: 12px; margin-left: 18% ">
 <hr class="mb-4">
 <br>
  <h2>Paiement</h2><br><br>
  <!--<div class="py-5 text-center">
    
      </div>-->
   </div>
   
</header>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">TOTAL:</span>
        
      </h4>
 <?php foreach($liste as $pack){?>
                <?php 
                     $packExist = $promoC->getPromoByPack($pack["id_pack"]);
?>

      <ul class="list-group mb-3">
       
        
        <li class="list-group-item d-flex justify-content-between lh-condensed bg-light">
          <div>
            
            <h6 class="my-0">
              <?php echo $pack['nom_pack']; ?> </h6>
            
          </div>
          <?php if($packExist){?>
          <span class="text-muted"><?php echo $pack['prix_pack'];?>Dt/mois</span>
        </li>
     
      
<?php } ?>

 <?php
                    $price = $pack["prix_pack"] - ($pack["prix_pack"] * $packExist["description_promo"] / 100 ) ;
                
                   ?>          
</ul>

<?php  }?>
      
      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Code promo">
          <div class="input-group-append">
            <button type="submit" class="btn btn-dark">Ajouter</button>
          </div>

        </div>
      </form> 
      <hr class="mb-4">
      
      
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">0.1 INFORMATIONS PERSONNELLES</h4>
      <form class="needs-validation" novalidate>
      
        <hr class="mb-4">

        <h4 class="mb-3">0.2 PAIEMENT</h4>

        <div class="d-block my-3">
          
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        
        <hr class="mb-4">
        <!--<button id="payer-btn" class="btn btn-primary btn-lg btn-block" type="submit">Payer</button>-->
        <div id="paypal-payment-button">
                        </div> 
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020-2021 FitHub</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privé</a></li>
      <li class="list-inline-item"><a href="#">Termes</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
  


 <script src="https://www.paypal.com/sdk/js?client-id=AaJMejIDjhumOr48XsycjfvQegxAku1dHdrA0DNfkqFSg7bFFkpJTnnwyaLIGUFsPijWx1g51gxp9F-5&currency=USD" data-namespace="paypal_sdk"></script>

    <script type="text/javascript">
  
paypal_sdk.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("payé.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("nonpayé.php")
    }
}).render('#paypal-payment-button');
</script>
 
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/mvc.js" type="text/javascript"></script>


</body>
</html>