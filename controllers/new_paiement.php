<?php
session_start();
require_once("../models/structure/connexiondb.class.php");
require_once("../models/structure/paiement.class.php");
require_once("../models/dao/paiement.dao.php");
require_once("../models/dao/inscription.dao.php");
if(isset($_POST['montant'],$_POST['id_frais'],$_POST['matricule'])){
 
    $montant=$_POST['montant'];
    $id_frais=$_POST['id_frais'];
    $matricule = $_POST['matricule'];
    $login=$_SESSION['login'];

    $inscriptionDAO = new InscriptionDAO();
    $id_inscrption = $inscriptionDAO->getIdInscription($matricule);

    $paiement =new Paiement(null,$id_inscrption,1,$montant,null,$id_frais);
    $paiement_frais=new PaiementDAO;
    $paiement_frais1=$paiement_frais->payerFrais($paiement);

    header('Location:../views/paiement.php');
}
else{
    echo $_POST['montant'].'  ';
    echo $_POST['id_frais'].'  ';
    echo $_POST['matricule'].'  ';
}
 
?>