<?php
include "Models/formateur.class.php";
include "Models/type.class.php";
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
	
// initialisation des attributs de l'objet type	
 	$id_typ = '';
	$des_type = '';
	 $type='';

//récuperation des valeurs des attributs de l’objet formateur
			
 if(isset($_REQUEST['id_formateur']))
	 	$id_formateur=$_REQUEST['id_formateur'];	 

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

	if(isset($_REQUEST['date_naiss']))
		 	$date_naiss=$_REQUEST['date_naiss'];

		 if( (isset($_FILES['photo']['tmp_name'])) && (!empty($_FILES['photo']['tmp_name'])) ) 
	     	{	
	     		$photo=$_FILES['photo']['name'];
	    		copy($_FILES['photo']['tmp_name'],"images/".$photo);
	    	}

		 if(isset($_REQUEST['fraisheure']))
		 	$fraisheure=$_REQUEST['fraisheure'];

		 if(isset($_REQUEST['id_type']))
		 	$id_type=$_REQUEST['id_type'];

		  if(isset($_REQUEST['type']))
		 	$type=$_REQUEST['type'];

//récuperation des valeurs des attributs de l’objet type
	 if(isset($_REQUEST['id_typ']))
	 	$id_typ=$_REQUEST['id_typ'];	 

	 if(isset($_REQUEST['des_type']))
	 	$des_type=$_REQUEST['des_type'];



//Instanciation de l’objet 
	$v=new formateur($id_formateur,$cin,$nom,$prenom,$tel,$mail,$date_naiss,$photo,$fraisheure,$id_type);
	$m=new type($id_typ,$des_type);
	switch($action)
		{
			Case 'ajout1' : $variable=$m->liste($cnx); 
							include "Views//formateur/ajout1.view.php"; Break;
							
			Case 'ajout'  : $v->add($cnx);   Break;

			Case 'modif1' :  	$tab=$v->detail($cnx);  // voiture à modifier
								$variable=$m->liste($cnx); // liste de tous les modeles
							
							 include "Views//formateur/modif1.view.php"; Break;

			Case 'modif'  : if (empty($_FILES['photo']['tmp_name'])) { $v->edit_s($cnx);} // modification sans photo
							else { $v->edit($cnx); }

							 Break;

			
			Case 'supp'  : $v->delete($cnx); 
							 Break;
			Case 'affich' : $tab=$v->liste($cnx); $tab2=$v->liste($cnx);
							 include "Views//formateur/list.view.php"; Break;


			Case 'affichtype' : if($type!=0) {$tab=$v->listetype($cnx,$type);   $tab2=$v->liste($cnx);}
									else {$tab=$v->liste($cnx);  $tab2=$v->liste($cnx);}
							 include "Views//formateur/list.view.php"; Break;

			Case "excel": 	if($type!=0) {$res=$v->listetype($cnx,$type); }
									else {$res=$v->liste($cnx);  }		
			
			include "Views/formateur/excel.view.php";			Break;
			

		}	 



?>