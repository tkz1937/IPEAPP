<?php 
	
	class CategorieDAO
	{
		private $db;
		function __construct()
		{
			$this->db=ConnexionDB::getConnexion();
		}
		public function ajouterCategorie($categorie){
			$req="INSERT INTO categorie values(null,:descript,:intitule)";
			$prepare=$this->db->prepare($req);
			$prepare->execute(array(
				'descript' => $categorie->getDescription(),
				'intitule' => $categorie->getIntitule()
				
			));
			if($prepare)
				 return True;
			return False;
		}
		public function getCategories(){
			$req='SELECT * FROM categorie';
			$res=$this->db->query($req);
			return $res;
		}
	}
?>