
<!DOCTYPE HTML>
<html>
	<head>
	
	<title>Forum Rating</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets1/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets1/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets1/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets1/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
        .checked {
  color: orange;
}
        </style>
	</head>
	<body>
		
	
	


	

	<div id="fh5co-instagram">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Rating</span></h2>
				</div>
			</div>
		</div>
		
	<?PHP
include "../core/avisC.php";
include "../config.php";
$avis1C=new avisC();
$listeAvis=$avis1C->afficherAviss();

//var_dump($listeEmployes->fetchAll());
?>	
<?php
foreach($afficherAvissUser as row1){
?>
          <form method="POST" action="supprimerAvis.php" style="border: none">
          <input type="submit" name="supprimer" value="supprimer votre avis" class="btn btn-primary" >
	<input type="hidden" value="<?PHP echo $row1['id_avis']; ?>" name="id_avis">
     <a href="modifierAvis.php?num=<?PHP echo $row1['id_avis']; ?>" class="btn btn-primary">Modifier votre avis</a>
	</form>
<?php
} 
?>
        <div class="container">
<div class="row">
    <?PHP
foreach($listeAvis as $row){
	?>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Participant:<?PHP echo $row['id_utilisateur']; ?></h1>
         <h3 class="card-title">Sujet:<?PHP echo $row['sujet']; ?></h3>
        <p class="card-text">Commentaire:<?PHP echo $row['commentaire']; ?></p>
     

          <?php if($row['rating']==1){
printf("<span class='fa fa-star checked'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>");}
else if($row['rating']==2){
printf("<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>");}      
 else if($row['rating']==3){
printf("<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>");}          
  else if($row['rating']==4){
printf("<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star'></span>");}         
else{
printf("<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>");}     
          
          ?>
       
      
	
       
      </div>
    </div>
  </div>   
    <?php } ?>
 
</div>

</div>
	</div>	

		
	


	
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>

