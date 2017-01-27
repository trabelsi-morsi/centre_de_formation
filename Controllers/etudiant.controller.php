<?php
include "Models/etudiant.class.php";

 
//initialisation des attributs de l’objet
	 // parametre etudiant

	$id_etd='';
	 $cin='';
	 $nom='';
	 $prenom='';
	 $tel='';
	 $mail='';
	 $date_naiss='';
	 $photo='';
	 $pic='';



//récuperation des valeurs des attributs de l’objet etudiant
	 if(isset($_REQUEST['id_etd']))
	 	$id_etd=$_REQUEST['id_etd'];	 

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

	if( (isset($_FILES['photo']['tmp_name'])) && (!empty($_FILES['photo']['tmp_name'])) ) 
	{	
	     $photo=$_FILES['photo']['name'];
	     copy($_FILES['photo']['tmp_name'],"images/".$photo);
	}
	  
	  if(isset($_REQUEST['date_naiss']))
	 	$date_naiss=$_REQUEST['date_naiss'];

	  if(isset($_REQUEST['pic'])) $pic=$_REQUEST['pic'];



//Instanciation de l’objet voiture
	$v=new etudiant($id_etd,$cin,$nom,$prenom,$tel,$mail,$date_naiss,$photo);
	
	switch($action)
		{
			Case 'ajout1' :  include "Views//Etudiant/Ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx); Break;

			Case 'modif1' :  	 $tableau=$v->detail($cnx); // voiture à modifier
								 // liste de tous les modeles
							
							 include "Views//Etudiant/modif1.view.php"; Break;

			Case 'modif'  : if($v->getPhoto()==null) 
							{
								$v->setPhoto($pic);
								$v->edit($cnx); Break;
							}else {$v->edit($cnx);Break;}
			
			Case 'supp'   : $v->delete($cnx); Break;
			
			Case 'affich' : 
							$tab=$v->liste($cnx); //liste de tous les voitures avec leur modele
							include "Views//Etudiant/list.view.php"; Break;
			
			Case 'search' :  $v->recherche($cnx); Break;

		}	 


?>