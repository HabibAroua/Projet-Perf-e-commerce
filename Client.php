<?php
    require('connexion.php');
	require('user.php');
    class Client extends User
    {
        private $adresse;
        private $pays;

        public function __construct($adresse, $nom, $prenom, $pays)
        {
            $this->adresse = $adresse;
			parent ::__construct($nom,$prenom);
            $this->pays = $pays;
        }

        public function getAdresse()
        {
            return $this->adresse;
        }

        public function getNom()
        {
            return parent ::getNom();
        }

        public function getPrenom()
        {
            return parent :: getPrenom();
        }

        public function ajouterClient($nom,$prenom)
        {
            $sql = "insert into Client values('$this->adresse','$nom','$prenom','$this->pays')";
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
    //$c =new Client('Satomi.naroko.yahoo.jp','Satomi','Naroko','Japon');
	//$nom=$c->getNom();
	//$prenom=$c->getPrenom();
	//$c->ajouterClient($nom,$prenom);

?>