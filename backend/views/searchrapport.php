<?php
    require_once '../Controller/rapportC.php';

    $rapportC =  new rapportC();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	

</head>

<body >
	<!--<?php include_once 'header.php'; ?>-->

	<section >
		<h2></h2>
		<div >
            <form action="" method = 'POST'>
                <div >
                    <div class="col-25">                
                        <label>recherche rapport: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'rapport' placeholder="entrer le nom du client ">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type = "submit" value = "Search" name ="search">
                </div>
            </form>
		</div>
	</section>

	<?php
		if (isset($_POST['rapport']) && isset($_POST['search'])){
			$result = $rapportC-> getrapportbynomclient($_POST['rapport']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>Rapport</h2>
			<div>
				
				<div>

					   <label>Nom nutritioniste:<span > <?= $result['nom_nutritioniste'] ?> </span></label> 
					    <br>
						<label>Nom client:<span ><?= $result['nom_client'] ?></span></label>
						<br>
						<label>Prenom Client:<span ><?= $result['prenom_client'] ?></span></label>
						<br>
						<label>Email client:<span ><?= $result['email_client'] ?></span></label>
						<br>
						<label>Bilan Client:<span ><?= $result['description_client'] ?></span></label>
					
				</div>
				<button><a href = "afficherrapport.php">listes rapport</a></button>
				<input type="button" value="imprimer" onclick="window.print();" />
			</div>
		</section>
	<?php
		}
		else {
			echo "<div> No results found!!! </div>";
		}
	}
	?>
</body>

</html>