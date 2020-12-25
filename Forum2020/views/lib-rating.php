<?php
class Rating {
function save ($id_avis,$Sujet,$commentaire,$rating){
    $sql ="Insert INTO `star_rating` (`id_utilisateur`,`id_avis`,`sujet`,`commentaire`, `rating`) VALUES (:id_utilisateur,:Sujet,:commentaire,:rating)";

      $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_utilisateur',$client);
		$req->bindValue(':id_avis',$id_avis);
        $req->bindValue(':Sujet',$Sujet);
        $req->bindValue(':commentaire',$commentaire);
        $req->bindValue(':rating',$stars);
        
        
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }


}
?>