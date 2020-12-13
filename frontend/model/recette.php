<?php
	class recette{
		private $id_recette ;
		private  $nom_recette;
		private  $nb_aliments ;
		private $Aliment  ;
		private  $description ;
		
		
		function __construct( $nom_recette,  $nb_aliments,  $Aliment,  $description){
			
			$this->nom_recette=$nom_recette;
			$this->nb_aliments=$nb_aliments;
			$this->Aliment=$Aliment;
			$this->description=$description;
			
		}
		
		function getId(){
			return $this->id_recette;
		}
		function getNom(){
			return $this->nom_recette;
		}
		function getNb_aliments(){
			return $this->nb_aliments;
		}
		function getAliment(){
			return $this->Aliment;
		}
		function getdescription(){
			return $this->description;
		}
		

		function setNom( $nom_recette): void{
			$this->nom_recette=$nom_recette;
		}
		function setNb_aliments( $nb_aliments): void{
			$this->nb_aliments=$nb_aliments;
		}
		function setAliment( $Aliment): void{
			$this->Aliment=$Aliment;
		}
		function setDescription( $description): void{
			$this->description=$description;
		}
		
	}
?>