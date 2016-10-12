<!doctype html>
<html>
	<head>
		<title>Gestion des categories</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge"><meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basichello world exemple for bootstrap">
		<meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body background="pub.jpg">
	    <?php
		    require('Categorie.php');
		?>
		<div class="container">
		    <div class="jumbotron" style="background-color:#77B5E0">
			    <h1>Gestion des categories</h1>
			</div>
			<div class="row">
			    <div class="col-md-6">
				    <div class="alert alert-info" role="alert">Ajouter des Categorie</div>
				    <div class="jumbotron">
				        <form  name="login" action="GestionCategorie.php" role="form" class="form-horizontal" method="POST" accept-charset="utf-8">
					        <fieldset>
						        <div class="form-group">
							        <div class="col-md-8">
								        <input name="code" placeholder="le code de catégorie" class="form-control" type="number" id="code"/>
								    </div>
							    </div>
						        <div class="form-group">
							        <div class="col-md-8">
								        <input name="nom" placeholder="Le nom de cette catégorie" class="form-control" type="text" id="nomCat"/>
								    </div>
							    </div>
							    <div class="form-group">
							        <div class="col-md-8">
								        <textarea name="description"  placeholder="Description"></textarea>
								    </div>
							    </div>
							    <div class="form-group">
							        <div class="col-md-offset-0 col-md-8" id="d">
								        <input name="b"  class="btn btn-success btn btn-success" type="submit" onclick="controllerChamp();" id="envoyer" value="Envoyer"/>
								    </div>
							    </div>
						    </fieldset>
					    </form>
				    </div>
				</div>
				<div class="col-md-6">
				    <div class="alert alert-info" role="alert">Supprimer ou modifier des categories</div>
					<div class="jumbotron">
					<?php
					    //require('Categorie.php');
						$c1=new Categorie(1,1,1);
						$c1->afficheAll();
						if(isset($_GET['id']))
						{
							$c1->supprimer($_GET['id']);
							header('location:GestionCategorie.php');
						}
					?>
					<?php
					    if(isset($_POST['b']))
						{
							if ((isset($_POST['code'])) && (isset($_POST['nom'])) && (isset($_POST['description'])))
							{
								$c = new Categorie($_POST['code'], $_POST['nom'], $_POST['description']);
								$c->ajout();
								header('location:GestionCategorie.php');
							}
						}
					?>
					</div>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.min.js"/>
		<footer>
	        <div class="jumbotron" style="background-color:#77B5E0">
		        <center>
			        <h3>© 2016 Tous droits réservés.</h3>
		        </center>
		    </div>
	    </footer>
		
	</body>
</html>