<?php
    require_once('connexion.php');
	require("Compte.php");
    class CompteAdmin extends Compte
    {
        private $id_Admin;

        public function __construct($login,$mot_passe,$id_Admin)
        {
			parent:: __construct($login,$mot_passe);
			$this->id_Admin=$id_Admin;
		}
		
		public function getId_Admin()
		{
			return $this->$id_Admin;
		}

        public function connecter($login,$mot_passe)
        {
            $sql="select * from CompteAdmin";
            global $con;
            $res=$con->query($sql);
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                if(($tab[0]==$login)&&($tab[1]==$mot_passe))
                {
					require('AfficheSession.php');
				}
				else
				{
					echo "<script>alert('SVP Verifer votre login et mot de passe !')</script>";
				    header("location:authentification.php");	
				}
            }
        }

    }
?>