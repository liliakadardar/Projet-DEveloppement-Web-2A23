
<!DOCTYPE html>
<html lang="en">
<?php include "../core/recetteC.php";

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITHUB</title>

    <!-- favicon icon -->
    <link rel=icon href=iconFit.png type="png">

    <link rel="stylesheet" href="assets3/font/flaticon.css">
    <link rel="stylesheet" href="assets3/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets3/css/style.css">
    <link rel="stylesheet" href="assets3/css/responsive.css">
    <link rel="stylesheet" href="assets3/css/recette.css">


<script language="JavaScript" type="text/javascript">

function Valider(ideal)
    {
        
		var taille = document.ideal.taille.value
		var poids = document.ideal.poids.value
            if ((taille == "Entrez votre taille (en cm) ici.")|| (taille == "")|| (poids == "Entrez votre poids ici.")|| (poids == ""))   //alert si un champ n'esp pas renseigné
                {
                    alert("Si vous voulez que je calcule votre indice de masse corporel ainsi que votre poids idéal il faut que vous entrez vos mensuration");
                }
				else
				{
				//Fonction calcul de l'imc
            var nombre1 = (taille*0.01)          //convertion de la taille des centimètres en mètres
			var nombre2 = (nombre1*nombre1)      //taille au carré
			var nombre3 = (poids/nombre2)        //poids divisé par la taille
			alert("Votre indice de masse corporel est de: " + nombre3 + "!");
			
			// Message d'alerte en fonction de l'imc
			
			if (nombre3 <= 16)
			{
			alert("Votre indice est un très faible, c'est à dire que vous êtes très maigre. Il faut faire très attention, je vous recomande de voir un nutrioniste!")
			}
			if (nombre3 <=18 && nombre3 >16)
			{
			alert("Votre indice est faible, vous êtes maigre, il faut surveiller votre ligne!");
			}
			if (nombre3 <=20 && nombre3 >18)
			{
			alert("Vous êtes en leger + sous-poids + , il faut manger!!!");
			}
			if (nombre3 <=24 && nombre3 >20)
			{
			alert("Vous êtes dans la moyenne, ne vous inquietez pas!");
			}
			if (nombre3 <=26 && nombre3 >24)
			{
			alert("Vous êtes en très leger sur-poids, ce n'est pas bien grave");
			}
			if (nombre3 <=28 && nombre3 >26)
			{
			alert("Vous êtes en sur-poids mais ce n'est pas iratrappable!");
			}
			if (nombre3 <=32 && nombre3 >28)
			{
			alert("Vous êtes en sur-poids!");
			}
			if (nombre3 >32)
			{
			alert("Vous êtes vraiment en sur-poids, je vous conseil de voir un nutritioniste pour qu'il vous adapte un regime personnalisé.");
			}
			
			
			//Fonction calcul du poid parfait
			
			var nombre4 = (22*nombre2)         //22 est l'indice parfait
			alert("Votre poids idéal est de: " + nombre4 + "!");
				
		        }
    }
</script>
</head>
<body bgcolor="#000000" text="#ffffff">
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
                                    <span>Lundi à Dimanche  :  8.00 Am - 9.00 Pm</span>
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
                        <div class="logo" >
                            <a href="acceuil.html"><img src="assets3/img/logo FitHUb.png" alt="logo"></a>
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
                                    <li><a href="nutritionniste.html">Nutritionniste</a></li>
                                    <li><a href="recette1.html">Recette alimentaire</a></li>
                                </ul>
                            </li>
                               <li><a href="#">Forum</a>
                                <ul>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="news-single.html">News Single</a></li>
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
                         
                           
                        </ul>
                    </div>
                    <!--<div class="col-lg-3 text-right p-0 nobile-position"style=" margin-left: -30px;">-->
                        <div class="shopping-bag">
                            <a class="cart" href="#"><i class="fa fa-shopping-bag" ></i><span>0</span></a>
                        </div>
                        <a href="connexion.html" class="btn btn-3" style="margin-top:10px;">Connexion</a>
                        <div class="search-dropdown">
                            <button type="button" class="icon-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <i class="fas fa-search"></i>       
                            </button>
                            <form class="dropdown-menu dropdown-menu-right">
                                <input class="search-input " name="search" placeholder="Search " aria-label="Search ">
                                <button class="search-btn " type="submit"><i class="fas fa-search "></i>  </button>
                            </form>
                       <!-- </div>-->
                      
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Top Menu -->
    </header>
    <!-- =====>> End Top Menu <<===== 
    =========================== -->

 <!-- ===========================
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-nutritioniste">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Recettes<br>&<br>Régimes Alimentaires</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<button ><a href="recette1.php">back</a></button>
<div align="center">
<br /><br /><br />
<table bordercolor="yellow" border="3">
<tr>
<td width="850" bgcolor="#001287" align="center" height="700">
<table bgcolor="#001399" border="3" bordercolor="ff0000" >

<tr>
<td width="300" align="center">
Entrez votre taille en cm:<br />
<hr color="#ff0000" width="50%">
Entrez votre poids: <br />
</td>
<td width="250">
<form action="" method="post" name="ideal" id="ideal">
<br /><br /><br /><br /><br /><br /><br />
&nbsp;&nbsp;&nbsp;<input type="text" value="Entrez votre taille (en cm) ici." name="taille" OnFocus="this.value=''" size="30"><br /><br />
&nbsp;&nbsp;&nbsp;<input type="text" value="Entrez votre poids ici." name="poids" OnFocus="this.value=''" size="30"><br /><br />
&nbsp;&nbsp;&nbsp;<input type="button" value="Calculer" name="calculez" OnClick="Valider(this.form)"><br />
<br> <br>
&nbsp;&nbsp;&nbsp;<input type="reset" value="Remettre à zero" name="reset"><br /><br /><br />
</form>
</td>
</td>
</tr>
</table>
</td>
</tr>
</table>
<br /><br /><br />
 <!-- ===========================
    =====>> Footer <<===== -->
    <footer id="footer-area" class="pt-100 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pt-50">
                    <div class="footer-item">
                        <a href="#" class="footer-logo-img"><img style="width: 300px;" src="assets3/img/logo FitHUb.png" alt=""></a>
                        <p>Notre mission est de fournir un service honnête, amical et ponctuel. </p>

                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-4 pt-50">
                    <div class="footer-item">
                        <h6>Liens</h6>
                        <ul>
                            <li><a href="index-1.html"><i class="fas fa-angle-right"></i> Acceuil</a></li>
                          
                            <li><a href="#"><i class="fas fa-angle-right"></i> Nos Coachs</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Boutique</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Forum</a></li>
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
                    
                    <div class="copy-right">  © Tous droits résevés 2020.
</a> </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =====>> End Footer <<===== 
    =========================== -->



    
     <script src="assets3/js/jquery-3.3.1.min.js"></script>
    <script src="assets3/js/popper.min.js"></script>
    <script src="assets3/js/bootstrap.min.js"></script>
    <script src="assets3/js/plugins.js"></script>
    <script src="assets3/js/menu.js"></script>
    <script src="assets3/js/scroll-slider.js"></script>
    <script src="assets3/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets3/js/typing.js"></script>
    <script src="assets3/js/contact.js"></script>
    <script src="assets3/js/script.js"></script>
    
</body>
</html>