<?php
    include "../controller/rapportC.php";
    include_once '../model/rapport.php';

    $rapportC = new rapportC();
    $error = "";
    
    if (
        isset($_POST["nom_nutritioniste"]) && 
        isset($_POST["nom_client"])&&
        isset($_POST["prenom_client"]) && 
        isset($_POST["email_client"]) &&
        isset($_POST["description_client"]) 

     
    ){
        if (
            !empty($_POST["nom_nutritioniste"]) && 
            !empty($_POST["nom_client"])&&
            !empty($_POST["prenom_client"]) && 
            !empty($_POST["email_client"])&&
            !empty($_POST["description_client"])

            
        ) {
            $rapport = new rapport(
                $_POST['nom_nutritioniste'],
                $_POST['nom_client'],
                 $_POST['prenom_client'],
                $_POST['email_client'],
                 $_POST['description_client']

              
            );
            
            $rapportC->modifierrapport($rapport,$_GET['id']);
            header('refresh:5;url=afficherrapport.php');
        }
        else
            $error = "Missing information";
    }

?>
<html>
    <head>
        <title>Modifier rapport</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <button><a href="afficherrapport.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <?php
            if (isset($_GET['id'])){
                $rapport = $rapportC->recupererrapport($_GET['id']);
                
        ?>
        <form action="" method="POST">
            <table align="center">
                <tr>
                   
                    <td>
                        <label for="id_rapport">Id rapport:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_rapport" id="id_rapport"  value = "<?php echo $rapport['id_rapport']; ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nom_nutritioniste">Nom nutritioniste:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom_nutritioniste" id="nom_nutritioniste" maxlength="20" value = "<?php echo $rapport['nom_nutritioniste']; ?>">
                    </td>
                </tr>
                   <tr>
                    <td>
                        <label for="nom_client">nom_client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom_client" id="nom_client"  value = "<?php echo $rapport['nom_client']; ?>">
                    </td>
                </tr>
                   <tr>
                    <td>
                        <label for="prenom_client">prenom_client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prenom_client" id="prenom_client"  value = "<?php echo $rapport['prenom_client']; ?>">
                    </td>
                </tr>
                   <tr>
                    <td>
                        <label for="email_client">email_client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email_client" id="email_client"  value = "<?php echo $rapport['email_client']; ?>">
                    </td>
                </tr>
                   <tr>
                    <td>
                        <label for="description_client">bilan_client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description_client" id="description_client"  value = "<?php echo $rapport['description_client']; ?>">
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </body>
</html>