<?php 
	
	class CategorieDAO
	{
		private $db;
		function __construct()
		{
			$this->db=ConnexionDB::getConnexion();
		}
	}
?>