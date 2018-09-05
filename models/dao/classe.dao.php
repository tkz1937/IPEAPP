<?php 
	
	class ClasseDAO 
	{
		private $db;
		public function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function ajouterClasse($classe){
			$query = "INSERT INTO classe VALUES(null,:nom_classe,:niveau,:nb_place,0)";
			$prepare = $this->db->prepare($query);
			$rep = $prepare->execute(array('nom_classe'=>$classe->getIntitule(),
									'niveau'=>$classe->getNiveau(),
									'nb_place'=>$classe->getNbPLace()));
			if ($rep)
				return True;
			return False;
		}

		public function getIdByClasse($classe){
			$query = "SELECT id from classe where nom_classe = :idclasse";
			$prepare = $this->db->prepare($query);
			$prepare->execute(array(
					'idclasse'=>$classe
			));
			$id =$prepare->fetch();
			return $id['id'];
		}

		public function getAllClasses()
		{
			$requete = 'SELECT id,  nom_classe  FROM classe';
			return $this->db ->query($requete);
		}
	}

?>