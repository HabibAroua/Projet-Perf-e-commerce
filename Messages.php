<!doctype html>
<html>
      <head>
           <title>Message</title>
           <meta charset="UTF-8"/>
           <meta http-equiv="X-UA-Compatible" content="IE-edge">
           <meta name="viewport" content="width-device,initial-scale=1">
           <meta name="description" content="A basic hello world exemple for bootstrap">
           <meta name="author" content="Habib">
      </head>
      <body background="pub.jpg">
           <script src="jquery.js"></script>
           <script src="traitement.js"></script>
           <div class="container">
               
                   <div class="jumbotron" style="background-color:#77B5E0">
                       <h1>Les Messages</h1>
                   </div>
				   <div class="jumbotron">
                   <div class="row">
                       <div class="col-md-12">
                        <?php
                           require_once('Message.php');
						   $v=new Message(1,1,1,1,1);
		                   $v->afficher();
                        ?>
                       </div>
					</div>
					</div>


                   <script src="js/bootstrap.min.js"/>








      </body>
</html>