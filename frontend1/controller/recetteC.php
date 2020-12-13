<?php
	include "../config.php";
	require_once '../model/recette.php';

	class recetteC {
		
		function ajouterrecette($recette){
			 /*$instance = config::getConnexion();
  $pdoStat=$instance->prepare('INSERT INTO recette VALUES (NULL,:nom_recette,:nb_aliments,:Aliment,:description)'); 
  $pdoStat->bindValue(':nom_recette',$_POST['nom_recette'],PDO::PARAM_STR);
  $pdoStat->bindValue(':nb_aliments',$_POST['nb_aliments'],PDO::PARAM_INT);
  $pdoStat->bindValue(':Aliment',$_POST['Aliment'],PDO::PARAM_STR);
  $pdoStat->bindValue(':description',$_POST['description'],PDO::PARAM_STR);
  $insertisOk=$pdoStat->execute();
  if($insertisOk){$message='la recette a été ajouter dans la base de donnée ';}
    else {$message='echec';}*/
			$sql="INSERT INTO recette (nom_recette,nb_aliments,Aliment,description) 
			VALUES (:nom_recette,:nb_aliments,:Aliment, :description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_recette' => $recette->getNom(),
					'nb_aliments' => $recette->getNb_aliments(),
					'Aliment' => $recette->getAliment(),
					'description' => $recette->getdescription(),
					
				]);	

			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function afficherrecette(){
			
			$sql="SELECT * FROM recette";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerrecette($id_recette){
			$sql="DELETE FROM recette WHERE id_recette= :id_recette";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_recette',$id_recette);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierrecette($recette, $id_recette){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE recette SET 
						nom_recette = :nom_recette, 
						nb_aliments = :nb_aliments,
						Aliment = :Aliment,
						description = :description
					WHERE id_recette = :id_recette'
				);
				$query->execute([
					'nom_recette' => $recette->getNom(),
					'nb_aliments' => $recette->getNb_aliments(),
					'Aliment' => $recette->getAliment(),
					'description' => $recette->getdescription(),
					
					'id_recette' => $id_recette
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererrecette($id_recette){
			$sql="SELECT * from recette where id_recette=$id_recette";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$recette=$query->fetch();
				return $recette;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererrecette1($id_recette){
			$sql="SELECT * from recette where id_recette=$id_recette";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$recette = $query->fetch(PDO::FETCH_OBJ);
				return $recette;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

 
	}
?>