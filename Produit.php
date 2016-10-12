<?php
    require('connexion.php');
	//require('Categorie.php');
	
	Class Produit
	{
		private $ref;
		private $nom;
		private $quantite;
		private $prix;
		private $image;
		
		function __construct()
		{
			
		}
		
	    public function lisetProduit($id)
        {
			$sql="select * from Produit where Code_Cat=".$id;
            global $con;
            $res=$con->query($sql);
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
			    $exampleArray = array('id'=>$tab[0]." ",'libelle'=>$tab[1]." ",'quanite'=>$tab[2]." ",'prix'=>$tab[3]." ",'photo'=>$tab[4],);
			    $a1='./Picture/'.$exampleArray['photo'];
			    $x=$exampleArray['photo'];
			    echo '<script src="operation.js" type="text/javascript"></script>';
			    echo "<a href='http://localhost:88/stage/Picture/$x'>";
			    echo "<img src='$a1' style='width:350px; height:200px;' onclick='popup();' /></a> <br>";
			    echo '<table>';
			    echo '<tr>';
			    echo '<td>Réferance :<td>'.$exampleArray['id'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>Nom de Produit :<td>'.$exampleArray['libelle'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>Quantité :<td>'.$exampleArray['quanite'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>Prix :<td>'.$exampleArray['prix'] .'DT</td>';
			    echo '</tr>';
			    echo '</table>';
			}
		}
		
		public function lisetProduitPromotion()
        {
			$sql="select Ref_Produit,Designation,Quantite,Prix /2,Photo from produit ";
            global $con;
            $res=$con->query($sql);
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
			    $exampleArray = array('id'=>$tab[0]." ",'libelle'=>$tab[1]." ",'quanite'=>$tab[2]." ",'prix'=>$tab[3]." ",'photo'=>$tab[4],);
			    $a1='./Picture/'.$exampleArray['photo'];
			    $x=$exampleArray['photo'];
			    echo '<script src="operation.js" type="text/javascript"></script>';
			    echo "<a href='http://localhost:88/stage/Picture/$x'>";
			    echo "<img src='$a1' style='width:350px; height:200px;' onclick='popup();' /></a> <br>";
			    echo '<table>';
			    echo '<tr>';
			    echo '<td>Réferance :<td>'.$exampleArray['id'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>Nom de Produit :<td>'.$exampleArray['libelle'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>Quantité :<td>'.$exampleArray['quanite'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>Prix :<td>'.$exampleArray['prix'] .'DT</td>';
			    echo '</tr>';
			    echo '</table>';
			}
		}
	
	    public function rechercheNom($n)
	    {
			$sql="select * from Produit where Designation like '$n%'";
            global $con;
            $res=$con->query($sql);
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
			    echo '<center>';
			    $exampleArray = array('id'=>$tab[0]." ",'libelle'=>$tab[1]." ",'quanite'=>$tab[2]." ",'prix'=>$tab[3]." ",'photo'=>$tab[4],);
			    $a1='./Picture/'.$exampleArray['photo'];
			    $x=$exampleArray['photo'];
			    echo '<script src="operation.js" type="text/javascript"></script>';
			    echo "<a href='http://localhost:88/stage/Picture/$x'>";
			    echo "<img src='$a1' style='width:350px; height:200px;' onclick='popup();' /></a> <br>";
			    echo '<table>';
			    echo '<tr>';
			    echo '<td>'.$exampleArray['id'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>'.$exampleArray['libelle'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>'.$exampleArray['quanite'] .'</td>';
			    echo '</tr>';
			    echo '<tr>';
			    echo '<td>'.$exampleArray['prix'] .'</td>';
			    echo '</tr>';
				echo '<tr>';
				echo '<td>________</td><td>____________</td>';
				echo '</tr>';
			    echo '</table>';
				echo '</center>';
			}
			  
	    }
		
	    public function afficheNomOp()
	    {
		    $sql="select * from produit";
			global $con;
			$res=$con->query($sql);
			echo '<select name="a">';
			while($tab=$res->fetch(PDO::FETCH_NUM))
			{
				echo '<option>'.$tab[1].'</option>';
			}
			echo '</select>';
	    }
		
		public function ajouterProduit($ref,$nom,$quanite,$prix,$image,$codeCat)
		{
			$sql = "insert into Produit values(" . $ref . ",'" . $nom . "'," . $quanite . ",".$prix.",'".$image."',1,1,1,".$codeCat.",2016)";
			global $con;
			$res = $con->exec($sql);
			if ($res!= 0)
			{
				echo "<script>alert('insertion effectué avec succes')</script>";
			}
			else
			{
				echo "<script>alert('insertion echoueé')</script>";
			}
			
		}
		
		public function supprimerProduit($ref)
		{
			$sql = "delete from Produit where Ref_Produit=" . $ref;
			global $con;
			$res = $con->exec($sql);
			if ($res != 0)
			{
				echo "<script>alert('Cet élélemnt est déjà supprimé ')</script>";
			}
			else
			{
				echo "<script>alert('Suppression echoué')</script>";
			}
			header('location:GestionProduit.php');
		}
		
		public function afficheAll()
		{
			$sql="select * from Produit";
			global $con;
			$res=$con->query($sql);

			echo '<table border="1px">';
			echo '<th>Reference</th> <th>Nom de produits</th> <th>Quantite</th> <th>Prix</th> <th>Images</th> <th>SUPRIMER</th><th>Mettre à jour</th>';
			while($tab=$res->fetch(PDO::FETCH_NUM))
			{
				echo '<tr>';
				echo '<td>'.$tab[0].'</td>';
				echo '<td>'.$tab[1].'</td>';
				echo '<td>'.$tab[2].'</td>';
				echo '<td>'.$tab[3].'</td>';
				echo '<td>'.$tab[4].'</td>';
				echo '<td><a href="GestionProduit.php?ref='.$tab[0].'">Supprimer</a></td>';
				echo '<td><a href="ModifierProd.php?ref='.$tab[0].'">Modifier</a></td>';
				echo '</tr>';
            }
		}
		
		public function nombreProduit()
		{
			$sql="select * from Produit";
			global $con;
			$res=$con->query($sql);
			echo '<div class="container"><br>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
			$i=1;
			while($tab=$res->fetch(PDO::FETCH_NUM))
			{
				//echo $i;
				$i++;
			}
			echo '</ol>';
		}
		
		public function afficheDansSlide()
		{
			$sql="select * from Produit";
			global $con;
			$res=$con->query($sql);
			$i=0;
			while($tab=$res->fetch(PDO::FETCH_NUM))
            {
			    $exampleArray = array('id'=>$tab[0]." ",'libelle'=>$tab[1]." ",'quanite'=>$tab[2]." ",'prix'=>$tab[3]." ",'photo'=>$tab[4],);
			    $a1='./Picture/'.$exampleArray['photo'];
			    $x=$exampleArray['photo'];
				echo "<div class='item '>";
                    echo "<img src='Picture/$x' alt='Chania $i' width='500' height='400'>";
			        echo "<table>";
			            echo "<tr>";
			                echo '<td>Réferance :<td>'.$exampleArray['id'].' </td>';
			            echo "</tr>";
			            echo "<tr>";
			                echo '<td>Nom de Produit :<td>'.$exampleArray['libelle'].' </td>';
			            echo "</tr>";
			            echo "<tr>";
			                echo '<td>Quantité :<td>'.$exampleArray['quanite'].' </td>';
			            echo "</tr>";
			            echo "<tr>";
			                echo '<td>Prix :<td>'.$exampleArray['prix'].' DT</td>';
			            echo "</tr>";
			            echo "</table>";
                echo "</div>";
			    $i++;
			}
		
	    }
		
		public function affichePourPanier()
		{
			$sql="select * from Produit";
			global $con;
			$res=$con->query($sql);
			$i=0;
			while($tab=$res->fetch(PDO::FETCH_NUM))
            {
			    $exampleArray = array('id'=>$tab[0]." ",'libelle'=>$tab[1]." ",'quanite'=>$tab[2]." ",'prix'=>$tab[3]." ",'photo'=>$tab[4],);
			    $a1='./Picture/'.$exampleArray['photo'];
			    $x=$exampleArray['photo'];
				echo "<div class='item '>";
                    echo "<img src='Picture/$x' alt='Chania $i' width='500' height='400'>";
					echo"<center>";
			        echo "<table>";
			            echo "<tr>";
			                echo '<td>Réferance :<td>'.$exampleArray['id'].' </td>';
			            echo "</tr>";
			            echo "<tr>";
			                echo '<td>Nom de Produit :<td>'.$exampleArray['libelle'].' </td>';
			            echo "</tr>";
			            echo "<tr>";
			                echo '<td>Quantité :<td>'.$exampleArray['quanite'].' </td>';
			            echo "</tr>";
			            echo "<tr>";
			                echo '<td>Prix :<td>'.$exampleArray['prix'].' DT</td>';
			            echo "</tr>";
			            echo "</table>";
						echo '<form action="AcheterProduit.php?ref ='.$exampleArray['id'].'" method="POST">';
						echo "<input type='submit' value='Achter ce produits'/>";
						echo "</form>";
						echo "</center>";
                echo "</div>";
			    $i++;
			}
		
	    }

		public function afficherPourModifer($ref)
		{
			$sql="select * from Produit  where Ref_Produit=".$ref."" ;
			global $con;
			$res=$con->query($sql);
            while($tab=$res->fetch(PDO::FETCH_NUM)) 
			{
				echo '<table>';
				echo '<tr>';
				echo '<td>Reference :</td>';
				echo "<td><input name='ref' type='text' value=$tab[0]  /></td>";
				echo '</tr>';
				echo '<tr>';
				echo "<td>Nom de produit :</td>";
				echo "<td><input name='nomProd' type='text' value=$tab[1] </td>";
				echo "</tr>";
				echo '<tr>';
				echo'<td>Quantite</td>';
				echo "<td><input name='quantite' type='text' value=$tab[2] </td>";
				echo '</tr>';
				echo '<tr>';
				echo '<td>Prix en Dinar Tunisien</td>';
				echo "<td><input name='prix' type='text' value=$tab[3] </td>";
				echo "</table>";
				echo '<input type="submit" name="btModifier" value="Modifier"/>';

			}

		}

		public  function mettreAJourRef($refOld,$refNew)
		{
			$sql1 = "update	produit	set	Ref_Produit='" . $refNew . "'	where	Ref_Produit=" . $refOld;
			global $con;
			$res1 = $con->exec($sql1);
			if ($res1 != 0)
			{
				echo "<script>alert('Mettre à jour effectué de reference')</script>";
			} else
			{
				echo "<script>alert('Mettre à jour de nom echoué de reference')</script>";
			}
		}

		public function mettreAJourNomProd($ref,$nom)
		{
			$sql1 = "update	produit	set	Designation='" . $nom . "'	where	Ref_Produit=" . $ref;
			global $con;
			$res1 = $con->exec($sql1);
			if ($res1 != 0)
			{
				echo "<script>alert('Mettre à jour effectué de nom')</script>";
			} else
			{
				echo "<script>alert('Mettre à jour de nom echoué de nom')</script>";
			}
		}

		public function mettreAJourPrix($ref,$prix)
		{
			$sql1 = "update	produit	set	prix'" . $prix . "'	where	Ref_Produit=" . $ref;
			global $con;
			$res1 = $con->exec($sql1);
			if ($res1 != 0)
			{
				echo "<script>alert('Mettre à jour effectué du prix')</script>";
			} else
			{
				echo "<script>alert('Mettre à jour de nom echoué de prix')</script>";
			}

		}

		public function mettreAJourQuantite($ref,$quantite)
		{
			$sql1 = "update	produit	set	Quantite='" . $quantite . "'	where	Ref_Produit=" . $ref;
			global $con;
			$res1 = $con->exec($sql1);
			if ($res1 != 0)
			{
				echo "<script>alert('Mettre à jour effectué de quantite')</script>";
			} else
			{
				echo "<script>alert('Mettre à jour de nom echoué de quantite')</script>";
			}
		}
	}


//$p=new Produit();
//$p->mettreAJourPrix(3007,250)

?>