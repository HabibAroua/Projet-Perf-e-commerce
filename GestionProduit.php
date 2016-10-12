<!doctype html>
<html>
    <head>
	    <?php
		    require('Produit.php');
		?>
		<title>Gestion des Produits</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basichello world exemple for bootstrap">
		<meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body background="pub.jpg">
		<div class="container">
		    <div class="jumbotron" style="background-color:#77B5E0">
			    <center>
			        <h1>Gestion des Produits</h1>
				<center>
				<br>
				<a href="index1.php">Retourne</a>
			</div>
		<div class="row">
		    <div class="col-md-5">
			    <div class="alert alert-info" role="alert">Ajouter Produits</div>
				<div class="jumbotron">
				    <?php
				        require('exexAjoutProduit.php');
				    ?>
				</div>
			</div>
			<div class="col-md-7">
			    <div class="alert alert-info" role="alert">Supprimer Produits</div>
				<div class="jumbotron">
				   <div>
				    <?php
					    $p1=new Produit();
						$p1->afficheAll();
						if(isset($_GET['ref']))
						{
							$p1->supprimerProduit($_GET['ref']);
						}
					?>
					</div>
				</div>
			</div>
			
		</div>
		
		<script src="js/bootstrap.min.js"/>
	</body>
</html>