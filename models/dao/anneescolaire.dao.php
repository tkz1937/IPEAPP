<?php 
	
	class AnneeScolaireDAO
	{
		private $db;
		public function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function configurer($annee){
			$str = 'INSERT INTO annee_scolaire VALUES(null,:debut,:fin)';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('debut'=>$annee->getDebut(),
									'fin'=>$annee->getFin()));
			if($prepare)
				return True;
			return False;
		}

		public function anneeDontExist($annee){
			$str ='SELECT * FROM annee_scolaire WHERE debut=:debut AND fin=:fin';
			$prepare = $this->db->prepare($str);
			$prepare -> execute(array(
				'debut'=>$annee ->getDebut(),
				'fin'=>$annee->getFin())
			);
			if($prepare->rowCount() == 0)
				return True;
		    else 
		      return False;
		}
		public function getIdByAnneeScolaire(){
			$req = "SELECT max(id) as id from annee_scolaire";
			$rep = $this->db->query($req);

			return $rep->fetch()['id'];
		}
		public function getDebutAnnee(){
			$req = "SELECT debut from annee_scolaire where debut= YEAR(now())";
			$rep = $this->db->query($req);

			return $rep->fetch()['debut'];
		}
	}
?>