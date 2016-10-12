<?php
   require('connexion.php');
	if ((isset($_POST['username']))&&(isset($_POST['password'])))
	{
	    $username=$_POST['username'];
	    $password=$_POST['password'];
	}
	require('CompteAdmin.php');
	$c=new CompteAdmin($username,$password,1);
	if(isset($_POST['btConnexion']))
	{
	    $c->connecter($username,$password);
	}
    		
?>