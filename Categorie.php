<?php

    require_once('connexion.php');
    class Categorie
	{
		private $code;
		private $nom;
		private $description;
		
		function __construct($code,$nom,$description)
		{
			$this->code = $code;
			$this->nom = $nom;
			$this->description = $description;
		}
		
		
		public function ajout()
		{
			$sql = "insert into Categorie values(" . $this->code . ",'" . $this->nom . "','" . $this->description . "',2016)";
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
			echo $res;
		}
		
		public function mettreAJourCode($c,$n)
		{
			$sql1="update	categorie	set	code_cat='".$c."'	where	Code_Cat=".$n;
			global $con;
            $res1=$con->exec($sql1);
            if($res1!=0)
			{
				echo "<script>alert('Mettre à jour effectué de code')</script>";
			}
			else
			{
				echo "<script>alert('Mettre à jour de code echoué')</script>";
			}

		}

		public function mettreAJourNom($c,$n)
		{
			$sql1 = "update	categorie	set	nom_cat='" . $c . "'	where	Code_Cat=" . $n;

			global $con;

			$res1 = $con->exec($sql1);

			if ($res1 != 0)
			{
				echo "<script>alert('Mettre à jour effectué de nom')</script>";
			} else
			{
				echo "<script>alert('Mettre à jour de nom echoué')</script>";
			}
		}

		public function mettreAJourDescription($c,$n)
		{
			$sql1 = "update	categorie	set	Description='" . $c . "'	where	Code_Cat=" . $n;

			global $con;

			$res1 = $con->exec($sql1);

			if ($res1 != 0)
			{
				echo "<script>alert('Mettre à jour effectué de description')</script>";
			} else
			{
				echo "<script>alert('Mettre à jour de nom echoué de description')</script>";
			}
		}

		public function mettreAJour($code,$nom,$des,$id)
		{
		    $c=new Categorie(1,1,1);
			$c->mettreAJourCode($code,$id);
			$c->mettreAJourNom($nom,$id);
			$c->mettreAJourDescription($des,$id);
		}


		public function supprimer($id)
		{
			$sql = "delete from Categorie where Code_Cat=" . $id;
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
		}
		
		public function afficheNom()
		{
			$sql="select * from Categorie";
            global $con;
            $res=$con->query($sql);
            echo '<p style="color:red">Voici la lise des categorie </p>';
            echo '<table>';
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $exampleArray = array('code'=>$tab[0]." ",'nom'=>$tab[1]." ",'des'=>$tab[2]." ",);
			    echo '<tr>';
			    echo '<td><a href="index.php?idCat='.$exampleArray['code'].'">'.$exampleArray['nom'] .'</a></td>';
			    echo '</tr>';
			}
		    echo '</table>';
		}
		
		public function afficheNom1()
		{
			
	        $sql="select * from Categorie";
            global $con;
            $res=$con->query($sql);
            echo '<p style="color:red">Voici la lise des categorie </p>';
            echo '<table>';
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $exampleArray = array('code'=>$tab[0]." ",'nom'=>$tab[1]." ",'des'=>$tab[2]." ",);
			    echo '<tr>';
			    echo '<td><a href="indexEn.php?idCat='.$exampleArray['code'].'">'.$exampleArray['nom'] .'</a></td>';
			    echo '</tr>';
			}
		    echo '</table>';
		}

		public function afficheAll()
		{
			$sql="select * from categorie";
			global $con;
			$res=$con->query($sql);
			echo '<table border="1px">';
			echo '<th>Code</th><th>Nom de catégorie</th><th>Description</th><th>SUPRIMER</th><th>MODIFIER</th>';
			while($tab=$res->fetch(PDO::FETCH_NUM))
			{
				echo '<tr>';
				echo '<td>'.$tab[0].'</td>';
				echo '<td>'.$tab[1].'</td>';
				echo '<td>'.$tab[2].'</td>';
				echo '<td><a href="tT.php?id='.$tab[0].'">Supprimer</a></td>';
				echo '<td><a href="ModifierCat.php?id='.$tab[0].'">Modifier</a></td>';
            }
		}

		 public function afficheNomOp()
	    {
		    $sql="select * from Categorie";
			global $con;
			$res=$con->query($sql);
			echo '<select name="a" class="form-control">';
			while($tab=$res->fetch(PDO::FETCH_NUM))
			{
				echo '<option>'.$tab[1].'</option>';
			}
			echo '</select>';
	    }
		
		public function afficheId($n)
		{
			$sql="select * from Categorie  where Nom_Cat='".$n."'" ;
			global $con;
			$res=$con->query($sql);
			while($tab=$res->fetch(PDO::FETCH_NUM))
			{
				$r=$tab[0];
			}
			return $r;
		}
		
		public function afficherPourModifer($id)
		{
			$sql="select * from Categorie  where Code_Cat=".$id."" ;
			global $con;
			$res=$con->query($sql);

			while($tab=$res->fetch(PDO::FETCH_NUM)) {
				echo '<table>';
				echo '<tr>';
				echo '<td>Id de categorie :</td>';
				echo "<td><input name='code' type='text' value=$tab[0]  /></td>";
				echo '</tr>';
				echo '<tr>';
				echo "<td>Nom de categorie :</td>";
				echo "<td><input name='nomCat' type='text' value=$tab[1] </td>";
				echo "</tr>";
				echo "</table>";
				echo 'La description :';
				echo '<br>';
				echo "<td><textarea name='des'> $tab[2] </textarea></td>";
				echo '<br>';
				echo '<input type="submit" name="btModifier" value="Modifuer"/>';

			}
		}
	}

?>
