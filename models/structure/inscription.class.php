<?php 
	
	class Inscription
	{
		private $matricule_eleve;
		private $id_classe;
		private $id_annee_scolaire;
		private $id_utilisateur ;
		private $date_inscription;
		public function __construct($matricule_eleve,$id_classe,$id_annee_scolaire,$id_user,$date_inscription)
		{
			$this->matricule_eleve = $matricule_eleve;
			$this->id_classe = $id_classe;
			$this->id_annee_scolaire = $id_annee_scolaire;
			$this->id_utilisateur = $id_utilisateur ;
			$this->date_inscription = $date_inscription;
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
		public function getDateInscription(){
			return $this->date_inscription;
		}
	}
?>