<?php
	require_once('../models/structure/utilisateur.class.php');
	require_once('../models/dao/connexiondb.class.php');
	require_once('../models/dao/utlisateur.dao.php');
	require_once('../models/structure/nouvelle_connexion.php');

	if(isset($_POST['login'], $_POST['pwd'])) {
		$login = $_POST['login'];
		$pwd = $_POST['pwd'];

		$utilisat = new Nouvelle_connexion(0, $login, $pwd);
		$utilisateur = new UtilisateurDAO();

		$res = $utilisateur->seConnecter($utilisat);

		if($res) {
			//Créer une session

			session_start();
			$_SESSION['login'] = $login;

			header('Location: ../views/profil.php?login='.$_SESSION['login'] .'');
		} else {
			header('Location: ../views/index.php?error=3');
		}

	} else {
	
	}
?>
