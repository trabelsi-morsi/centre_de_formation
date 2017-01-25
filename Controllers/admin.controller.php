<?php
include "Models/admin.class.php";
//initialisation des params voiture
$login="";
$pass="";
$id_admin="";

//recup des param externe
if(isset($_REQUEST['id_admin']))
$id_admin=$_REQUEST['id_admin'];

if(isset($_REQUEST['login']))
$login=$_REQUEST['login'];

if(isset($_REQUEST['pass']))
$pass=$_REQUEST['pass'];

//instanciation de la classe voiture
$adm=new admin($id_admin,$login,$pass);

switch($action){
//formulaire d'authentification
	case "login1": include "Views/Admin/admin.view.php";
	break;
	//exec authent
	case "login": $adm->login($cnx);
	break;
	//deconnexion
	case "logout": $adm->logout();
	break;
	case 'ajout1' : include "Views//Admin/ajout1.view.php"; Break;
	case 'ajout'  : $adm->add($cnx);   Break;
	case 'modif1' : $tab=$adm->detail($cnx); include "Views//Admin/modif1.view.php"; Break;
	case 'modif'  : $adm->edit($cnx);  Break;
			
	case 'supp'  : $adm->delete($cnx); Break;
	case 'affich' : $tab=$adm->liste($cnx); include "Views//Admin/list.view.php"; Break;

}
?>
