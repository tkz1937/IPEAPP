<?php 
	
	class DisplayDAO
	{
		private $db;
		public function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function afficherEleveEnOrdreParClasse($id_classe){

		}
		public function afficherEleveNonEnOrdreParClasse($id_classe){
			
		}
		public function afficherEleveParClasse($id_classe,$id_annee){
			$str = "SELECT DISTINCT matricule,nom,postnom,prenom from inscription,annee_scolaire,eleve
			 WHERE id_classe=:id_classe AND inscription.id_annee_scolaire=annee_scolaire.id
			 AND inscription.mat_eleve=eleve.matricule
			 AND annee_scolaire.id=:id";
			$prepare=$this->db->prepare($str);
			$prepare->execute(array('id_classe'=>$id_classe,
									'id'=>$id_annee	));
			$data = $prepare;
			if($data)
				return $data;
			return False;
		}
	}
?>