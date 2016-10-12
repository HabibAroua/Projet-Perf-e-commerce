<!doctype html>
<html>
    <head>
	
	
	</head>
	    <?php
		    require('connexion.php');
		?>
		<?php
       	if(isset($_POST['b']))
		{
			$today = date("F j, Y, g:i a"); 
			if((isset($_POST['adresseMail']))&&(isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['message']))&&(isset($today)))
			{
			
			   /* $sql="insert	into	Visiteur	values	('".$_POST['adresseMail']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['message']."','".$today."')";
				global	$con;
			    $res=$con->exec($sql);
				if($res!=0)	
				{
					echo"<script>	alert('Ajout	effectué	avec	succès')</script>";
				}
				else	
				{
					echo "<script>	alert('problème	d\'ajout')</script>";
				}	
*/				
			
			require_once('Message.php');
				$m=new Message($_POST['adresseMail'],$_POST['nom'],$_POST['prenom'],$_POST['message'],$today);
				$m->ajouter($_POST['adresseMail'],$_POST['nom'],$_POST['prenom'],$_POST['message'],$today);
			}
		}
	    ?>
	<body>
	    <form  name="login" action="Contact.php" role="form" class="form-horizontal" method="POST" accept-charset="utf-8">
			<fieldset>
				<legend>Contacter nous</legend>
				<div class="form-group">
			        <div class="col-md-6">
					    <input name="nom" placeholder="Votre nom" class="form-control" type="text" id="nom"/>
					</div>
					<p id="p1">Donner votre nom</p>
				</div>
			    <div class="form-group">
				     <div class="col-md-6">
							    <input name="prenom" placeholder="Votre prénom" class="form-control" type="text" id="prenom"/>
						    </div>
					<p id="p2">Donner votre prénom</p>
					     </div>
			             <div class="form-group">
						        <div class="col-md-6">
							        <input name="adresseMail" placeholder="Votre E-Mail" class="form-control" type="email" id="adresseMail"/>
						        </div>
				    <p id="p3">Donner votre email</p>
					    </div>
						<div class="form-group">
						    <div class="col-md-6">
							    <textarea id="message" name="message" onfocus="effaceMessageInitial();" style="width:245px ; height:200px;">Votre Message</textarea>
						    </div>
				    <p id="p4">Rédiger votre message</p>
					    </div>
						<div class="form-group" id="d">
					        <div class="col-md-offset-0 col-md-8">
							    <input name="b"  class="btn btn-success btn btn-success" type="submit" onclick="controllerChamp();"   id="envoyer"  value="Envoyer"/>
						    </div>
					    </div>
		    </fieldset>		
		</form>
	
	</body>
</html>