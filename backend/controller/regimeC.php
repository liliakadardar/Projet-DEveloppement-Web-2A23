<?php
	include "../config.php";
	require_once '../model/regime.php';

	class regimeC {
		
		function ajouterregime($regime){
			/* $instance = config::getConnexion();
  $pdoStat=$instance->prepare('INSERT INTO regime VALUES (NULL,:nom_regime,:description_regime)'); 
  $pdoStat->bindValue(':nom_regime',$_POST['nom_regime'],PDO::PARAM_STR);
  $pdoStat->bindValue(':description_regime',$_POST['description_regime'],PDO::PARAM_STR);
  $insertisOk=$pdoStat->execute();
  if($insertisOk){$message='le regime a été ajouter dans la base de donnée ';}
    else {$message='echec';}*/
			$sql="INSERT INTO regime (nom_regime,description_regime) 
			VALUES (:nom_regime,:description_regime)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_regime' => $regime->getNom_regime(),
					'description_regime' => $regime->getdescription_regime()	
				]);	

			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function afficherregime(){
			
			$sql="SELECT * FROM regime";
			$db = config::getConnexion();
			try{
				$listeregime = $db->query($sql);
				return $listeregime;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerregime($id_regime){
			$sql="DELETE FROM regime WHERE id_regime= :id_regime";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_regime',$id_regime);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierregime($regime, $id_regime){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE regime SET 
						nom_regime = :nom_regime, 
						description_regime = :description_regime
					WHERE id_regime = :id_regime'
				);
				$query->execute([
					'nom_regime' => $regime->getNom_regime(),
					'description_regime' => $regime->getdescription_regime(),
					'id_regime' => $id_regime
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererregime($id_regime){
			$sql="SELECT * from regime where id_regime=$id_regime";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$regime=$query->fetch();
				return $regime;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		

 
	}
?>