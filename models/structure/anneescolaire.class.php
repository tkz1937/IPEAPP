<?php
	
	class AnneeScolaire
	{
		private $id;
		private $debut;
		private $fin;
		public function __construct($id,$debut,$fin)
		{
			$this->id = $id;
			$this->debut = $debut;
			$this->fin = $fin;
		}
		public function getId(){
			return $this->id;
		}
		public function getDebut(){
			return $this->debut;
		}
		public function getFin(){
			return $this->fin;
		}
	}

?>