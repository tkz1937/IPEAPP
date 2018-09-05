<?php 
	
	class Eleve
	{
		private $matricule;
		private $nom;
		private $postnom;
		private $prenom;
		private $genre;
		private $adresse;
		private $nationalite;
		private $date_naissance;
		private $lieu_naissance;
		private $responsable;
		private $tel_responsable;
		private $adresse_responsable;
		private $pieceJointe;
		private $classe;
		
		public function __construct($matricule,$nom,$postnom,$prenom,$genre,$adresse,$nationalite,$date_naissance,$lieu_naissance,$classe,$responsable,$tel_responsable,$adresse_responsable,$pieceJointe)
		{
			$this->matricule = $matricule;
			$this->nom = $nom;
			$this->postnom = $postnom;
			$this->prenom = $prenom;
			$this->genre = $genre;
			$this->adresse = $adresse;
			$this->nationalite = $nationalite;
			$this->date_naissance = $date_naissance;
			$this->lieu_naissance = $lieu_naissance;
			$this->responsable = $responsable;
			$this->tel_responsable = $tel_responsable;
			$this->adresse_responsable = $adresse_responsable;
			$this->pieceJointe = $pieceJointe;
			$this->classe =$classe;
		}
		public function getMatricule(){
			return $this->matricule;
		}
		public function setMatricule($mat){
			$this->matricule=$mat;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getPostnom(){
			return $this->postnom;
		}
		public function getPrenom(){
			return $this->prenom;
		}
		public function getGenre(){
			return $this->genre;
		}
		public function getAdresse(){
			return $this->adresse;
		}
		public function getNationalite(){
			return $this->nationalite;
		}
		public function getDate_naissance(){
			return $this->date_naissance;
		}
		public function getLieu_naissance(){
			return $this->lieu_naissance;
		}
		public function getNom_Responsable(){
			return $this->responsable;
		}
		public function getTel_Responsable(){
			return $this->tel_responsable;
		}
		public function getAdresse_Responsable(){
			return $this->adresse_responsable;
		}
		public function getPiece_Jointe(){
			return $this->pieceJointe;
		}
		public function setPiece_Jointe($piece){
			 $this->pieceJointe=$piece;
		}

		public function getClasse(){
			return $this->classe;
		}
	}
?>