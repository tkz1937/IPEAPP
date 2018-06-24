<?php 
	
	class Paiement
	{
		private $id;
		private $id_inscription;
		private $id_utilisateur;
		private $montant;
		private $date_payement;
		
		public function __construct($id,$id_inscription,$id_utilisateur,$montant,$date_payement)
		{
			$this->id = $id;
			$this->id_utilisateur = $id_utilisateur;
			$this->id_inscription = $id_inscription;
			$this->montant = $montant;
			$this->montant = $montant;
			$this->date_payement = $date_payement;
		}
		public function getId(){
			return $this->id;
		}
		public function getIdInscription(){
			return $this->id_inscription;
		}
		public function getIdUtilisateur(){
			return $this->id_utilisateur;
		}
		public function getMontant(){
			return $this->montant;
		}
		public function getDatePayement(){
			return $this->date_payement;
		}
	}
?>