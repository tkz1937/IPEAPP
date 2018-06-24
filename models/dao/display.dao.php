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
		public function afficherEleveParClasse($id_classe){
			$str = "SELECT matricule_eleve from inscription,annee_scolaire WHERE id_classe:=id_classe AND inscription.id_annee_scolaire=annee_scolaire.id AND date('Y')=annee_scolaire.debut OR date('Y')=annee_scolaire.fin";
			$prepare=$this->db->execute(array('id_classe'=>$id_classe));
			$data = $prepare->fetch();
			if($data)
				return $data;
			return False;
		}
	}
?>