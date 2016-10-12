<?php
    require_once('connexion.php');
	require("Compte.php");
    class CompteClient extends Compte
    {
        private $email;

        public function __construct($login,$mot_passe,$email)
        {
			parent:: __construct($login,$mot_passe);
			$this->email=$email;
		}
		
		public function getEmail()
		{
			return $this->$email;
		}
		
		public function inscrire($login,$mot_passe,$mail)
		{
			$sql="insert into compteClient values('$login','$mot_passe','$mail')";
			global $con;
			$res=$con->exec($sql);
			if($res!=0)
			{
				echo "<script>alert('Client ajouté avec succes')</script>";
			}
			else
			{
				echo "<script>alert('echoué')</script>";
			}
			
		}
		
		public function afficher()
		{
			$sql="select * from CompteClient";
			        global $con;
			        $res=$con->query($sql);
					$i=0;
			        while($tab=$res->fetch(PDO::FETCH_NUM))
                    {
						$exampleArray[$i] = array('adresse'=>$tab[0]." ",'nom'=>$tab[1]." ",'prenom'=>$tab[2],);
					    $t0[$i]=$tab[0];
						$t1[$i]=$tab[1];
						$t2[$i]=$tab[2];
						
						$i++;
					}
					echo '<div>';
					echo '<h1>Les adherent</h1>';
					echo '<table border="1px">';
					echo '<tr>';
					echo '<th>Login</th>';
					echo '<th>Adresse</th>';
					echo '</tr>';
					for ($i=0;$i<count($t0);$i++)
					{
						echo '<tr>';
						echo '<td>'.$t0[$i].'</td>';
						echo '<td>'.$t2[$i].'</td>';
						echo '</tr>';
					}
					echo '</table>';
		}
	}
				

    
?>