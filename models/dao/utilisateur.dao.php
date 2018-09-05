<?php 
	
	class UtilisateurDAO
	{
		private $db;
		public function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function ajouterUser($user){
			$str = 'INSERT INTO utlisateur VALUES(null,:login,:nom_complet,:mot_de_passe,:tel,:email,:niveauAcces)';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('login'=>$user->getLogin(),
									'nom_complet'=>$user->getNomComplet(),
									'mot_de_passe'=>$user->getMotDePasse(),
									'tel'=>$user->getTel(),
									'email'=>$user->getEmail(),
									'niveauAcces'=>$user->getNiveauAcces()));
			
			if(!($prepare==null))
				return True;
			return False;
		}
		public function seConnecter($user){
			$str = 'SELECT * FROM utlisateur WHERE login=:login and mot_de_passe=:mot_de_passe';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('login'=>$user->getLogin(),
								'mot_de_passe'=>$user->getMotDePasse()));
			$result =$prepare->fetch();
			if($result)
				return True;
			return False;
		}

		public function getUtilisateurById($login){
			$str = 'SELECT id FROM utlisateur WHERE login=:login';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('login'=>$login));

			$result =$prepare->fetch()['id'];

			return $result;

		}
	}
?>