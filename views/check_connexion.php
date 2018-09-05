<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		header('Location: inscrire_nouveau_eleve.php');
	}
?>