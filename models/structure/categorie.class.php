<?php 
	
	class Categorie
	{
		private $id;
		private $description;
		private $montant;
		private $intitule;
		public function __construct($id,$description,$intitule)
		{
			$this->id = $id;
			$this->description = $description;
			$this->intitule = $intitule;	
		}
		public function getId(){
			return $this->id;
		}
		public function getDescription(){
			return $this->description;
		}
		public function getIntitule(){
			return $this->intitule;
		}
	}


?>