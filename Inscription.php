<!doctype html>
<html>
    <head>
        <title>E-commerce</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-UTF-8">
        <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device,initial-scale=1">
        <meta name="description" content="A basic hello world exemple for bootstrap"><meta name="author" content="Habib">
        <!-- bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
         $(
             function()
            {
                $('#er1').css('color','red');
                $('#er2').css('color','red');
                $('#er3').css('color','red');
                $('#er4').css('color','red');
				$('#er5').css('color','red');
				$('#er6').css('color','red');
				$('#er7').css('color','red');
                $('#er1').hide();
                $('#er2').hide();
                $('#er3').hide();
                $('#er4').hide();
				$('#er5').hide();
				$('#er6').hide();
				$('#er7').hide();

            }
         );

     </script>
     <script>
         $(document).ready
         (
             function()
             {
                 $("#inscrire").on
                 (
                     'click',
                     function(event)
                     {
                         var adresse=document.getElementById("mail").value;
                         var nom=document.getElementById("nom").value;
                         var prenom=document.getElementById("prenom").value;
                         var pays=document.getElementById("pays").value;
						 var login=document.getElementById("login").value;
						 var mot_passe=document.getElementById("mot_passe").value;
						 var conf=document.getElementById("conf").value;
                         //alert(adresse+" "+nom);
                         if(adresse=="")
                         {
                             $('#er1').show();
                         }
                         else
                         {
                             $('#er1').hide();
                         }

                         if(nom=="")
                         {
                             $('#er2').show();
                         }
                         else
                         {
                             $("#er2").hide();
                         }

                         if(prenom=="")
                         {
                             $('#er3').show();
                         }
                         else
                         {
                             $("#er3").hide();
                         }

                         if((nom=="")||(adresse=="")||(prenom=="")||(pays==""))
                         {
                             var url = $(this).prop('href');
                             //alert(url);
                             $("#inscrire").load(url);
                             event.preventDefault();
                             //alert("L'achat effectué avec succés");
                         }
                         else
                         {
                            // alert("verification des champs effectué avec succes");

                         }
                     }
                 );
             }
         );
     </script>
     <div class="container" >
         <div class="jumbotron" style="background-color:#77B5E0"><h1>Inscription</h1>
             <div class="col-md-12">
            <!--<h1>Hello world</h1> -->
        </div>
        <ul class="nav nav-pills navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php" onclick="popup();">Selection</a></li>
            <li><a href="index.php?promo=1">Promotion</a></li>
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
            <li class="active"><a href="Inscription.php">Inscription</a></li>
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
         <div class="container" style="background-color:#77B5E0">
             <div class="row" style="background-color:#77B5E0">
                 <div class="col-xs-12">
                     <div class="main">
                         <div class="jumbotron">
                             <div class="row">
                                 <div class="col-md-6">
                                     <form method="POST" action="Inscription.php">
                                         <center>
                                             <fieldset>
                                                 <legend><p style="color:blue">Inscription</p></legend>

                                                 <div class="form-group">
                                                     <div class="col-md-8">
                                                         <input name="adresseMail" placeholder="Votre adresse mail" class="form-control" type="mail" id="mail"/>
                                                         <br>
                                                     </div>
                                                     <p id="er1">Donner votre Adresse mail</p>
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="col-md-8">
                                                         <input name="nom" placeholder="Votre nom" class="form-control" type="text" id="nom"/>
                                                         <br>
                                                     </div>
                                                     <p id="er2">Donner votre nom</p>
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="col-md-8">
                                                         <input name="prenom" placeholder="Votre prénom" class="form-control" type="text" id="prenom"/>
                                                         <br>
                                                     </div>
                                                     <p id="er3">Donner votre prénom</p>
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="col-md-8">
                                                         <select class="form-control" id="pays" name="pays">
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
                                                         <br>
                                                     </div>
                                                     <p id="er4">Donner votre pays</p>
                                                 </div>
												 <div class="form-group">
                                                     <div class="col-md-8">
                                                         <input name="login" placeholder="Votre login" class="form-control" type="text" id="login"/>
                                                         <br>
                                                     </div>
                                                     <p id="er5">Donner votre login</p>
                                                 </div>
												 <div class="form-group">
                                                     <div class="col-md-8">
                                                         <input name="mot_passe" placeholder="Donner votre mot de passe" class="form-control" type="password" id="mot_passe"/>
                                                         <br>
                                                     </div>
                                                     <p id="er6">Donner votre mot de passe</p>
                                                 </div>
												 <div class="form-group">
                                                     <div class="col-md-8">
                                                         <input name="conf" placeholder="Confirmer votre mot de passe" class="form-control" type="text" id="conf"/>
                                                         <br>
                                                     </div>
                                                     <p id="er7">confirmer votre mot de passe</p>
                                                 </div>
                                                 <div class="form-group" id="d">
                                                     <div class="col-md-offset-0 col-md-8">
                                                         <input name="b"  class="btn btn-success btn btn-success" type="submit" id="inscrire"  value="Envoyer"/>
                                                     </div>
                                                 </div>
                                             </fieldset>
                                         </center>
                                     </form>
							         </div>
									 <div class="col-md-6">
									    <img src="inscription.jpg" style="height:500px; width:350px;"></img>
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
            if((isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['adresseMail']))&&(isset($_POST['pays']))&&(isset($_POST['login']))&&(isset($_POST['mot_passe']))&&(isset($_POST['conf'])))
            {
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $adresse=$_POST['adresseMail'];
                $pays=$_POST['pays'];
                require_once('Client.php');
                $c=new Client($adresse,$nom,$prenom,$pays);
	            $nom=$c->getNom();
	            $prenom=$c->getPrenom();
	            $c->ajouterClient($nom,$prenom);
				if($_POST['mot_passe']==$_POST['conf'])
				{
					require_once('CompteClient.php');
					$c= new CompteClient($_POST['login'],$_POST['mot_passe'],$adresse);
					$c->inscrire($_POST['login'],$_POST['mot_passe'],$adresse);
				}
				else
				{
					echo "<script>alert('bye bye')</script>";
				}

            }
        }
    ?>
  </html>