<!doctype html>
<?php
    require('Categorie.php');
	if(isset($_FILES['file']))
	{
		$name_file=$_FILES['file']['name'];
		$tmp_file=$_FILES['file']['tmp_name'];
		$local_image="Picture/";
		move_uploaded_file($tmp_file,$local_image.$name_file);
		$c=new Categorie(1,1,1);
		$x=$c->afficheId($_POST['a']);
		$p=new Produit();
		$p->ajouterProduit($_POST['ref'],$_POST['nom'],$_POST['quantite'],$_POST['prix'],$name_file,$x);
		header('location:GestionProduit.php');
		echo '<br>';
	}
?>
<html>
    <head>
	    <meta charset="UTF-8"/>
	</head>
	<body>
	    <form name="f" method="POST"  enctype="multipart/form-data">
		    <fieldset>
			    <div class="form-group">
				    <div class="col-md-8">
					    <input name="ref" placeholder="la réféerence" class="form-control" type="number" id="ref"/>
					</div>
				</div>
				<div class="form-group">
				    <div class="col-md-8">
					    <input name="nom" placeholder="Le nom de prduit" class="form-control" type="text" id="nom"/>
					</div>
				</div>
				<div class="form-group">
				    <div class="col-md-8">
					    <input name="quantite" placeholder="quantité" class="form-control" type="number" id="quantite"/>
					</div>
				</div>
				<div class="form-group">
				    <div class="col-md-8"><input name="prix" placeholder="prix" class="form-control" type="number" id="prix"/></div>
				</div>
				<div class="form-group">
				    <div class="col-md-8">
					    <input name="file" placeholder="Image" class="form-control" type="File" id="file"/>
					</div>
				</div>
				<div class="form-group">
				    <div class="col-md-8">
					    <?php
						    require_once('Categorie.php');
							$c=new Categorie(1,1,1);
							$c->afficheNomOp();
						?>
					</div>
				</div>
			    <div class="form-group">
				    <div class="col-md-offset-0 col-md-8" id="d">
					    <input name="b"  class="btn btn-success btn btn-success" type="submit" onclick="controllerChamp();"   id="envoyer"  value="Envoyer"/>
					</div>
				</div>
			</fieldset>
		</form>
	</body>
</html>