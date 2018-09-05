<?php
    session_start();
      require_once('../models/structure/connexiondb.class.php');
      require_once('../models/dao/classe.dao.php');
      require_once('../models/dao/anneescolaire.dao.php');
      require_once('../models/dao/utilisateur.dao.php');
      require_once('../models/dao/inscription.dao.php');
      require_once('../models/dao/eleve.dao.php');      
      require_once('../models/structure/inscription.class.php');

        if(isset($_POST['matricule'],$_POST['classe'])){

            $matricule = $_POST['matricule'];
            $elveDao=new EleveDAO();
            $res=$elveDao->checkMatriculeEleve($matricule);
            if($res){
            $utilisateurDao = new UtilisateurDAO();
             $anneescolaireDao = new AnneeScolaireDAO();
            $login = $_SESSION['login'];
            $classe = $_POST['classe'];
            
            $id_utilisateur = $utilisateurDao->getUtilisateurById($login);
            $id_annee_scolaire = $anneescolaireDao->getIdByAnneeScolaire();
            $inscription=new Inscription($matricule,$classe,$id_annee_scolaire,$id_utilisateur);
            $inscriptionDAO=new InscriptionDAO();
            $resultat=$inscriptionDAO->inscrireOldEleve($inscription);
            if($resultat)
                header('Location:..');
            }
            else
            header('Location:../views/reincrire.php?');



        }
        else{
            echo"erreur de data";
        }



?>