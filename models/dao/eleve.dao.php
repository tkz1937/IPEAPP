<?php 

	class EleveDAO
	{
		private $db;
		public function __construct(){
			$this->db = ConnexionDB::getConnexion();
		}
		public function inscrireNewEleve($nouvel){
			$str = "INSERT INTO eleve VALUES(:matricule,:nom,:postnom,:prenom,:genre,:adresse, :nationalite, :date_naissance, :lieu_naissance,  :classe, :nom_responsable, :tel_responsable, :adresse_responsable,:pieceJointe)";
			$prepare = $this->db->prepare($str);
			$prepare->execute(array(
				'matricule'=>$nouvel->getMatricule(),
				'nom'=>$nouvel->getNom(),
				'postnom'=>$nouvel->getPostnom(),
				'prenom'=>$nouvel->getPrenom(),
				'genre'=>$nouvel->getGenre(),
				'adresse'=>$nouvel->getAdresse(),
				'nationalite'=>$nouvel->getNationalite(),
				'date_naissance'=>$nouvel->getDate_naissance(),
				'lieu_naissance'=>$nouvel->getLieu_naissance(),
				'classe'=>$nouvel->getClasse(),
				'nom_responsable'=>$nouvel->getNom_Responsable(),
				'tel_responsable'=>$nouvel->getTel_Responsable(),
				'adresse_responsable'=>$nouvel->getAdresse_Responsable(),
				'pieceJointe'=>$nouvel->getPiece_Jointe()
			
			));
			if($prepare)
				return True;
			return False;

		}
		public function genererMatricule($eleve,$id_classe){
			$str = 'SELECT debut FROM annee_scolaire,inscription WHERE inscription.id_annee_scolaire=anneescolaire.id';
			$num = $this->getNumOrdre($id_classe);
			$resul = $this->db->query($str);
			$resul=$resul->fetch();
			$debut = $resul['debut'];
			$debut =$debut%100;
			$mat = $debut.strtoupper($eleve->getNom()[0]).strtoupper($eleve->getPostnom()[0]).$num;
			$eleve->setMatricule($mat);
			return $mat;
		}
		public function getNumOrdre($id_classe){
			$str = "SELECT COUNT(debut) as num FROM inscription,annee_scolaire WHERE annee_scolaire.debut=date('Y') AND inscription.id_classe=$id_classe";
			$resul = $this->db->query($str);
			$resul=$resul->fetch();
			$num = $resul['num']+1;
			if($num<10)
				$num = '00'.$num;
			$num = '0'.$num;
			return $num;
		}
		
	}
	
?>