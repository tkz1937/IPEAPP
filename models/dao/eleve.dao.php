<?php 

	class EleveDAO
	{
		private $db;
		public function __construct(){
			$this->db = ConnexionDB::getConnexion();
		}
	/*	public function inscrireNewEleve($nouvel){
			$str = "INSERT INTO eleve VALUES(:matricule,:nom,:postnom,:prenom,:genre,:adresse, :nationalite, :date_naissance, :lieu_naissance, :responsable, :tel_responsable, :adresse_responsable,:pieceJointe)";
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
				'responsable'=>$nouvel->getNom_Responsable(),
				'tel_responsable'=>$nouvel->getTel_Responsable(),
				'adresse_responsable'=>$nouvel->getAdresse_Responsable(),
				'pieceJointe'=>$nouvel->getPiece_Jointe()
			
			));
			if($prepare)
				return True;
			return False;

		}*/
		public function genererMatricule($eleve,$id_classe){
			$str = 'SELECT debut FROM annee_scolaire,inscription WHERE inscription.id_annee_scolaire=annee_scolaire.id';
			$num = $this->getNumOrdre($id_classe);
			$resul = $this->db->query($str);
			$resul=$resul->fetch();
			$annee_scolaireDao = new AnneeScolaireDAO();
			$debut = $annee_scolaireDao->getDebutAnnee();
			$debut =$debut%100;
			$mat = $debut.strtoupper($eleve->getNom()[0]).strtoupper($eleve->getPostnom()[0]).$num;

			return $mat;
		}
		public function getNumOrdre($id_classe){
			$str = "SELECT COUNT(id_annee_scolaire) as num FROM inscription,annee_scolaire WHERE annee_scolaire.id=inscription.id_annee_scolaire AND inscription.id_classe=$id_classe";
			$resul = $this->db->query($str);
			$result=$resul->fetch();
			$num = $result['num']+1;
			$num= $num.$id_classe;
			if($num<10)
				$num = '00'.$num;
			$num = '0'.$num;
			return $num;
		}
		public function checkMatriculeEleve($matricule){
			$str ="SELECT * FROM eleve WHERE matricule=:matricule";
			$resutat=$this->db->prepare($str);
			$resutat->execute(array(
				'matricule'=>$matricule
			));
			if(!$resutat->fetch()==null)
			   return true;
			return false;
		}
		public function getAllInformation($idan,$matricule){
			$str="SELECT nom,postnom,prenom,genre from eleve ,inscription where matricule=:mat and
			inscription.mat_eleve=matricule and id_annee_scolaire=:id";
			$prepare=$this->db->prepare($str);
			$prepare->execute(array(
				'mat' => $matricule,
				'id'  => $idan
			));
			return $prepare->fetch();
		}
	}
	
?>