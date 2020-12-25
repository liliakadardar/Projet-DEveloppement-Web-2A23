<?PHP
class Avis{
	private $id_avis;
	private $sujet;
	private $commentaire;
	private $rating;
	function __construct($id_avis,$sujet,$commentaire,$rating)
	{
		$this->id_avis=$id_avis;
		$this->sujet=$sujet;
		$this->commentaire=$commentaire;
		$this->rating=$rating;
	}
	
	function getid_avis(){
		return $this->id_avis;
	}
	function getsujet(){
		return $this->sujet;
	}
	function getcommentaire()
	{
		return $this->commentaire;
	}
	function getRating(){
		return $this->rating;
	}
}