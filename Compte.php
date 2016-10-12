<?php
    require_once('connexion.php');
	
	class Compte
	{
		private $login;
		private $mot_passe;
		
		public function __construct($login,$mot_passe)
		{
			$this->login=$login;
			$this->mot_passe=$mot_passe;
		}
		
		public function getLogin()
		{
			return $this->login;
		}
		
		public function setLogin($login)
		{
			$this->login=$login;
		}
		
		public function getMot_passe()
		{
			return $this->mot_passe;
		}
		
		public function setMot_passe($mot_passe)
		{
			$this->mot_passe=$mot_passe;
		}
		
	}


?>