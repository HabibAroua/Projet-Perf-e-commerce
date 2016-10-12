<!doctype html>
<html>
    <head>
	    <title>Contact</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basic hello world exemple for bootstrap">
		<meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
    <body onload="verif();" background="pub.jpg">
	    <script src="jquery.js" ></script>
		<script src="traitement.js">
		</script>
        <script>
		    $(document).ready
	        (
	            function()
                {
		            $("#envoyer").on
		            (
			            'click',
		                function(event) 
	                    {
				            var message=document.getElementById("message").value;
	                        var prenom=document.getElementById("prenom").value;
	                        var nom=document.getElementById("nom").value;
	                        var adresseMail=document.getElementById("adresseMail").value;
							if(nom=="")
				            {
				                $('#p1').show();	
				            }
				
		              		if(prenom=="")
				            {
					            $('#p2').show();
			            	}
				
			            	if(adresseMail=="")
				            {
					            $('#p3').show();
				            }
				
			              	if(message=="")
				            {
					            $('#p4').show();
				            }
	                        if((message=="")||(prenom=="")||(nom=="")||(adresseMail==""))
	                        {
                                var url = $(this).prop('href');
					            //alert(url);
                                $("#d").load(url);
                                event.preventDefault();
								alert("hello");   
				            }
							else
							{
							    alert("verification des champs effectué avec succes");	
								
							}
                        }
	                );
                }
	        );
	    </script>
	    
			
		<?php
		    session_start();?>
		
		<div class="container" style="background-color:#77B5E0">
		    <div class="jumbotron" style="background-color:#77B5E0">
				<h1>Contacter Nous</h1> 
           
            <ul class="nav nav-pills navbar">
			    <li><a href="index.php">Home</a></li>
				<li><a href="index.php" onclick="popup();">Selection</a></li>
				<li><a href="index.php?promo=1">Promotion</a></li>
				<li><a href="index.php?panier=1">Panier</a></li>
				<?php
				    if(isset($_session['ROLE_USER']))
					{
				?>
				<li><a href="">Gestion Catégorie</a></li>
				<li><a href="">Gestion produit</a></li>
				<?php
				    }
				?>
				<li class="active"><a href="">Contact</a></li>
				<li><a href="#null" onclick="javascript:open_infos();">Connexion</a></li>
				<li>
				    <form name="f1" action="Recherche.php" method="POST">
					    <div style="float:left">
						    <input type="search"id="recherche"  class="lsb" placeholder="Chercher produit" name="search" onkeydown="verif1();" onmouseover="verif2();"> 
							<!--<input type="submit" id="myBtn" value="Chercher"/> -->
							<button id="s">Search</button>
						</div>
					</form>
				</li>
			</ul>
			</div>
		</div>
		<div class="container" >
		    <div class="row">
			    <div class="col-xs-12">
				    <div class="main">
					    <div class="jumbotron">
						    <div class="row">
							    <div class="col-md-6">
								    <h2>Notre Localisation</h2>
									<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d89386.57138846202!2d5.375498677950645!3d45.563794899218095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x478b23f3706a8cfb%3A0x78f51e41c5c8580!2sCIT%2C+2+Place+Antonin+Dubost%2C+38110+La+Tour-du-Pin!3m2!1d45.5638163!2d5.445539!4m0!5e0!3m2!1sfr!2sfr!4v1470265446769" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="col-md-6">
									<div>
									    <?php
										    require('AjouterMessage.php');
										?>
									</div>
								</div>
			                </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div style="background-color:#77B5E0">
			    <center>
                    <h3>© 2016 Tous droits réservés.</h3>
				</center>
        </div>
		<script src="js/bootstrap.min.js"/>
		
    </body>
</html>