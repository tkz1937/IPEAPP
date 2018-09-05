<?php
    require_once('../models/structure/classe.class.php');
    require_once('../models/dao/classe.dao.php');
    require_once('../models/structure/connexiondb.class.php');

    if(isset($_POST['intitule'], $_POST['niveau'],$_POST['nbre_place']))
    {
        $intitule = $_POST['intitule'];
        $niveau = $_POST['niveau'];
        $nbre_place = $_POST['nbre_place'];

        $classe = new Classe(0,$intitule,$niveau,$nbre_place,null);
        $classeDao = new ClasseDAO();
        $resultat = $classeDao->ajouterClasse($classe);

        if($resultat)
            header('Location:../views/ajouter_classe.php');
    }
    


?>