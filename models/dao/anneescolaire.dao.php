<?php 
	
	class AnneeScolaireDAO
	{
		private $db;
		public function __construct(argument)
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
	}
?>