<?php
	require_once('../models/structure/utilisateur.class.php');
	require_once('../models/structure/connexiondb.class.php');
	require_once('../models/dao/utilisateur.dao.php');
	

	if(isset($_POST['login'],$_POST['email'] ,$_POST['pwd'])) {
		$login = $_POST['login'];
		$pwd = $_POST['pwd'];

		$utilisat = new Utilisateur(0,$login,null,$pwd,null,null,null);
		$utilisateur = new UtilisateurDAO();

		$res = $utilisateur->seConnecter($utilisat);

		if($res) {
			//Créer une session

			session_start();
			$_SESSION['login'] = $login;

			header('Location: ../views/inscrire_nouveau_eleve.html?login='.$_SESSION['login'] .'');
		} else {
			header('Location: ../views/index.html?error=3');
		}

	} else {
	
	}
?>
