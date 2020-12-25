<?PHP

class avisC {
function afficheravis ($star_rating){
		
		echo "id_utilisateur: ".$star_rating->getid_utilisateur()."<br>";
		echo "id_avis: ".$star_rating->getid_avis()."<br>";
		echo "sujet: ".$star_rating->getsujet()."<br>";
		echo "commentaire: ".$star_rating->getcommentaire()."<br>";
		echo "rating:".$star_rating->getRating()."<br>";
	}
	
	
	function afficherAviss(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From star_rating";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function afficherAvissUser($utilisatuer){
		$sql="SElECT * From membres where id_utilisateur='$utilisatuer'";
		$db= config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die ('Erreur: '.$e->getMessage());
		}
	}

function supprimerAvis($id_avis){
		$sql="DELETE FROM star_rating where id_avis= :id_avis";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_avis',$id_avis);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAvis($star_rating,$id_avis){
		$sql="UPDATE star_rating SET id_utilisateur=:id_utilisateur,sujet=:sujet,commentaire=:commentaire,rating=:rating WHERE id_avis=:id_avis";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id_utilisateur=$star_rating->getid_utilisateur();
        $sujet=$star_rating->getsujet();
        $commentaire=$star_rating->getcommentaire();
        $rating=$star_rating->getRating();
		$datas = array(':id_avis'=>$id_avis, ':id_utilisateur'=>$id_utilisateur,':sujet'=>$sujet,':commentaire'=>$commentaire, ':rating'=>$rating);
		$req->bindValue(':id_avis',$id_avis);
		$req->bindValue(':id_utilisateur',$id_utilisateur);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':rating',$rating);
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAvis($id_avis){
		$sql="SELECT * from star_rating where id_avis=$id_avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}


?>