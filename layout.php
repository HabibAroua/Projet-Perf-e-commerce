<!doctype html>
<?php
	if(isset($_POST['b1']))
	{
		echo '<script> alert("Euro") </script>';
	}
	else
	{
		if(isset($_POST['b2']))
		{
			echo '<script> alert("Yen") </script>';
		}
		else
		{
			if(isset($_POST['b3']))
			{
				echo '<script> alert("Dollar") </script>';

			}
		}
	}
	
		
	?>
<html>
    <head>
	    <title>Test</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device,initial-scale=1">
		<meta name="description" content="A basic hello world exemple for bootstrap">
		<meta name="author" content="Habib"><!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
	
	    <form name="f1" action="layout.php" method="POST">
		    <div class="container">
		        <ul class="nav nav-pills navbar">
		        <!--<ul class="nav nav-tabs nav-justified"> -->
		            <li class="active"><a href="">Home</a></li>
				    <li><a href="About.html">About</a></li>
				    <li><a href="">Contact</a></li>
				    <div class="jumbotron">
					<script src="jquery.js" />
				        <h1 id="ex">Finance Blog</h1>
					    <p>Welcome to my finance Blog</p>
				    </div>
				<div class="jumbotron">
				    <div class="row">
					    <div class="col-md-6">please select a currency<br>
						    <button type="submit" id="btn1" name="b1" class="btn-default btn-lg">
							<span class="glyphicon-euro"></span>Euro</button>
							<button type="submit" name="b2" class="btn-default btn-lg">
							<span class="glyphicon-yen"></span>Yen</button>
							<button type="submit" name="b3" class="btn-default btn-lg">
							<span class="glyphicon glyphicon-usd"></span>Dollar</button>
						</div>
						<div class="col-md-6">
						    <div class="alert alert-success" role="alert">you suessful</div>
							<div class="alert alert-info" role="alert">infrmation</div>
							<div class="alert alert-danger" role="alert">dangerous</div>
							<div class="alert alert-warning" role="alert">warning</div>
						</div>
					</div>
				</div>
				<script src="js/bootstrap.min.js"/>
				
				<script>
				    $( "#ex" ).hide();
				</script>
		</form>
			
	</body>

</html>
	
	   