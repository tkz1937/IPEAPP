<?php 
	
	class Inscription
	{
		private $matricule_eleve;
		private $id_classe;
		private $id_annee_scolaire;
		private $id_utilisateur ;
		private $îd;
		
		public function __construct($id,$matricule_eleve,$id_classe,$id_annee_scolaire,$id_user)
		{
			$this->id = $id;
			$this->matricule_eleve = $matricule_eleve;
			$this->id_classe = $id_classe;
			$this->id_annee_scolaire = $id_annee_scolaire;
			$this->id_utilisateur = $id_user ;
			
		}
		public function getId()
		{
			return $this->id;
		}
		public function getMatriculeEleve(){
			return $this->matricule_eleve;
		}
		public function getIdClasse(){
			return $this->id_classe;
		}
		public function getIdAnneeScolaire(){
			return $this->id_annee_scolaire;
		}
		public function getIdUtilisateur(){
			return $this->id_utilisateur ;
		}
	
	}
?>