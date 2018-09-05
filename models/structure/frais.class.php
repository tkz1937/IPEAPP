<?php 
	
	class Frais
	{
		private $id;
		private $id_classe;
		private $montant;
		private $motif;
		private $id_categorie;
		public function __construct($id,$id_classe,$montant,$motif,$id_categorie)
		{
			$this->id = $id;
			$this->id_classe = $id_classe;
			$this->id_categorie = $id_categorie;
			$this->montant = $montant;
			$this->motif = $motif;
		}
		public function getId(){
			return $this->id;
		}
		public function getIdClass(){
			return $this->id_classe;
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