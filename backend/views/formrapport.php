<?php

    include_once '../model/rapport.php';
    include_once '../controller/rapportC.php';

    $error = "";

    // create user
    $rapport = null;

    // create an instance of the controller
    $rapportC = new rapportC();
    if (
        isset($_POST["nom_nutritioniste"]) && 
        isset($_POST["nom_client"]) &&
        isset($_POST["prenom_client"]) && 
        isset($_POST["email_client"]) &&
        isset($_POST["description_client"])
      
    ) {
        if (
            !empty($_POST["nom_nutritioniste"]) && 
            !empty($_POST["nom_client"]) && 
            !empty($_POST["prenom_client"]) && 
            !empty($_POST["email_client"]) &&
            !empty($_POST["description_client"])
            
        ) {
            $rapport = new rapport(
                $_POST['nom_nutritioniste'],
                $_POST['nom_client'], 
                $_POST['prenom_client'],
                $_POST['email_client'],
                $_POST['description_client']
              
            );
            $rapportC->ajouterrapport($rapport);
            header('Location:afficherrapport.php');
        }
        else
            $error = "Missing information";
    }



?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <title>formulaire rapport</title>
</head>  
<body>
   <button><a href="afficherrapport.php">Retour à la liste</a></button>
<form action="" method="POST">
    <label>Nom nutritioniste</label>
    <input type="text" name="nom_nutritioniste" placeholder="Entrer votre nom" required/><br><br>
      <label>Nom client</label>
      <input type="text" name="nom_client"  placeholder="Preciser le nom de votre client  " required/><br><br>
      <label>prenom client </label>
      <input type="text" name="prenom_client"  placeholder="preciser le prenom de votre client " required/><br><br>
       <label>email client </label>
      <input type="text" name="email_client"  placeholder="preciser l'email de votre client " required/><br><br>
    <label>Bilan client </label>
    <input type="text" name="description_client" placeholder="decrire bilan"required/><br><br>
     
    <input type="submit" name="sent" value="Ajouter"onclick="">
    
  </form>
  
   
<!--<script language="javascript"> 
        function test(){
                  var log=document.getElementById("login").value; 
          var pwd=document.getElementById("mdp").value; 
          var pwdd=document.getElementById("mdpp").value; 
          var tl=document.getElementById("tell").value;
          var agge=document.getElementById("ag").value;
            var chek=document.getElementsByName("musique");
          var test=new Boolean(true); 
          var a="@";
          var pt="."; 
          var i=0;
          var checkedCount=0;
          var ch1=pwd.toString(); 
          var ch2=pwdd.toString();
          var ch3=tl.toString();
 if(ch3.length<8){
                  alert("votre num tel doit contenir 8 numero! ");}       
      for(var i = 0; i < chek.length; i++) {
      if(chek[i].checked) {
        checkedCount++;
      }
    }   
    if((checkedCount<2)||(checkedCount>2)){alert("seulement deux types de musiques doivent etre selectionner");}
         var prenom=log.substring(0,log.indexOf(pt)); 
         var nom=log.substring(log.indexOf(pt)+1,log.indexOf(a)); 
                 if(nom.substr(0,1).toUpperCase()!=nom.substr(0,1)){
                  alert("nom doit commencer par une majuscule :(");
                 }else{alert("nom commence par une majus!");}
                 if(prenom.substr(0,1).toUpperCase()!=prenom.substr(0,1)){
                  alert("prenom doit commencer par une majuscule :(");
                 }else{alert("prenom commence par une majus!:)");}
 
         if(ch1!==ch2){test=false;}
         if(test===false){alert("mot de passe n'est pas identique!");}
        
          if(agge<18){alert("votre age est inferieur a 18 vous n'etes pas accepter!");}else{alert("age superieur a 18 vous etes accepter!");}
          
          if((log.length===0)||(pwd.length===0)){
          alert("veuillez verifier votre login et mot de passe svp!");
          } 
           if(pwd.length<8){
            alert("votre mot de passe est inferieur a 8 caracteres! "); } 
           else {
            if (log.substring(log.indexOf(a)) !== "@esprit.tn"){ 
                  alert("verifier votre login!"); 
                }
                 
                /*else{
                  var prenom=log.substring(0,log.indexOf(pt)); 
                 var nom=log.substring(log.indexOf(pt)+1,log.indexOf(a)); 
                 if(nom.substr(0,1).toUpperCase()!=nom.substr(0,1)){
                  alert("nom doit commencer par une majuscule");
                 }else{alert("nom commence par une majus!");}
 
  }*/
           
            alert( "bienvenue " + prenom + " " + nom); 
           }
           
         
          

        } 
     
 </script>-->

</body>
</html>