<?php
include "Models/inscription.class.php";
include "Models/etudiant.class.php";
include "Models/groupe.class.php";
//initialisation des attributs de l’objet inscription
	 $id_ins = '';
	 $id_grp = '';
	 $id_etd = '';
	 $prixfinal = '';
	 $remise='';
// initialisation des attributs de l'objet etudiant	
 	$id_etd='';
	 $cin='';
	 $nom='';
	 $prenom='';
	 $tel='';
	 $mail='';
	 $date_naiss='';
	 $photo='';
// initialisation des attributs de l'objet groupe	
	 $id_grp= '';
	 $des_grp= '';
	 $nbreheure= '';
	 $prixheure= '';
	 $fraisformateur= '';
	 $id_formation= '';
	 $id_formateur= '';
	 

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

//récuperation des valeurs des attributs de l’objet etudiant
	 if(isset($_REQUEST['id_etdd']))
	 	$id_etdd=$_REQUEST['id_etdd'];	 

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

	 if(isset($_REQUEST['date_naiss']))
	 	$date_naiss=$_REQUEST['date_naiss'];

	 

//récuperation des valeurs des attributs de l’objet groupe

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
//Instanciation de l’objet 
	$v=new inscription($id_ins,$id_grp,$id_etd,$prixfinal,$remise);
	$m=new etudiant($id_etd,$cin,$nom,$prenom,$tel,$mail,$date_naiss,$photo);
	$g=new groupe($id_grp,$des_grp,$nbreheure,$prixheure,$fraisformateur,$id_formation,$id_formateur);
	switch($action)
		{
			Case 'ajout1' : $variable=$m->liste($cnx); 
							$variable2=$g->liste($cnx); 
							include "Views//inscription/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx);   Break;

			Case 'modif1' : $tableau=$v->detail($cnx); 
						    $variable=$m->liste($cnx); 
						    $variable2=$g->liste($cnx); 
						    include "Views//inscription/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx); 
							Break;
			
			Case 'supp'  : $v->delete($cnx);
							 Break;
			Case 'affich' : $tab=$v->liste($cnx);
							 include "Views//inscription/list.view.php"; Break;
			

		}	 



?>