<?php
    require('connexion.php');
    require('user.php');
	class Admin extends User
	{
		private $id_admin;
		
		public function __construct($id_admin,$nom,$prenom)
		{
			$this->id_admin=$id_admin;
			parent:: __construct($nom,$prenom);
		}
		
		public function getNom()
		{
			return parent:: getNom();
		}
		
		public function getPrenom()
		{
			return parent:: getPrenom();
		}
		public function ajouter()
		{
			
			$sql = "insert into admin values('$this->id_admin','getNom()','getPrenom()')";
            global $con;
            $res = $con->exec($sql);
            if ($res != 0)
            {
                echo "<script>alert('Congrulation vous êtes adhérent')</script>";
            }
            else
            {
                echo "<script>alert('Inscription échoué')</script>";
            }
		}
	}
	

	



?>