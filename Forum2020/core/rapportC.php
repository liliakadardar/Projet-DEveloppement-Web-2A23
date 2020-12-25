<?php
	include "../config.php";
	require_once '../model/rapport.php';

	class rapportC {
		
		function ajouterrapport($rapport){
			 /*$instance = config::getConnexion();
  $pdoStat=$instance->prepare('INSERT INTO recette VALUES (NULL,:nom_recette,:nb_aliments,:Aliment,:description)'); 
  $pdoStat->bindValue(':nom_recette',$_POST['nom_recette'],PDO::PARAM_STR);
  $pdoStat->bindValue(':nb_aliments',$_POST['nb_aliments'],PDO::PARAM_INT);
  $pdoStat->bindValue(':Aliment',$_POST['Aliment'],PDO::PARAM_STR);
  $pdoStat->bindValue(':description',$_POST['description'],PDO::PARAM_STR);
  $insertisOk=$pdoStat->execute();
  if($insertisOk){$message='la recette a été ajouter dans la base de donnée ';}
    else {$message='echec';}*/
			$sql="INSERT INTO rapport (nom_nutritioniste,nom_client,prenom_client,email_client,description_client) 
			VALUES (:nom_nutritioniste,:nom_client,:prenom_client, :email_client,:description_client)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_nutritioniste' => $rapport->getNom_nutritioniste(),
					'nom_client' => $rapport->getNom_client(),
					'prenom_client' => $rapport->getPrenom_client(),
					'email_client' => $rapport->getemail_client(),
					'description_client'=>$rapport->getdescription_client()
					
				]);	

			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function afficherrapport(){
			
			$sql="SELECT * FROM rapport";
			$db = config::getConnexion();
			try{
				$listerapport = $db->query($sql);
				return $listerapport;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerrapport($id_rapport){
			$sql="DELETE FROM rapport WHERE id_rapport= :id_rapport";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_rapport',$id_rapport);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierrapport($rapport, $id_rapport){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE rapport SET 
						nom_nutritioniste = :nom_nutritioniste, 
						nom_client = :nom_client,
						prenom_client = :prenom_client,
						email_client = :email_client , 
						description_client = :description_client
					WHERE id_rapport = :id_rapport'
				);
				$query->execute([
					'nom_nutritioniste' => $rapport->getNom_nutritioniste(),
					'nom_client' => $rapport->getNom_client(),
					'prenom_client' => $rapport->getPrenom_client(),
					'email_client' => $rapport->getemail_client(),
					'description_client' => $rapport->getdescription_client(),
					
					'id_rapport' => $id_rapport
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererrapport($id_rapport){
			$sql="SELECT * from rapport where id_rapport=$id_rapport";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$rapport=$query->fetch();
				return $rapport;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererrapport1($id_rapport){
			$sql="SELECT * from rapport where id_rapport=$id_rapport";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$rapport = $query->fetch(PDO::FETCH_OBJ);
				return $rapport;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		 function getrapportbynomclient($nom_client) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM rapport WHERE nom_client = :nom_client'
                );
                $query->execute([
                    'nom_client' => $nom_client
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         function rechercherrapport($nom_client) {            
            $sql = "SELECT * from rapport where nom_client=:nom_client"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nom_client' => $rapport->getNom_client(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }

 
	}
}
?>