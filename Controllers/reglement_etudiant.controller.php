<?php
include "Models/reglement_etudiant.class.php";
include "Models/type.class.php";

//initialisation des attributs de l’objet
	 // parametre reglement_etudiant
	 $id_reg='';
	 $montant='';
	 $datee='';
	 $id_insc='';
//initialisation des attributs de l’objet inscription
	 $id_ins = '';
	 $id_grp = '';
	 $id_etd = '';
	 $prixfinal = '';
	 $remise='';


//récuperation des valeurs des attributs de l’objet reglement_etudiant
	 if(isset($_REQUEST['id_reg']))
	 	$id_reg=$_REQUEST['id_reg'];	 

	 if(isset($_REQUEST['montant']))
	 	$montant=$_REQUEST['montant'];

	 if(isset($_REQUEST['datee']))
	 	$datee=$_REQUEST['datee'];

	  if(isset($_REQUEST['id_insc']))
	 	$id_insc=$_REQUEST['id_insc'];

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

	  


//Instanciation de l’objet voiture
	$v=new reglement_etudiant($id_reg,$montant,$datee,$id_insc);
	$m=new inscription($id_ins,$id_grp,$id_etd,$prixfinal,$remise);
	switch($action)
		{
			Case 'ajout1' :  $variable=$m->liste($cnx); include "Views//reglement_etudiant/ajout1.view.php"; Break;
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
			

		}	 


?>