<?php
include "Models/groupe.class.php";
include "Models/formation.class.php";
include "Models/formateur.class.php";

//initialisation des attributs de l’objet groupe
 $id_grp= '';
$des_grp= '';
 $nbreheure= '';
$prixheure= '';
$fraisformateur= '';
$id_formationn= '';
$id_formateurr= '';
	
	 //initialisation des attributs de l’objet formation
	 $id_formation = '';
	 $des_form = '';
	 $id_type = '';



	 //initialisation des attributs de l’objet formateur
	$id_formateur= '';
	 $cin= '';
	$nom= '';
	$prenom= '';
	$tel= '';
	$mail= '';
	$date_naiss= '';
	$photo= '';
	$fraisheure= '';
	$id_type= '';

	 

//récuperation des valeurs des attributs de l’objet formation
	 if(isset($_REQUEST['id_formationn']))
	 	$id_formationn=$_REQUEST['id_formationn'];	 

	 if(isset($_REQUEST['des_form']))
	 	$des_form=$_REQUEST['des_form'];

	 if(isset($_REQUEST['id_type']))
	 	$id_type=$_REQUEST['id_type'];

//récuperation des valeurs des attributs de l’objet  groupe 

	 if(isset($_REQUEST['id_grp']))
	 	$id_grp=$_REQUEST['id_grp'];	 

	 if(isset($_REQUEST['des_grp']))
	 	$des_grp=$_REQUEST['des_grp'];

	 if(isset($_REQUEST['nbreheure']))
	 	$nbreheure=$_REQUEST['nbreheure'];

	  if(isset($_REQUEST['prixheure']))
	 	$prixheure=$_REQUEST['prixheure'];

	  if(isset($_REQUEST['fraisformateur']))
	 	$fraisformateur=$_REQUEST['fraisformateur'];

	  if(isset($_REQUEST['id_formation']))
	 	$id_formation=$_REQUEST['id_formation'];

	  if(isset($_REQUEST['id_formateur']))
	 	$id_formateur=$_REQUEST['id_formateur'];

//récuperation des valeurs des attributs de l’objet formateur
	 
	

	 if(isset($_REQUEST['id_formateurr']))
	 	$id_formateurr=$_REQUEST['id_formateurr'];	 

	 if(isset($_REQUEST['cin']))
	 	$cin=$_REQUEST['cin'];

	 if(isset($_REQUEST['nom']))
	 	$nom=$_REQUEST['nom'];

	  if(isset($_REQUEST['prenom']))
	 	$prenom=$_REQUEST['prenom'];

	  if(isset($_REQUEST['tel']))
	 	$tel=$_REQUEST['tel'];

	  if(isset($_REQUEST['mail']))
	 	$mail=$_REQUEST['mail'];

	  if(isset($_REQUEST['photo']))
	 	$photo=$_REQUEST['photo'];

		if(isset($_REQUEST['fraisheure']))
	 	$fraisheure=$_REQUEST['fraisheure'];

	 if(isset($_REQUEST['id_type']))
	 	$id_type=$_REQUEST['id_type'];

	  if(isset($_REQUEST['date_naiss']))
	 	$date_naiss=$_REQUEST['date_naiss'];
	  

//Instanciation de l’objet
	$v=new groupe($id_grp,$des_grp,$nbreheure,$prixheure,$fraisformateur,$id_formation,$id_formateur);
	$f=new formation($id_formationn,$des_form,$id_type);
	$ff=new formateur($id_formateurr,$cin,$nom,$prenom,$tel,$mail,$date_naiss,$photo,$fraisheure,$id_type);
	switch($action)
		{
			Case 'ajout1' :  $variable1=$f->liste($cnx); 
							 $variable2=$ff->liste($cnx);  
							 include "Views//groupe/ajout1.view.php"; Break;
			Case 'ajout'  :  $v->add($cnx); 
							 Break;
			Case 'modif1' :  $tab=$v->detail($cnx);
							 $variable1=$f->liste($cnx);
							 $variable2=$ff->liste($cnx);  
							 include "Views//groupe/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx); Break;
			
			Case 'supp'   : $v->delete($cnx);  Break;
			Case 'affich' : $tab=$v->liste($cnx); include "Views//groupe/list.view.php"; Break;
			

		}	 
?>