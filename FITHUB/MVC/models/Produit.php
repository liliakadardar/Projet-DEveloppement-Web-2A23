
<?php
	
	class Produit
	{
		private $id_produit=NULL; 
		private $reference;
		private $nom;
		private $quantite_total;
		private $prix;
		private $chemin_img;
		private $description;
		private $reference_sous_categorie;
		
		function __construct($reference,$nom,$quantite_total,$prix,$chemin_img,$description)
		{
			$this->reference=$reference;
			$this->nom=$nom;
			$this->quantite_total=$quantite_total;
			$this->prix=$prix;
			$this->chemin_img=$chemin_img;
			$this->description=$description;
			
		}

		public function getReference(){
			return $this->reference;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getQuantite_total(){
			return $this->quantite_total;
		}
		public function getPrix(){
			return $this->prix;
		}
		public function getChemin_img(){
			return $this->chemin_img;
		}
		public function getDescription(){
			return $this->description;
		}
		

		public function setReference($reference){
			$this->reference=$reference;
		}
		public function setNom($nom){
			$this->nom=$nom;
		}
		public function setQuantite_total($quantite_total){
			$this->quantite_total=$quantite_total;
		}
		public function setPrix($prix){
			$this->prix=$prix;
		}
		public function setChemin_img($chemin_img){
			$this->chemin_img=$chemin_img;
		}
		public function setDescription($description){
			$this->description=$description;
		}
		
	}

  ?>
