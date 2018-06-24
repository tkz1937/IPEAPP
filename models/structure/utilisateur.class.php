<?php
	
	 class Utilisateur
	 {
	 	private $id;
	 	private $login;
	 	private $nom_complet;
	 	private $mot_de_passe;
	 	private $tel;
	 	private $email;
	 	private $niveauAcces;
	 	public function __construct($id,$login,$nom_complet,$mot_de_passe,$tel,$email,$niveauAcces)
	 	{
	 		$this->id=$id;
	 		$this->login = $login;
	 		$this->nom_complet = $nom_complet;
	 		$this->mot_de_passe =$mot_de_passe;
	 		$this->tel = $tel;
	 		$this->email = $email;
	 		$this->niveauAcces = $niveauAcces;
	 	}
	 	public function getId(){
	 		return $this->id;
	 	}
	 	public function getLogin(){
	 		return $this->login;
	 	}
	 	public function getNomComplet(){
	 		return $this->nom_complet;
	 	}
	 	public function getMotDePasse(){
	 		return $this->mot_de_passe;
	 	}
	 	public function getTel(){
	 		return $this->tel;
	 	}
	 	public function getEmail(){
	 		return $this->email;
	 	}
	 	public function getNiveauAcces(){
	 		return $this->niveauAcces;
	 	}
	 } 
?>