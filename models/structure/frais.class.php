<?php 
	
	class Frais
	{
		private $id;
		private $id_inscription;
		private $montant;
		private $motif;
		private $id_categorie;
		public function __construct($id,$id_inscription,$id_categorie,$montant,$motif)
		{
			$this->id = $id;
			$this->id_inscription = $id_inscription;
			$this->id_categorie = $id_categorie;
			$this->montant = $montant;
			$this->motif = $motif;
		}
		public function getId(){
			return $this->id;
		}
		public function getIdInscription(){
			return $this->id_inscription;
		}
		public function getIdCategorie(){
			return $this->id_categorie;
		}
		public function getMontant(){
			return $this->montant;
		}
		public function getMotif(){
			return$this->motif;
		}
	}
?>