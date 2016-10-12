<!doctype html>
<html>
    <head>
	    <title>Promotion</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-UTF-8">
		<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basic hello world exemple for bootstrap"><meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img 
			{
                width: 70%;
                margin: auto;
            }
        </style>
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
		<script src="jquery.js"></script>
		<script>
		   // $(function()
	        //{
		    //$('#p').hide();
			//}
			//);
		</script>
		<?php
		    session_start();
		?>
		<?php
		    require_once('connexion.php');
		?>
		<div class="container" >
		<div class="jumbotron" style="background-color:#77B5E0"><h1>Notre Promotion</h1> 
		    <div class="col-md-12">
				<!--<h1>Hello world</h1> -->
			</div>
			<ul class="nav nav-pills navbar">
			    <li><a href="index.php">Home</a></li>
				<li class="active"><a href="Promotion.php">Promotion</a></li>
				<li><a href="Panier.php">Panier</a></li>
				<li><a href="lireArticle.php">Article</a></li>
				<?php
				    if(isset($_session['ROLE_USER']))
					{
				?>
				<li><a href="GestionCategorie.php">Gestion Catégorie</a>
				</li><li><a href="GestionProduit.php">Gestion produit</a></li>
				<li><a href="Message.php">Message</a></li>
				<?php
				    }
				?>
				<li><a href="Inscription.php">Inscription</a></li>
				<li><a href="Contact.php">Contact</a></li>
				<li><a href="#null" onclick="javascript:open_infos();">Connexion</a></li>
				<li>
				    <form name="f1" action="Recherche.php" method="POST">
					    <div style="float:left">
						    <input type="search"id="recherche"  class="lsb" placeholder="Chercher produit" name="search" onkeydown="verif1();">
							<button id="s">Search</button>
						</div>
					</form>
				</li>
		<!--</div>-->
		    </ul>
		</div>
		<div class="container">
		    <div class="row">
			    <div class="col-xs-12">
				    <div class="main">
					    <div class="jumbotron">
						    <div class="row">
							    <div class="col-md-4">
								
								</div>
							    <div class="col-md-4">
								    <?php
									    require_once('Produit.php');
										$p=new Produit();
										$p->lisetProduitPromotion();
									
									?>
								</div>
							</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>