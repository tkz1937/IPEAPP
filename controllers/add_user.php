<?php
    require_once('../models/structure/utilisateur.class.php');
    require_once('../models/dao/utilisateur.dao.php');
    require_once('../models/structure/connexiondb.class.php');

    if(isset($_POST['nom'],$_POST['email'],$_POST['pwd'],$_POST['pwdconfig'], $_POST['telephone'], $_POST['niveau'], $_POST['login']))
    {
        $nom =$_POST['nom'];
        $email = $_POST['email'];
        $pwd =$_POST['pwd'];
        $pwdconfig = $_POST['pwdconfig'];
        $niveau = $_POST['niveau'];
        $telephone = $_POST['telephone'];
        $login = $_POST['login'];

        if($pwd == $pwdconfig){
            $utilisateur = new Utilisateur(0,$login,$nom,$pwd,$telephone,$email,$niveau);
            $utilisateurDao = new UtilisateurDAO();
            $resultat = $utilisateurDao->ajouterUser($utilisateur);

            if($resultat){
                header('Location : ../views/index.html');
            }
            header('Location : ../views/enregistrer.html');
        }
    }


?>