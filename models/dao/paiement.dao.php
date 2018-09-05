<?php 
	
	class PaiementDAO
	{
		private $db;
		public function __construct()
		{
			$this->db=ConnexionDB::getConnexion();
		}
		public function payerFrais($paiement){
			$str = 'INSERT INTO paiement VALUES(null,:id_inscription,:id_utilisateur,:montant,now(),:id_frais)';
			$prepare = $this->db->prepare($str);
			$prepare->execute(array('id_inscription'=>$paiement->getIdInscription(),
									'id_utilisateur'=>$paiement->getIdUtilisateur(),
									'montant' =>$paiement->getMontant(),
									'id_frais' =>$paiement->getIdFrais()));
			$prepare=$prepare->exeute();						
			if($prepare)
				return True;
			return False;
		}

		Public function payementRecent(){
			$str='SELECT eleve.matricule as matricule, eleve.nom,eleve.postnom, classe.nom_classe  as classe FROM  inscription
			   inner join (eleve ,paiement,classe) 
			   on( (eleve.matricule=inscription.mat_eleve  and inscription.id=paiement.id_inscription) and classe.id=inscription.id_classe)
			   GROUP by mat_eleve  HAVING COUNT(matricule) > 1 
			   ORDER by inscription.date DESC';
			$resultat=$this->db->query($str);
			return $resultat;
		}
		public function EleveNonEnOrdre($id)
    {
        $req = "SELECT * FROM (SELECT id_inscription, paiement.id_frais, matricule, nom, postnom FROM paiement 
        INNER JOIN inscription ON paiement.id_inscription = inscription.id
        INNER JOIN eleve ON eleve.matricule = inscription.mat_eleve
        WHERE inscription.id_classe = :id) AS l GROUP BY id_inscription HAVING COUNT(id_frais) <> (SELECT COUNT(id) AS i FROM frais )";
        $prepare = $this->db->prepare($req);
        $prepare->execute(array('id'=>$id));
        if($prepare != null)
        {
            return $prepare;
        } else {
            return false;
        }

    }
	}

?>