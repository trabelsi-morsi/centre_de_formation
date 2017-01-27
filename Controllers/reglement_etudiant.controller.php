<?php
include "Models/reglement_etudiant.class.php";
include "Models/inscription.class.php";
include "Models/etudiant.class.php";

//initialisation des attributs de l’objet
	 // parametre reglement_etudiant
	 $id_regl='';
	 $montant='';
	 $datee='';
	
//initialisation des attributs de l’objet inscription
	 $id_ins = '';
	 $id_grp = '';
	 $id_etd = '';
	 $prixfinal = '';
	 $remise='';

//initialisation des attributs de l’objet etudiant

	 $id_etdd='';
	 $cin='';
	 $nom='';
	 $prenom='';
	 $tel='';
	 $mail='';
	 $date_naiss='';
	 $photo='';
	 $pic='';

	 $inscri='';


//récuperation des valeurs des attributs de l’objet reglement_etudiant
	 if(isset($_REQUEST['id_regl']))
	 	$id_regl=$_REQUEST['id_regl'];	 

	 if(isset($_REQUEST['montant']))
	 	$montant=$_REQUEST['montant'];

	 if(isset($_REQUEST['datee']))
	 	$datee=$_REQUEST['datee'];


	  if(isset($_REQUEST['inscri']))
	 	$inscri=$_REQUEST['inscri'];

//récuperation des valeurs des attributs de l’objet inscription
	 if(isset($_REQUEST['id_ins']))
	 	$id_ins=$_REQUEST['id_ins'];	 

	 if(isset($_REQUEST['id_grp']))
	 	$id_grp=$_REQUEST['id_grp'];

	 if(isset($_REQUEST['id_etd']))
	 	$id_etd=$_REQUEST['id_etd'];

	 if(isset($_REQUEST['prixfinal']))
	 	$prixfinal=$_REQUEST['prixfinal'];

	 if(isset($_REQUEST['remise']))
	 	$remise=$_REQUEST['remise'];
//récuperation des valeurs des attributs de l’objet inscription

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
	     copy($_FILES['photo']['tmp_name'],"img/".$photo);
	}
	  
	  if(isset($_REQUEST['date_naiss']))
	 	$date_naiss=$_REQUEST['date_naiss'];

	  if(isset($_REQUEST['pic'])) $pic=$_REQUEST['pic'];
	 

//Instanciation de l’objet voiture
	$v=new reglement_etudiant($id_regl,$montant,$datee,$id_ins);
	$m=new inscription($id_ins,$id_grp,$id_etd,$prixfinal,$remise);
	$e=new etudiant($id_etd,$cin,$nom,$prenom,$tel,$mail,$date_naiss,$photo);
	switch($action)
		{
			Case 'ajout1' :  $variable=$m->liste($cnx);include "Views//reglement_etudiant/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx); Break;

			Case 'modif1' :  	$tab=$v->detail($cnx);  
								$variable=$m->liste($cnx); 
							 include "Views//reglement_etudiant/modif1.view.php"; Break;

			Case 'modif'  :if($v->getPhoto()==null) 
							{
								$v->setPhoto($pic);$v->edit($cnx);
							}else {$v->edit($cnx);}

			
			Case 'supp'   : $v->delete($cnx); Break;
			
			Case 'affich' : 
							$tab=$v->liste($cnx); //liste de tous les voitures avec leur modele
							include "Views//reglement_etudiant/list.view.php"; Break;

			Case 'somme'   : $var=$v->somme($cnx,$inscri); $var2=$m->detail2($cnx,$inscri);include "Views//reglement_etudiant/somme.view.php"; Break;
			

		}	 


?>