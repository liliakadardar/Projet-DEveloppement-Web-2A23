<?PHP
class serv{
    private $id_post;
	private $nomp;
	private $topic;
	private $commentaire;
	private $ask;

	
	function __construct($nomp,$topic,$commentaire,$ask){		
		$this->nomp=$nomp;
		$this->topic=$topic;
		$this->commentaire=$commentaire;
		$this->ask=$ask;

		
	}

    function getid_post(){
		return $this->id_post;
	}
	function getnomp(){
		return $this->nomp;
	}
    function gettopic(){
		return $this->topic;
	}
	function getcommentaire(){
		return $this->commentaire;
	}
	function getask(){
		return $this->ask;
	} 



	
	function setid_post($id_post){
		$this->id_post=$id_post;
	}
	function setnomp($nomp){
		$this->nomp=$nomp;
	}
    function settopic($topic){
		$this->topic=$topic;
	}
    function setcommentaire($commentaire){
		$this->commentaire=$commentaire;
	}
	function setask($ask){
		$this->ask=$ask;
	}

	
}

?>