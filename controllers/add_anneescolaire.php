<?php
require_once("../models/structure/connexiondb.class.php");
require_once("../models/structure/anneescolaire.class.php");
require_once("../models/dao/anneescolaire.dao.php");
//
if(isset($_POST['debut'],$_POST['fin'])){
    
    $code = 0;
    extract($_POST);

    if(!(empty($debut) || empty($fin)) ){
        if(($fin - $debut) == 1 ){
            $daoannee = new AnneeScolaireDAO();
            $annee = new AnneeScolaire(null,$debut,$fin);
            if($daoannee ->anneeDontExist($annee))
                $daoannee -> configurer($annee);
            else
                $code = 4;
        }
        else
            $code = 3;
    }
    else 
        $code = 2;
}
else
    $code = 1;

    header('location:../views/configuration.php?code='.$code);
?>