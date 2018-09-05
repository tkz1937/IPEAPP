<?php

    session_start();
    require_once('../models/dao/eleve.dao.php');
    require_once('../models/structure/eleve.class.php');
    require_once('../models/structure/connexiondb.class.php');
    require_once('../models/dao/classe.dao.php');
    require_once('../models/dao/anneescolaire.dao.php');
    require_once('../models/dao/utilisateur.dao.php');
    require_once('../models/dao/inscription.dao.php');
    require_once('../models/structure/inscription.class.php');


    if(isset($_POST['nom'],$_POST['postnom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['lieu_naissance'],$_POST['genre'],$_POST['nationalite'],
    $_POST['adresse'],$_POST['responsable'],$_POST['adresse_responsable'],$_POST['tele_responsable'], $_POST['classe'])){


        if (isset($_FILES['piece']) AND $_FILES['piece']['error'] == 0)
        {
           /* if ($_FILES['photo_profil']['size'] <= 1000000)
             {*/
                 $infosfichier = pathinfo($_FILES['piece']['name']);
                $extension_upload = $infosfichier['extension'];
                

                
                    $login = $_SESSION['login'];
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
                    $nationalite = $_POST['nationalite'];
                    $pieceJointe="piece";

                $utilisateurDao = new UtilisateurDAO();
                $anneescolaireDao = new AnneeScolaireDAO();
                $classeDao = new ClasseDAO();
                $eleveDao = new EleveDAO();
                

                $eleve = new Eleve(0,$nom,$postnom,$prenom,$genre,$adresse,$nationalite,$date_naissance,$lieu_naissance,$classe,$responsable,$tele_responsable,$adresse_responsable,$pieceJointe);
    
                //$id_classe = $classeDao->getIdByClasse($classe);
                $matricule = $eleveDao->genererMatricule($eleve, $classe);
                $eleve->setMatricule($matricule);

                $extensions_autorisees = array('jpg','png', 'jpeg','pdf','zip');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    move_uploaded_file($_FILES['piece']['tmp_name'], '../views/static/Piece_jointes/' .basename($matricule.'_'.$prenom.'.'.$extension_upload));
                    $pieceJointe=  basename($matricule.'_'.$prenom.'.'.$extension_upload);
                    $eleve->setPiece_Jointe($matricule);
                      // récupération de l'id de l'utilisateur
                      $id_utilisateur = $utilisateurDao->getUtilisateurById($login);
                       //recuperation de l'id de la classe
                       
                      //reeupération de l'id année scolaire
                       $id_annee_scolaire = $anneescolaireDao->getIdByAnneeScolaire();

                       echo $matricule." " .$pieceJointe." ".$classe." ".$id_annee_scolaire;
            
                       $inscription = new Inscription($matricule, $classe,$id_annee_scolaire, $id_utilisateur);
                       $inscriptionDao = new InscriptionDAO();
                       $rep = $inscriptionDao->inscrireNewEleve($eleve,$inscription);

                       
                        //$Envoi = $eleveDao->inscrireNewEleve($eleve);
                        // $Envoi_inscription = $

                     if($rep){
                          header('Location:../views/index.php');
                     }
                     else{
                     echo 'Problème';
                     }

                    
                 }
        }
      
    
   
    }
    else{
       
        echo "Erreur";
    }

?>