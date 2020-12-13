<!DOCTYPE html>
<html lang="en">
    

<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITHUB</title>

    <!-- favicon icon -->
    <link rel=icon href=iconFit.png type="png">

    <link rel="stylesheet" href="assets/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/about.css">
        
    
    </head>
    <body>
	<!-- ===========================
   // =====>> Top Preloader <<===== -->
    <div id="preloader">
        <div class="lds-css">
            <div class="preloader-3">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- =====>> End Top Preloader <<=====
    =========================== -->

    <!-- ===========================
    =====>> Top Menu <<===== -->

    <header class="top-nav">
        <!-- Top Address -->
        <div class="top-address">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-address-ditels">
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <a target="_blank" href="https://www.google.com/maps/place/New+York,+NY+10036,+USA/@40.7462126,-74.0089606,14z/data=!3m1!4b1!4m5!3m4!1s0x89c2585393f82307:0xf7d56896de1566ed!8m2!3d40.7602619!4d-73.9932872">Tunis, TUNISIE </a>
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span>Lundi à Dimanche : 8.00 Am - 9.00 Pm</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="#">+216 71 234 567</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Address -->

        <!-- Top Menu -->
        <nav id="cssmenu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="acceuil.html"><img src="assets/img/logo FitHUb.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div id="head-mobile"></div>
                        <div class="button"></div>
                        <ul class="navbar-nav">
                            <!--<li><a href="acceuil.html">Acceuil</a>

                            </li>
                            -->
                            <li><a href="#">Nos Coachs</a>
                                <ul>
                                    <li><a href="coach.html">coachs</a></li>
                                    <li><a href="trainers-single.html">Trainers Single</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Nos Programmes Sprotifs</a>
                                <ul>
                                    <li><a href="#">Yoga</a></li>
                                    <li><a href="#">CrossFit</a></li>
                                    <li><a href="#">Musculation</a></li>
                                    <li><a href="#">Cardio</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Nutritions&Alimentation</a>
                                <ul>
                                    <li><a href="nutritionniste.php">Nutritionniste</a></li>
                                    <li><a href="recette1.php">Recette alimentaire</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Forum</a>
                                <ul>

                                    <li><a href='add-schedule.html'>Participer</a></li>
								
										<li><a href='afficherforum.php'>Forum</a></li>
								
								<li><a href='rechercheforum.php'>Recherche Forum</a></li>
									
							<li class='active'><a href='triforum.php'>Les Dernier Comments</a></li>

                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a>

                            </li>
                            <li><a href="#">Boutique</a>
                                <ul>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="shop-single.html">Articles</a></li>
                                </ul>
                            </li>

                            forum
                        </ul>
                    </div>
                    <!--<div class="col-lg-3 text-right p-0 nobile-position"style=" margin-left: -30px;">-->
                    <div class="shopping-bag">
                        <a class="cart" href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a>
                    </div>
                    <a href="connexion.html" class="btn btn-3" style="margin-top:10px;">Connexion</a>
                    <div class="search-dropdown">
                        <button type="button" class="icon-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search"></i>
                        </button>
                        <form class="dropdown-menu dropdown-menu-right">
                            <input class="search-input " name="search" placeholder="Search " aria-label="Search ">
                            <button class="search-btn " type="submit"><i class="fas fa-search "></i> </button>
                        </form>
                        <!-- </div>-->

                    </div>
                </div>
            </div>
        </nav>
        <!-- End Top Menu -->
    </header>
	<section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Les Derniers<span><br><br>Participants</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<form name="p" >
<div id='cssmenu'>
<ul>
   <li><a href='apps-chat.html'>Ajout</a></li>
   <li ><a href='afficherforum.php'>Affichage</a></li>
   <li class='active'><a href='#'>Tri</a></li>
<li><a href='rechercheforum.php'>Recherche</a></li>  
</ul>
</div>
<br>

<?PHP
include "../controller/servC.php";
include "../config.php";

$forum1C=new servC();
$listeforum=$forum1C->afficherforums();


?>
<div class="row">
<div class="col-md-12">
<div class="content-panel">
<h4><i class="fa fa-angle-right"></i>Tri :</h4>
<hr>
<table class="table">

<thead>
<tr>
  <th>Nom</th>
  <th>Topic</th>
  <th>Commentaire</th>
  <th>Ask Coach and Nutritioniste</th>

</tr>
</thead>

<?PHP
foreach($listeforum as $row){

	?>
  <tbody>
  <tr>
    <td><?PHP echo $row['nomp']; ?></td>
    <td><?PHP echo $row['topic']; ?></td>
    
    <td><?PHP echo $row['commentaire']; ?></td>
    <td><?PHP echo $row['ask']; ?></td>

   
  </tr>
  </tbody>
<?php
}
?>
</table>
</div>
</div>
</div>

    <p>
