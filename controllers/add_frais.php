<?php
require_once("../models/structure/connexiondb.class.php");
require_once("../models/structure/frais.class.php");
require_once("../models/dao/frais.dao.php");


extract($_POST);
$code =  0;
if(isset($classe,$montant,$motif,$categorie)){
    if(!(empty($montant)  || empty($montant) || empty($motif) || empty($categorie)) ){
        $frais = new Frais(null, $classe, $montant, $motif, $categorie);
        $daoFrais = new FraisDAO();

        if($daoFrais->fraisDontExist($frais)){
            $daoFrais->ajouterAutresFrais($frais);            
        }
        else
            $code = 3;
    }
    else 
        $code = 2;
}
else
    $code = 1;

header('location:../views/configuration.php?codef='.$code);
?>