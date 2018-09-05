<?php 
	
	class Paiement
	{
		private $id;
		private $id_inscription;
		private $id_utilisateur;
		private $montant;
		private $date_payement;
		private $id_frais;
		
		public function __construct($id,$id_inscription,$id_utilisateur,$montant,$date_payement,$id_frais)
		{
			$this->id = $id;
			$this->id_utilisateur = $id_utilisateur;
			$this->id_inscription = $id_inscription;
			$this->montant = $montant;
			$this->montant = $montant;
			$this->date_payement = $date_payement;
			$this->id_frais = $id_frais;
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
		public function getIdFrais(){
			return $this->id_frais;
		}
	}
?>