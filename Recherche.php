<!doctype html>
<html>
    <head>
        <title>Recherche</title>
	    <meta charset="UTF-8"/>
	    <meta http-equiv="X-UA-Compatible" content="IE-edge">
	    <meta name="viewport" content="width-device,initial-scale=1">
	    <meta name="description" content="A basic hello world exemple for bootstrap">
	    <meta name="author" content="Habib">
	    <!-- bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body background="pub.jpg">
	<div class="container">

        <div class="jumbotron" style="background-color:#77B5E0">
            <h1>Recherche des Produit</h1>
            <?php
                require_once('Produit.php');
	            echo 'Vous tapeez  :'.$_POST['search'].'<br>' ;
		    ?>
		    <div class="jumbotron">
		        <?php
		            $x=$_POST['search'];
		            if(isset($x))
			        $p=new Produit();
	                $p->rechercheNom($x);
		        ?>
		    </div>
		</div>
		<div style="background-color:#77B5E0">
			<center>
                <h3>© 2016 Tous droits réservés.</h3>
			</center>
        </div>
	</body>
</html>