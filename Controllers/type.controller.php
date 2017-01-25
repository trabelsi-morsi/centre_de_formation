<?php
include "Models/type.class.php";

//initialisation des attributs de l’objet
	 $id_type = '';
	 $des_type = '';
	

//récuperation des valeurs des attributs de l’objet
	 if(isset($_REQUEST['id_type']))
	 	$id_type=$_REQUEST['id_type'];	 

	 if(isset($_REQUEST['des_type']))
	 	$des_type=$_REQUEST['des_type'];


//Instanciation de l’objet
	$v=new type($id_type,$des_type);

	switch($action)
		{
			Case 'ajout1' : include "Views//type/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx);   Break;
			Case 'modif1' : $tab=$v->detail($cnx); include "Views//type/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx);  Break;
			
			Case 'supp'  : $v->delete($cnx); Break;
			Case 'affich' : $tab=$v->liste($cnx); include "Views//type/list.view.php"; Break;
			

		}	 



?>