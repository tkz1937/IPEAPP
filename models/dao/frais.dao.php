<?php 
	
	class FraisDAO
	{
		private $db;
		public function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		public function enregistrerFrais($frais){
			$str = "INSERT INTO frais VALUES(null,:id_inscription,:id_categorie,:montant,:motif)";
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('id_inscription'=>$frais->getIdInscription(),
									'id_categorie'=>$frais->getIdCategorie(),
									'montant'=>$frais->getMontant(),
									'motif'=>$frais->getMotif()));
			if ($prepare)
				return True;
			return False;
		}
	}
?>