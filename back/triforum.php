<!DOCTYPE html>
<html lang="en">
    

<head>
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
    
    </head>
<body>
  
    <!--sidebar end-->
    <!-- ********************************************************************************************************************************************************
        MAIN CONTENT
        ********************************************************************************************************************************************************* -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-12">
           
            <h3></h3>
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
include "../core/servC.php";
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
  
</body>

</html>