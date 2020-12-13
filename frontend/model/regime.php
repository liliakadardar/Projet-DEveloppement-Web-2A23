<?php
	class regime{
		private  $id_regime ;
		private  $nom_regime;
		private  $description_regime ;
	
		
		
		function __construct( $nom_regime,$description_regime){
			
			$this->nom_regime=$nom_regime;
			$this->description_regime=$description_regime;
			
		}
		
		function getId_regime(){
			return $this->id_regime;
		}
		function getNom_regime(){
			return $this->nom_regime;
		}
		
		function getdescription_regime(){
			return $this->description_regime;
		}
		

		function setNom_regime( $nom_regime): void{
			$this->nom_regime=$nom_regime;
		}
		function setdescription_regime( $description_regime): void{
			$this->description_regime=$description_regime;
		}
		
	}
?>