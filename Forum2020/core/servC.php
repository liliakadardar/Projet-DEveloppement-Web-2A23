<?PHP

class servC {
function afficherforum($serv){
		echo "nomp: ".$serv->getnomp()."<br>";
        echo "topic: ".$serv->gettopic()."<br>";
        echo "commentaire: ".$serv->getcommentaire()."<br>";
        echo "ask: ".$serv->getask()."<br>";
		
	}
	
	function ajouterforum($serv){
		$sql="insert into serv(nomp,topic,commentaire,ask) values (:nomp,:topic,:commentaire,:ask)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nomp=$serv->getnomp();
        $topic=$serv->gettopic();
        $commentaire=$serv->getcommentaire();
        $ask=$serv->getask();

        
		$req->bindValue(':nomp',$nomp);
        $req->bindValue(':topic',$topic);
        $req->bindValue(':commentaire',$commentaire);
        $req->bindValue(':ask',$ask);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherforums(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From serv";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    /*function afficherStatut($participant){
     
        $sql="SElECT participant.id_event,event.nom_event,event.commentaire From serv,participant where participant.id_par='$participant' and participant.id_event=event.id_event ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }*/

        /* function ArchvierEvents($id_event,$id_par){
        $sql="DELETE FROM participant where id_event= :id_event and id_par=:participant" ;
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_event',$id_event);
         $req->bindValue(':id_par',$id_par);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/

        function trierEvents(){
        $sql="SELECT * from serv ORDER BY nomp ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	function supprimerforums($nomp){
		$sql="DELETE FROM serv where nomp= :nomp";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nomp',$nomp);
		try{
            $req->execute();
           header('Location: afficherforum.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



		function modifierforum($serv,$id_post){
		$sql="UPDATE serv SET nomp=:nomp, topic=:topic,commentaire=:commentaire,ask=:ask WHERE id_post=:id_post";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$nomp=$serv->getnomp();
        $topic=$serv->gettopic();
        $commentaire=$serv->getcommentaire();        
        $ask=$serv->getask();


        $datas = array(':id_post'=>$id_post,':nomp'=>$nomp,':topic'=>$topic,':commentaire'=>$commentaire,':ask'=>$ask);
        
		
        $req->bindValue(':nomp',$nomp);
        $req->bindValue(':topic',$topic);
        $req->bindValue(':commentaire',$commentaire);        
        $req->bindValue(':ask',$ask);
        $req->bindValue(':id_post',$id_post);
            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);

        }
		
	}


        function recupererEvent($id_post){
        $sql="SELECT * from serv where id_post=$id_post";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (PDOException $e){
            die('Erreur: '.$e->getMessage());
        }
    }



	function replayforums($nomp){
		$sql="ADD FROM serv where nomp= :nomp";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nomp',$nomp);
		try{
            $req->execute();
           header('Location: afficherforum.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    /*function ajouterParticipants($id_event,$id_par){
        $sql="insert into participant (id_par,id_event) values (:id_par,:id_event)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
       

        
        $req->bindValue(':id_par',$id_par);
        $req->bindValue(':id_event',$id_event);
       
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }*/
	
}

?>