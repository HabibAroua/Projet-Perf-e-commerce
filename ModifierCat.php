<!doctype html>
<html>
   <heaed>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-UTF-8">
       <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE-edge">
       <meta name="viewport" content="width-device,initial-scale=1">
       <meta name="description" content="A basic hello world exemple for bootstrap"><meta name="author" content="Habib">
   </heaed>
   <body>
       <form method="POST">
            <?php
                require_once('Categorie.php');
                $c=new Categorie(1,1,1);
                if (isset($_GET['id']))
                {
                    $c->afficherPourModifer($_GET['id']);
                    if((isset($_POST['code']))&&(isset($_POST['nomCat']))&&(isset($_POST['des'])))
                    {
                        $c->mettreAJourCode($_POST['code'], $_GET['id']);
                        $c->mettreAJourNom($_POST['nomCat'], $_GET['id']);
                        $c->mettreAJourDescription($_POST['des'], $_GET['id']);
                        header('location :ModifierCat.php?id='.$_GET['id']);
                    }
                }

            ?>
        </form>
   </body>
</html>