<?php
include "Models/formation.class.php";
include "Models/type.class.php";
//initialisation des attributs de l’objet formation
	 $id_formation = '';
	 $des_form = '';
	 $id_type = '';

// initialisation des attributs de l'objet type	
 	$id_typ = '';
	$des_type = '';
	 $type='';

//récuperation des valeurs des attributs de l’objet formation
	 if(isset($_REQUEST['id_formation']))
	 	$id_formation=$_REQUEST['id_formation'];	 

	 if(isset($_REQUEST['des_form']))
	 	$des_form=$_REQUEST['des_form'];

	 if(isset($_REQUEST['id_type']))
	 	$id_type=$_REQUEST['id_type'];

//récuperation des valeurs des attributs de l’objet type
	 	 

	 if(isset($_REQUEST['des_type']))
	 	$des_type=$_REQUEST['des_type'];

	  if(isset($_REQUEST['type']))
	 	$type=$_REQUEST['type'];

//Instanciation de l’objet 
	$v=new formation($id_formation,$des_form,$id_type);
	$m=new type($id_type,$des_type);
	switch($action)
		{
			Case 'ajout1' : $variable=$m->liste($cnx); 
							include "Views//formation/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx);   Break;

			Case 'modif1' : $tab=$v->detail($cnx); 
						    $variable=$m->liste($cnx); 
						    include "Views//formation/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx); 
							Break;
			
			Case 'supp'  : $v->delete($cnx);
							 Break;
			Case 'affich' : $tab=$v->liste($cnx); $tab2=$v->liste($cnx);
							 include "Views//formation/list.view.php"; Break;


			Case 'affichtype' : if($type!=0) {$tab=$v->listetype($cnx,$type);   $tab2=$v->liste($cnx);}
									else {$tab=$v->liste($cnx);  $tab2=$v->liste($cnx);}
							 include "Views//formation/list.view.php"; Break;
			
			

		}	 



?>