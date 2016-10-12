<!docatype html>
<html>
	<head>
		<title>Authentifier</title>
	    <meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basic hello world exemple for bootstrap">
		<meta name="author" content="Habib">
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>	
	</head>
	<body  background="pub.jpg">
	<script src="jquery.js"></script>
	<script src="traitement.js"></script>
	<script>
	    $(
		    function()
		    {
			    $("#Erreur").hide();
		    }
		);
	</script>
	<script>
	   
	
	</script>
	
	    <?php
		//    if(isset($_SESSION['ROLE_USER']))
			//{
		?>
		
		<?php
			//echo ($_SESSION['LOGIN']);
		?>
		<?php
			//}
		?>
	    <div class="jumbotron" "background-color:#77B5E0">
		    <div class="col-md-4">
			    <img src="image1.png" style="right:10px; position:absolute; top:60px;"/>
			</div>
			<div class="alert alert-danger" role="alert" id="Erreur">dangerous</div>
            <form action="indexEn.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
			    <fieldset>
				    <legend>Connexion</legend>
				        <div class="form-group">
						    <div class="col-md-6">
							    <input name="username" placeholder="Idenfiant" class="form-control" type="text" id="UserUsername"/>
						     </div>
					    </div>
					    <div class="form-group">
						    <div class="col-md-6">
							    <input name="password" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/>
						    </div>
					    </div>
					    <div class="form-group">
					        <div class="col-md-offset-0 col-md-8">
							    <input id="connexion"  class="btn btn-success btn btn-success" type="submit" value="Connexion"/ name="btConnexion" onclick="verifAuthentification();">
						    </div>
					    </div>
			    </fieldset>		
		    </form>
		</div>
		<?php
		       
		      
		?>
		
	</body>
</html>