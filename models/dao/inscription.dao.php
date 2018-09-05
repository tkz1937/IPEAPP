<?php 
	
	class InscriptionDAO
	{
		private $db;
		function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function inscrireOldEleve($inscription){
			$str = 'INSERT INTO inscription VALUES(null,:mat_eleve,:id_classe,:id_annee_scolaire,:id_utilisateur,NOW())';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('mat_eleve'=>$inscription->getMatriculeEleve(),
									'id_classe'=>$inscription->getIdClasse(),
									'id_utilisateur'=>$inscription->getIdUtilisateur(),
									'id_annee_scolaire'=>$inscription->getIdAnneeScolaire()
								));
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
			$str = 'INSERT INTO eleve VALUES(:matricule,:nom,:postnom,:prenom,:genre,:adresse,:nationalite,:date_naissance,:lieu_naissance,:responsable,:tel_responsable,:adresse_responsable,:pieceJointe)';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('matricule'=>$eleve->getMatricule(),
									'nom'=>$eleve->getNom(),
									'postnom'=>$eleve->getPostnom(),
									'prenom'=>$eleve->getPrenom(),
									'genre'=>$eleve->getGenre(),
									'adresse'=>$eleve->getAdresse(),
									'nationalite'=>$eleve->getNationalite(),
									'date_naissance'=>$eleve->getDate_naissance(),
									'lieu_naissance'=>$eleve->getLieu_naissance(),
									'responsable'=>$eleve->getNom_Responsable(),
									'tel_responsable'=>$eleve->getTel_Responsable(),
									'adresse_responsable'=>$eleve->getAdresse_Responsable(),
									'pieceJointe'=>$eleve->getPiece_Jointe()));
			if($prepare)
				return True;
			return False;
		}
		public function inscriptionRecente(){
			$tr='SELECT DISTINCT eleve.matricule, eleve.nom, eleve.prenom ,date  FROM  inscription  
			inner join eleve on eleve.matricule=inscription.mat_eleve order by date desc limit 10';
			$resultat=$this->db->query($str);
			return $resultat->fetch();
		}
		Public function reinscriptionRecente(){
			$str='SELECT eleve.matricule as matricule, eleve.nom, eleve.prenom  ,classe.nom_classe as classe FROM  inscription
			   inner join (eleve ,classe) 
			   on (eleve.matricule=inscription.mat_eleve  and inscription.id_classe=classe.id) 
			   GROUP by mat_eleve  HAVING COUNT(matricule) > 1 
			   ORDER by inscription.date DESC';
			$resultat=$this->db->query($str);
			return $resultat;
		}
		public function getIdInscription($idclasse)
		{
			$str = "SELECT * FROM inscription WHERE id_classe = :id_classe";
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('id_classe'=> $idclasse));
			$data = $prepare->fetch();
			$inscription = new Inscription($data['id'], $data['mat_eleve'], $data['id_classe'], $data['id_annee_scolaire'], $data['id_utilisateur'], $data['date']);
			return $inscription;
		}
	
	}
?>