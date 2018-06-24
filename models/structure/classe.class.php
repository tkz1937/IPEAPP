<?php 
	class Classe{

		private $id;
		private $intitule;
		private $niveau;
		private $nbPlace;
		private $nbEleve;

		public function __construct($id,$intitule,$niveau,$nbPlace,$nbEleve){
			$this->id = $id;
			$this->intitule = $intitule;
			$this->niveau = $niveau;
			$this->nb_place = $nbPlace;
			$this->nb_eleve = $nbEleve;
		}
		public function getId(){
			return $this->id;
		}
		public function getIntitule(){
			return $this->intitule;
		}
		public function getNiveau(){
			return $this->niveau;
		}
		public function getNbPLace(){
			return $this->nb_place;
		}
		public function getNbEleve(){
			return $this->nb_eleve;
		}

	}

?>