<?php


    require_once('../models/dao/eleve.dao.php');
    require_once('../models/structure/eleve.class.php');
    require_once('../models/structure/connexiondb.class.php');
    require_once('../models/dao/classe.dao.php');


    if(isset($_POST['nom'],$_POST['postnom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['lieu_naissance'],$_POST['genre'],$_POST['nationalite'],
    $_POST['adresse'],$_POST['responsable'],$_POST['adresse_responsable'],$_POST['tele_responsable'])){

        $classe = $_POST['classe'];
        $nom = $_POST['nom'];
        $postnom = $_POST['postnom'];
        $prenom = $_POST['prenom'];
        $genre = $_POST['genre'];
        $date_naissance = $_POST['date_naissance'];
        $lieu_naissance = $_POST['lieu_naissance'];
        $adresse = $_POST['adresse'];
        $responsable = $_POST['responsable'];
        $adresse_responsable = $_POST['adresse_responsable'];
        $tele_responsable = $_POST['tele_responsable'];
        $niveau = $_POST['niveau'];
        $nationalite = $_POST['nationalite'];
        $pieceJointe = "piece";

        $classeDao = new ClasseDAO();
        $id_classe = $classeDao->getIdByClasse($classe);
        $eleve = new Eleve(0,$nom,$postnom,$prenom,$genre,$adresse,$nationalite,$date_naissance,$lieu_naissance,$classe,$responsable,$tele_responsable,$adresse_responsable,$pieceJointe);
        $eleveDao = new EleveDAO();

        $Envoi = $eleveDao->inscrireNewEleve($eleve);

        if($Envoi){
            header('Location :../views/inscrire_nouveau_eleve.html');
        }
        else{
            echo 'Problème';
        }
   
    }
    else{
        $v ='echec';
        echo $v;
    }

?>