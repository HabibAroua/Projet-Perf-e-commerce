<!doctype html>
<html> 
    <head>
        <meta charset="UTF-8"/>
	    <meta http-equiv="X-UA-Compatible" content="IE-edge">
	    <meta name="viewport" content="width-device,initial-scale=1">
	    <meta name="description" content="A basic hello world exemple for bootstrap">
	    <meta name="author" content="Habib">
	    <!-- bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<style>
	  
	</style>
	<script src="jquery.js"></script>
	<script>
	     $(function()
	    {
	        $('#e0').hide();
		});
	</script>
	
	<body>
        <?php
            require('connexion.php');
            class Message
          	{
		        private $adresse;
		        private $nom;
		        private $prenom;
		        private $message;
		        private $dateToday;
		        static $dbh;
		        public function __construct($adresse,$nom,$prenom,$message,$date_Today)
	        	{
			        if ((isset($adresse))&&(isset($nom))&&(isset($prenom))&&(isset($message))&&(isset($dateToday)))
		        	{
				        require('connexion.php');
			            $this->adresse=$adresse;
			            $this->nom=$nom;
			            $this->prenom=$prenom;
			            $this->message=$message;
				        $this->dateToday=$dateToday;
			        }
		        }      
		
		        public function ajouter($adresse,$nom,$prenom,$message,$date_Today)
		        {
					//if((isset($adresse))&&(isset($nom))&&(isset($prenom))&&(isset($message))&&(isset($date_Today)))
					//{
			            $sql="insert	into	Messages	values	('".$adresse."','".$nom."','".$prenom."','".$message."','".$date_Today."')";
				        global	$con;
			     	    $res=$con->exec($sql);
				        if($res!=0)	
						{
					        echo"<script>	alert('Ajout	effectué	avec	succès')</script>";
						}
				        else	
						{
					        "<script>	alert('problème	d\'ajout')</script>";
						}							
					//}
	            }
		
		        public function afficher()
		        {
			        $sql="select * from Messages";
			        global $con;
			        $res=$con->query($sql);
					$i=0;
			        while($tab=$res->fetch(PDO::FETCH_NUM))
                    {
						$exampleArray[$i] = array('adresse'=>$tab[0]." ",'nom'=>$tab[1]." ",'prenom'=>$tab[2]." ",'message'=>$tab[3]." ",'date_Today'=>$tab[4],);
					    $t0[$i]=$tab[0];
						$t1[$i]=$tab[1];
						$t2[$i]=$tab[2];
						$t3[$i]=$tab[3];
						$t4[$i]=$tab[4];
						$i++;
					}
					echo '<div>';
					echo '<h1>Les message</h1>';
					echo '<table border="1px">';
					echo '<tr>';
					echo '<th>Adresse mail</th>';
					echo '<th>Nom</th>';
					echo '<th>Prenom</th>';
					echo '<th>Message</th>';
					echo '<th>La date</th>';
					echo '</tr>';
					for ($i=0;$i<count($t0);$i++)
					{
						echo '<tr>';
						echo '<td>'.$t0[$i].'</td>';
						echo '<td>'.$t1[$i].'</td>';
						echo '<td>'.$t2[$i].'</td>';
						echo '<td>'.$t3[$i].'</td>';
						echo '<td>'.$t4[$i].'</td>';
						echo '</tr>';
						

					}
					echo '</table>';
				}
			}
        ?>
    </body>
</html>