</div>
<br/>



    </form>
          </div>
          <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
   
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
    <footer id="footer-area" class="pt-100 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pt-50">
                    <div class="footer-item">
                        <a href="#" class="footer-logo-img"><img style="width: 300px;" src="assets/img/logo FitHUb.png" alt=""></a>
                        <p>Notre commité est de fournir un service honnête, amical et ponctuel. </p>

                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-4 pt-50">
                    <div class="footer-item">
                        <h6>Liens</h6>
                        <ul>
                            <li><a href="index-1.html"><i class="fas fa-angle-right"></i> Acceuil</a></li>

                            <li><a href="#"><i class="fas fa-angle-right"></i> Nos Coachs</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Boutique</a></li>
                            <li><a href="<?php echo 'news.php'; ?>">Participer au Forum</a></li>
                            <li><a href="<?php echo 'news-single.php'; ?>">Forum</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 pt-50">
                    <div class="footer-item">
                        <h6>Nos Services</h6>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Yoga </a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Cardio</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> CrossFit</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Musculation</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 pt-50">
                    <div class="footer-item">
                        <h6>Contactez nous </h6>
                        <ul class="media">
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li><a target="_blank" href="">Tunis,TUNISIE</a></li>

                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-phone-volume"></i></li>
                            <li><a href="#">+216 71 234 567</a></li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-envelope"></i></li>
                            <li><a href="#">Fithub1@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="copy-right"> © Tous droits résevés 2020.
                        </a> </div>
                </div>
            </div>
        </div>
    </footer>
            <!-- js placed at the end of the document so the pages load faster -->
           
            

        <!--
            <div class="content-body">
           

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Créer Evenement</h4>
                            </div>
                            <div class="card-body">
                                <div class="create-event-form">
                                    <form action="#">
                                        <h5 class="mb-3">Info génerale</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="title">titre d'évenements</label>
                                            <input type="title" class="form-control" id="title" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="name">Organisateur</label>
                                            <input type="name" class="form-control" id="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Type</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="19">Appearance or Signing</option>
                                                    <option value="17">Attraction</option>
                                                    <option value="18">Camp, Trip, or Retreat</option>
                                                    <option value="9">Class, Training, or Workshop</option>
                                                    <option value="6">Concert or Performance</option>
                                                    <option value="1">Conference</option>
                                                    <option value="4">Convention</option>
                                                    <option value="8">Dinner or Gala</option>
                                                    <option value="5">Festival </option>
                                                    <option value="14">Game or Competition</option>
                                                    <option value="10">Meeting or Networking Event</option>
                                                    <option value="100">Other</option>
                                                    <option value="11">Party or Social Gathering</option>
                                                    <option value="15">Race or Endurance Event</option>
                                                    <option value="12">Rally</option>
                                                    <option value="7">Screening</option>
                                                    <option value="2">Seminar or Talk</option>
                                                    <option value="16">Tour</option>
                                                    <option value="13">Tournament</option>
                                                    <option value="3">Tradeshow, Consumer Show, or Expo</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputState">Catégorie</label>
                                            <select id="inputState" class="form-control">
                                                <option value="118">Auto, Boat &amp; Air</option>
                                                <option value="101">Business &amp; Professional</option>
                                                <option value="111">Charity &amp; Causes</option>
                                                <option value="113">Community &amp; Culture</option>
                                                <option value="115">Family &amp; Education</option>
                                                <option value="106">Fashion &amp; Beauty</option>
                                                <option value="104">Film, Media &amp; Entertainment</option>
                                                <option value="110">Food &amp; Drink</option>
                                                <option value="112">Government &amp; Politics</option>
                                                <option value="107">Health &amp; Wellness</option>
                                                <option value="119">Hobbies &amp; Special Interest</option>
                                                <option value="117">Home &amp; Lifestyle</option>
                                                <option value="103">Music</option>
                                                <option value="199">Other</option>
                                                <option value="105">Performing &amp; Visual Arts</option>
                                                <option value="114">Religion &amp; Spirituality</option>
                                                <option value="120">School Activities</option>
                                                <option value="102">Science &amp; Technology</option>
                                                <option value="116">Seasonal &amp; Holiday</option>
                                                <option value="108">Sports &amp; Fitness</option>
                                                <option value="109">Travel &amp; Outdoor</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputCity">Localisation</label>
                                            <select id="inputState" class="form-control">
                                                <option selected value="online">Evenement en ligne</option>

                                                <option value="tba">To be announced</option>
                                            </select>
                                            </select>
                                        </div>

                                        <h5 class="my-4">Date et horaire</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Début d'évenements</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Commance à(heur)</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Fin d'évenements</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Termine à(heur)</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                rappelle-moi
                                            </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->
  
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/scroll-slider.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/typing.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>