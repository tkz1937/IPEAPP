<?php
include_once("../models/dao/eleve.dao.php");
include_once("../models/dao/anneescolaire.dao.php");
include_once("../models/structure/eleve.class.php");
include_once("../models/structure/connexiondb.class.php");

if(isset($_POST['matricule'])){
    $matricule = $_POST['matricule'];
    $error =0;
    $Elevedao = new EleveDAO();
    $anneescolaireDAO = new AnneeScolaireDAO();
    $idAnneeScolaire  = $anneescolaireDAO ->getIdByAnneeScolaire();
    
    $donnee = $Elevedao ->getAllInformation($idAnneeScolaire,$matricule );

    if($donnee != null){
        $message= strtoupper("<span style='color:yellow'>".$donnee['nom'].' '.$donnee['postnom'].' '.$donnee['genre'].'</span>');
        echo $message;
        header('Location:../views/paiement.php?val='.$message);
    }
    else{
        $message= strtoupper("<span style='color:yellow'>AUCUN ELEVE TROUVE</span>'");
    header('Location:../views/paiement.php?val='.$message); 
    }
}
?>