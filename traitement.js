$(function()
	{
		$('#p1').css('color','red');
		$('#p2').css('color','red');
		$('#p3').css('color','red');
		$('#p4').css('color','red');
		$('#p1').hide();
		$('#p2').hide();
		$('#p3').hide();
		$('#p4').hide();
		$('#Erreur').hide();
	}
);

 function verif()
{
	var x=document.getElementById("recherche").value;
	document.getElementById("s").disabled = true;
}
			
function verif1()
{
	var x=document.getElementById("recherche").value;
	if(x!="")
	{
		document.getElementById("s").disabled = false;
    }
	else
	{
		document.getElementById("s").disabled = true;	
	}
}
			
function verif2()
{
	var x=document.getElementById("recherche").value;
	if(x=="")
	{
		document.getElementById("s").disabled = true;	
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
			
function effaceMessageInitial()
{
    document.getElementById("message").value="";	
}
			
function afficheMessage()
{
	document.getElementById("message").value="Votre Message";
}
			
function controllerChamp()
{
	var message=document.getElementById("message").value;
	var prenom=document.getElementById("prenom").value;
	var nom=document.getElementById("nom").value;
	var adresseMail=document.getElementById("adresseMail").value;
	if((message=="")||(prenom=="")||(nom=="")||(adresseMail==""))
	{
		alert("SVP remplis les chmaps");
		//window.location.assign("file:///C:/xampp/htdocs/Stage/Contact.php")
		return true;
	}
	else
    {
		return false;
	}
}

$("#connexion").click
(
    function()
    {
	    $("#Erreur").show();            
    }
);

//function myFunction()
//{
  //  location.reload();
//}



  
 