<!doctype html>
<html>
    <head>
	    <title>L'ajout des article</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basic hello world exemple for bootstrap">
		<meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
	    <body onload="verif();" background="pub.jpg">
	    <script language="javascript">
		
		    function verif()
			{
				document.getElementById("s").disabled = true;
			}
			
			function verif1()
			{
				var x=document.getElementById("recherche").value;
				if(x=="")
				{
					document.getElementById("s").disabled = true;
				}
				else
				{
				    document.getElementById("s").disabled = false;	
				}
			}
			
			function open_infos()
            {
                window.open('authentification.php','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=300 , resizable=yes');
            }
			
			function popup()
            {
                var url = "http://localhost/application/Editer_utilisateur.php?";
                javascript:window.open(url, 'bonjours', 'toolbar=no,location=no,status=no,menubar=no,scrol lbars=yes,resizable=no,width=370,height=620');
            }
			
		</script>
		<?php
		    session_start(); //require('loding.php');?>
		<?php
		    require_once('connexion.php');
			
			
		?>
		<div class="container">
		    <div class="jumbotron" style="background-color:#77B5E0">
			    <center>
                    <h1>Ajouter des Articles</h1>
				</center>
				<!--<h1>Hello world</h1> -->

			</div>

			<ul class="nav nav-pills navbar">
			<!--<ul class="nav nav-tabs nav-justified"> -->
			    <li><a href="index.php">Home</a></li>
				<li class="active"><a href="AjouterArticle.php">Ajouter Article</a></li>
				<li><a href="GestionCategorie.php">Gestion Catégorie</a></li>
				<li><a href="GestionProduit.php">Gestion produit</a></li>
				<li><a href="Message.php">Message</a></li>
				<?php
				    if(isset($_session['ROLE_USER']))
					{
				?>
				<li><a href="Contact.php">Contact</a></li>
				<li><a href="#null" onclick="javascript:open_infos();">Ouvrir la Pop-Up</a></li>
				<?php
				        
					}
				?>
                <li>
				    <form name="f1" action="Recherche.php" method="POST">
					    <div style="float:left">
						    <input type="search"id="recherche"  class="lsb" placeholder="Chercher produit" name="search" onkeydown="verif1();"> 
							<!--<input type="submit" id="myBtn" value="Chercher"/> -->
							<button id="s">Search</button>
						</div>
					</form>
				</li>
				
			</ul>
		</div>
		<div class="container">
		    <div class="row">
			    <div class="col-xs-12">
				    <div class="main">
					    <div class="jumbotron">
						    <div class="row">
							    <div class="col-md-4">
								    <img src="article.jpg"></img>
								</div>
								<div class="col-md-4">
								    <form method="POST" >
									    <div class="form-group">
			                                <div class="col-md-10">
					                            <h2>Ajouter votre article</h2>
					                        </div>
					                    </div>
									    <div class="form-group">
			                                <div class="col-md-10">
					                            <input name="id" placeholder="id article" class="form-control" type="text" id="id"/>
					                        </div>
					                    </div>
										<div class="form-group">
			                                <div class="col-md-10">
					                            <input name="titre" placeholder="titre" class="form-control" type="text" id="titre"/>
					                        </div>
					                    </div>
										<div class="form-group">
			                                <div class="col-md-10">
					                            <textarea name="decription" placeholder="description" class="form-control" type="text" id="description">
												</textarea>
					                        </div>
					                    </div>
										<br>
										<div class="form-group" id="d">
					                        <div class="col-md-offset-0 col-md-8">
							                    <input name="b"  class="btn btn-success btn btn-success" type="submit" onclick="controllerChamp();"   id="envoyer"  value="Envoyer"/>
						                    </div>
					                    </div>
							        </form>
								</div>
								<div class="col-md-4">
								    <img src="produit.jpg"></img>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php
	    if(isset($_POST['b']))
		{
			//echo "<script>alert('Hello')</script>";
			if((isset($_POST['id']))&&(isset($_POST['titre']))&&(isset($_POST['decription'])))
			{
				$id=$_POST['id'];
				$titre=$_POST['titre'];
				$description=$_POST['decription'];
				if(($id=="")||($titre=="")||($description==""))
				{
					echo "<script>alert('Vérifier les champs')</script>";
				}
				else
				{
					require_once('Article.php');
				    $ar=new Article($id,$titre,$description);
	                $ar->ajouterArticle($id,$titre,$description);
	                //$ar->afficherArticle();
				}
			}
		}
	?>
</html>