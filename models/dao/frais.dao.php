<?php 
	
	class FraisDAO
	{
		private $db;
		public function __construct()
		{
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function ajouterAutresFrais($frais) {
			$str = "INSERT INTO frais VALUES(null,:id_classe,:montant,:motif,:id_categorie)";
			$prepare = $this->db->prepare($str);
			$prepare->execute(array(
				'id_classe'=>$frais->getIdClass(),
									'montant'=>$frais->getMontant(),
									'motif'=>$frais->getMotif(),
									'id_categorie'=>$frais->getIdCategorie()));
			if ($prepare)
				return True;
			return False;
		}

		public function fraisDontExist($frais) {
			$str ='SELECT * FROM frais WHERE  montant=:montant and motif=:motif';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array(
				/*'id_inscription'=>$frais->getIdInscription(),
				'id_categorie'=>$frais->getIdCategorie(),*/
				'montant'=>$frais->getMontant(),
				'motif'=>$frais->getMotif())
			);
			if($prepare->rowCount() == 0)
				return True;
		    else 
		      return False;
		}

		public function getFrais(){
			$req='SELECT * FROM frais inner join categorie on frais.id_categorie = categorie.id';
			$res=$this->db->query($req);
			return $res;
		}
	}
?>