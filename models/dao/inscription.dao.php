<?php 
	
	class InscriptionDAO
	{
		private $db;
		function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function inscrireOldEleve($inscription){
			$str = 'INSERT INTO inscription VALUES(:matricule_eleve,:id_classe,:id_utilisateur,:id_annee_scolaire,NOW()';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('matricule_eleve'=>$inscription->getMatriculeEleve(),
									'id_classe'=>$inscription->getIdClasse(),
									'id_utilisateur'=>$inscription->getIdUtilisateur(),
									'id_annee_scolaire'=>$inscription->getIdAnneeScolaire()));
			if($prepare)
				return True;
			return False;
		}
		public function inscrireNewEleve($eleve,$inscription){
			$reponse = $this->ajouterEleve($eleve);
			if($reponse)
				$this->inscrireOldEleve($inscription);
			else
				return False;
			return True;
		}
		public function ajouterEleve($eleve){
			$str = 'INSERT INTO eleve VALUES(:$matricule,:$nom,:$postnom,:$prenom,:$genre,:$adresse,:$nationalite,:$date_naissance,:$lieu_naissance,:$responsable,:$tel_responsable,:$adresse_responsable,:$pieceJointe)';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('matricule'=>$eleve->getMatricule(),
									'nom'=>$eleve->getNom(),
									'postnom'=>$eleve->getPostnom(),
									'prenom'=>$eleve->getPrenom(),
									'genre'=>$eleve->getGenre(),
									'adresse'=>$eleve->getAdresse(),
									'nationalite'=>$eleve->getNationalite(),
									'date_naissance'=>$eleve->getDateNaissance(),
									'lieu_naissance'=?$eleve->getLieuNaissance(),
									'responsable'=>$eleve->getResponsable(),
									'tel_responsable'=>$eleve->getTelResponsable(),
									'adresse_responsable'=>$eleve->getAdresseResponsable(),
									'pieceJointe'=>$eleve->getPieceJointe()));
			if($prepare)
				return True;
			return False;
		}
	}
?>