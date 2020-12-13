<?php
    include "../controller/recetteC.php";
    include_once '../model/recette.php';

	$recetteC = new recetteC();
	$error = "";

	if (
        isset($_POST["nom_recette"]) && 
        isset($_POST["nb_aliments"]) &&
        isset($_POST["Aliment"]) && 
        isset($_POST["description"]) 
       
    ){
		if (
            !empty($_POST["nom_recette"]) && 
            !empty($_POST["nb_aliments"]) && 
            !empty($_POST["Aliment"]) && 
            !empty($_POST["description"]) 
          
        ) {
            $recette= new recette(
                $_POST['nom_recette'],
                $_POST['nb_aliments'], 
                $_POST['Aliment'],
                $_POST['description']
               
            );
            
            $recetteC->modifierrecette($recette, $_GET['id_recette']);
            //header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier recette</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherrecette.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_recette'])){
				$recette = $recetteC->recupererrecette1($_GET['id_recette']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom_recette">Nom recette:
                        </label>
                    </td>
                    <td><input type="text" name="nom_recette" id="nom" maxlength="20" value = "<?php echo $recette->nom_recette; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nb_aliments">Nb aliments:
                        </label>
                    </td>
                    <td><input type="text" name="nb_aliments" id="prenom" maxlength="20" value = "<?php echo $recette->nb_aliments; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Aliment">Aliment :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Aliment" id="email" value = "<?php echo $recette->Aliment; ?>">
                    </td>
                </tr>
                  <tr>
                    <td>
                        <label for="description">description :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" id="aliments" value = "<?php echo $recette->description; ?>">
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