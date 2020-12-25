<?php
	include "../config.php";
	require_once '../Modele/Classes.php';

	class membresC {
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM membres";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function ajouterUtilisateur($membres){
			$sql="INSERT INTO membres (nom, prenom, sexe, taille, poids,imc, adresse, mail,date_naissance, mdp,telephone) 
			VALUES (:nom,:prenom, :sexe, :taille, :poids,:imc, :adresse, :mail,:date_naissance, :mdp,:telephone)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $membres->getnom(),
					'prenom' => $membres->getprenom(),

					'sexe' => $membres->getsexe(),
					'taille' => $membres->gettaille(),
					'poids' => $membres->getpoids(),
					'imc' => $membres->getimc(),
					'adresse' => $membres->getadresse(),
					'mail' => $membres->getmail(),
					'date_naissance' => $membres->getdate_naissance(),
					'mdp' => $membres->getmdp(),
					'telephone' => $membres->gettelephone(),
					
		
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifierUtilisateur($id,$membres){
			$sql="UPDATE membres SET nom= :nom, prenom=:prenom,sexe= :sexe,taille= :taille,poids= :poids,imc=:imc,adresse= :adresse, mail= :mail,date_naissance=:date_naissance,mdp= :mdp,telephone=:telephone where id= :id";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $membres->getnom(),
					'prenom' => $membres->getprenom(),

					'sexe' => $membres->getsexe(),
					'taille' => $membres->gettaille(),
					'poids' => $membres->getpoids(),
					'imc' => $membres->getimc(),
					'adresse' => $membres->getadresse(),
					'mail' => $membres->getmail(),
					'date_naissance' => $membres->getdate_naissance(),
					'mdp' => $membres->getmdp(),
					'telephone' => $membres->gettelephone(),
					
				]);	
				echo $query->rowCount()."records UPDATED successfully";
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
	    }
		function supprimerUtilisateur(int $id){
			$sql="DELETE FROM membres where id= :id";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['id' =>$id]);
				echo $query->rowCount() ."records DELETED successfully";
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
		function rechercherUtilisateur(int $id){
			$sql="SELECT * FROM membres where id= :id";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['id' =>$id]);
				return $query->fetch();
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
	}
?>