<?php 
	
	class ClasseDAO 
	{
		private $db;
		public function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function ajouterClasse($classe){
			$query = "INSERT INTO classe VALUES(null,:intitule,:niveau,:nb_place,0)";
			$prepare = $this->db->prepare($query);
			$rep = $prepare->execute(array('intitule'=>$classe->getIntitule(),
									'niveau'=>$classe->getNiveau(),
									'nb_place'=>$classe->getNbPLace()));
			if ($rep)
				return True;
			return False;
		}

		public function getIdByClasse($classe){
			$query = "SELECT count(*) as id_min from classe where nom_classe =$classe";
			$reponse = $this->db->query($query);
			$id_max =$reponse->fetch()['id_min']+1;
			return $id_max;
		}
	}

?>