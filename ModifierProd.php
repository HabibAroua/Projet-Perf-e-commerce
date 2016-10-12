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
                require_once('Produit.php');
                $p=new Produit();
                if (isset($_GET['ref']))
                {
                    $p->afficherPourModifer($_GET['ref']);
                    if((isset($_POST['ref']))&&(isset($_POST['nomProd']))&&(isset($_POST['quantite']))&&($_POST['prix']))
                    {
                        $p->mettreAJourRef($_GET['ref'],$_POST['ref']);
                        $p->mettreAJourNomProd($_GET['ref'],$_POST['nomProd']);
                        $p->mettreAJourNomProd($_GET['ref'],$_POST['quantite']);
                        $p->mettreAJourNomProd($_GET['ref'],250);
                    }
                }

            ?>


        </form>


    </body>
</html>