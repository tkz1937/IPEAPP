<?php 
	
	class PaiementDAO
	{
		private $db;
		public function __construct()
		{
			$this->db=ConnexionDB::getConnexion();
		}
		public function payerFrais($paiement){
			$str = 'INSERT INTO paiement VALUES(null,:id_inscription,:id_utilisateur,:montant,:date_payement)';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('id_inscription'=>$paiement->getIdInscription(),
									'id_utilisateur'=>$paiement->getIdUtilisateur(),
									'montant'>$paiement->getMontant(),
									'date_payement'=>$paiement->getDatePayement()));
			if($prepare)
				return True;
			return Fasle;
		}
	}

?>