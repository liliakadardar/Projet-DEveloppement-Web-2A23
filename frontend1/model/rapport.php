<?php
	class rapport{
		private $id_rapport ;
		private  $nom_nutritioniste;
		private  $nom_client ;
		private $prenom_client  ;
		private  $email_client ;
		private $description_client;
		
		
		function __construct( $nom_nutritioniste,$nom_client,$prenom_client,$email_client,$description_client){
			
			$this->nom_nutritioniste=$nom_nutritioniste;
			$this->nom_client=$nom_client;
			$this->prenom_client=$prenom_client;
			$this->email_client=$email_client;
			$this->description_client=$description_client;
			
		}
		
		function getId(){
			return $this->$id_rapport;
		}
		function getNom_nutritioniste(){
			return $this->nom_nutritioniste;
		}
		function getNom_client(){
			return $this->nom_client;
		}
		function getPrenom_client(){
			return $this->prenom_client;
		}
		function getemail_client(){
			return $this->email_client;
		}
		function getdescription_client(){
			return $this->description_client;
		}
		

		function setNom_nutritioniste( $nom_nutritioniste): void{
			$this->nom_nutritioniste=$nom_nutritioniste;
		}
		function setNom_client( $nom_client): void{
			$this->nom_client=$nom_client;
		}
		function setPrenom_client( $prenom_client): void{
			$this->prenom_client=$prenom_client;
		}
		function setemail_client( $email_client): void{
			$this->email_client=$email_client;
		}
		function setdescription_client( $description_client): void{
			$this->description_client=$description_client;
		}
		
	}
?>