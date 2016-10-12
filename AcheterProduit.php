<!docatype html>
<html>
	<head>
		<title>Acheter Produit</title>
	    <meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basic hello world exemple for bootstrap">
		<meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>	
	</head>
	<body>
	    <script src="jquery.js"></script>
	    <script src="traitement.js"></script>
	    <script>
	        $(
		        function()
		        {
			        $("#e1").hide();
					$("#e1").css('color','red');
					$("#e2").hide();
					$("#e2").css('color','red');
					$("#e3").hide();
					$("#e3").css('color','red');
		        }
		    );
			
			//https://www.formget.com/form-submit-without-page-refreshing-jquery-php/
	    </script>
		<script>
			$(document).ready
			(
				function()
				{
					$("#bout1").on
					(
						'click',
						function(event)
						{
							var nom=document.getElementById("nom").value;
							var nombre=document.getElementById("nombre").value;
							var dateEx=document.getElementById("dateEx").value;
							if(nom=="")
							{
								$('#e1').show();
							}
							else
							{
								$('#e1').hide();
							}

							if(nombre=="")
							{
								$('#e2').show();
							}
							else
							{
								$("#e2").hide();
							}

							if(dateEx=="")
							{
								$('#e3').show();
							}
							else
							{
								$("#e3").hide();
							}

							if((nom=="")||(nombre=="")||(datEx==""))
							{
								var url = $(this).prop('href');
								//alert(url);
								$("#bout1").load(url);
								event.preventDefault();
								alert("L'achat effectué avec succés");
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
        <div class="jumbotron" "background-color:#77B5E0">
		    <div class="col-md-4">
			    <img src="exchange.jpg" style="right:10px; position:absolute; top:60px;"/>
			</div>
            <form action="AcheterProduit.php"  name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
			    <fieldset>
				    <legend>Carte bancaire : <img src="carte.bmp"/></legend>
				        <div class="form-group">
						    <div class="col-md-6">
							    <input name="nom" placeholder="Nom sur la carte" class="form-control" type="text" id="nom"/>
								<p class="Erreur1" id="e1">SVP saisir votre nom !</p>
						     </div>
					    </div>
					    <div class="form-group">
						    <div class="col-md-6">
							    <input name="nombre" placeholder="Num de la carte" class="form-control" type="number" id="nombre"/>
								<p class="Erreur1" id="e2">SVP saisir votre nombre !</p>
						    </div>
					    </div>
						<div class="form-group">
			                <div class="col-md-6">
					            <input name="dateEx" placeholder="Saissez la date d'expiration" class="form-control" type="datetime-local" id="dateEx"/>
								<p class="Erreur1" id="e3">SVP saisir la date d'expiration !</p>
					        </div>
				        </div>
						<div class="form-group">
			                <div class="col-md-6">
							    <table>
								    <tr>
									    <td style="width:20%">
					                        <input name="dateEx"  class="form-control" type="checkbox" id="dateEx"/>
										</td>
									    <td>
										    <h5>
											    Sauvegarder votre carte bancaire pour les achats futurs
											</h5>
										</td>
									</tr>
								</table>
					        </div>
				        </div>
						<div class="form-group">
			                <div class="col-md-6">
					            <select placeholder="Saisie votre pays" class="form-control">
								    <option>Tunisie</option>
									<option>Algérie</option>
									<option>Maroc</option>
									<option>France</option>
									<option>Italie</option>
									<option>Espagne</option>
									<option>Allemagne</option>
									<option>Portugal</option>
									<option>Turquie</option>
									<option>Egypte</option>
									<option>Japon</option>
									<option>Chine</option>
									<option>Coueé Du Sud</option>
									<option>Sénégale</option>
									<option>Angolla</option>
									<option>Qatar</option>
									<option>Caméroon</option>
									<option>Etat Unis</option>
								</select>
					        </div>
				        </div>
                        <div class="form-group" id="bout1" >
					        <div class="col-md-offset-0 col-md-8">
							    <input id="bout1"  class="btn btn-success btn btn-success" type="submit" value="Achter" name="btAcheter" />
						    </div>
					    </div>
			    </fieldset>		
		    </form>
		</div>
		<?php

		      
		?>
		
	</body>
</html>