<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 10/08/2016
 * Time: 20:30
 */

require('Categorie.php');
$c1=new Categorie(1,1,1);
$c1->afficheAll();
if(isset($_GET['id']))
{
    $c1->supprimer($_GET['id']);
    header('location:GestionCategorie.php');
}
//$c=new Categorie($_POST['code'],$_POST['nom'],$_POST['description']);
//if(isset($_POST['b']))
//{
  //  $c->ajout();
    //header("location :gestionCategorie.php");
//}
?>