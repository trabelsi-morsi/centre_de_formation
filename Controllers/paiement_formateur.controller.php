<?php
include "Models/paiement_formateur.class.php";
include "Models/groupe.class.php";
//initialisation des attributs de l’objet paiement_formateur
	 $id_pai= '';
	 $montant= '';
	 $datee= '';
	 
// initialisation des attributs de l'objet groupe	
	  $id_grp= '';
	$des_grp= '';
	 $nbreheure= '';
	$prixheure= '';
	$fraisformateur= '';
	$id_formation= '';
	$id_formateur= '';
	
	 $grp='';

	  if(isset($_REQUEST['grp']))
	 	$grp=$_REQUEST['grp'];

//récuperation des valeurs des attributs de l’objet paiement_formateur
	 if(isset($_REQUEST['id_pai']))
	 	$id_pai=$_REQUEST['id_pai'];	 

	 if(isset($_REQUEST['montant']))
	 	$montant=$_REQUEST['montant'];

	 if(isset($_REQUEST['datee']))
	 	$datee=$_REQUEST['datee'];


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
	
	$v=new paiement_formateur($id_pai,$montant,$datee,$id_grp);
	$m=new groupe($id_grp,$des_grp,$nbreheure,$prixheure,$fraisformateur,$id_formation,$id_formateur);
	switch($action)
		{
			Case 'ajout1' : $variable=$m->liste($cnx); 
							include "Views//paiement_formateur/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx);   Break;

			Case 'modif1' : $tab=$v->detail($cnx); 
						    $variable=$m->liste($cnx); 
						    include "Views//paiement_formateur/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx); 
							Break;
			
			Case 'supp'  : $v->delete($cnx);
							 Break;
			Case 'affich' : $tab=$v->liste($cnx);
							 include "Views//paiement_formateur/list.view.php"; Break;  
			 
			 Case 'somme' : $var=$v->somme($cnx,$grp);   $var2=$m->detail2($cnx,$grp); 
			 				 include "Views//paiement_formateur/somme.view.php"; Break;

	
		}	 

?>