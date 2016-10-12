<!doctype html >
<html lang="fr">
    <head>
	    <title>E-commerce</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basic hello world exemple for bootstrap">
		<meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
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
		    session_start();?>
		<?php
		    require_once('connexion.php');
		?>
		<div class="container">
		    <div class="jumbotron" style="background-color:#77B5E0">
			    <center>
			        <img src="pub.jpg" style="width:800px ; height:300px;" />
				</center>
				<!--<h1>Hello world</h1> -->

			</div>

			<ul class="nav nav-pills navbar">
			<!--<ul class="nav nav-tabs nav-justified"> -->
			    <li class="active"><a href="index.php">Home</a></li>
				<li><a href="index1.php" onclick="popup();">Selection</a></li>
				<li><a href="index1.php?promo=1">Promotion</a></li>
				<li><a href="index1.php?panier=1">Panier</a></li>
				<li><a href="GestionCategorie.php">Gestion Catégorie</a></li>
				<li><a href="GestionProduit.php">Gestion produit</a></li>
				<li><a href="Message.php">Message</a></li>
				<li><a href="Contact.php">Contact</a></li>
				<li><a href="#null" onclick="javascript:open_infos();">Ouvrir la Pop-Up</a></li>
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
							    <div class="col-md-5">
								    <?php
									    require_once('Categorie.php');
										$c =new Categorie(1,1,1);
										$c->afficheNom1();
										
									?>
								</div>
								<div class="col-md-7">
									<div>
									    <?php
										    if(isset($_SESSION['ROLE_USER']))
											{
										?>
										Authentification avec login
										<?php
										    echo ($_SESSION['LOGIN']);
										?>
										<?php
										    }
											    //require_once('produit.php');
												 if (isset($_GET['idCat']))
					                            { 
						                            require_once('Produit.php');
					                            	echo $_GET['idCat'];
													$p=new Produit();
													$p->lisetProduit($_GET['idCat']);
					                            }
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
		<footer>
            <div style="background-color:#77B5E0">
			    <center>
                    <h3>© 2016 Tous droits réservés.</h3>
				</center>
            </div>
        </footer>	
		<script src="js/bootstrap.min.js"/>	
        <?php
		    if(isset($_POST['username']))
			{
                session_start();
                $unset($_GET['index']);
			}
			
			
		?>	
	</body>
</html>