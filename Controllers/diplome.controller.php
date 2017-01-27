<?php
include "Models/diplome.class.php";
include "Models/inscription.class.php";

//initialisation des attributs de l’objet diplome
	$id_dip = '';
	//$id_inss = '';
	$datee = '';
	$mention = '';
	$score = '';
 

//initialisation des attributs de l’objet diplome inscription

	$id_ins = '';
	 $id_grp = '';
	 $id_etd = '';
	 $prixfinal = '';
	 $remise='';
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

//récuperation des valeurs des attributs de l’objet diplome
	 if(isset($_REQUEST['id_dip']))
	 	$id_dip=$_REQUEST['id_dip'];	 

	// if(isset($_REQUEST['id_inss']))
	 //	$id_ins=$_REQUEST['id_inss'];

	 if(isset($_REQUEST['datee']))
	 	$datee=$_REQUEST['datee'];

	 if(isset($_REQUEST['mention']))
	 	$mention=$_REQUEST['mention'];

	 if(isset($_REQUEST['score']))
	 	$score=$_REQUEST['score'];





//Instanciation de l’objet 
	$v=new diplome($id_dip,$id_ins,$datee,$mention,$score);
	$m=new inscription($id_ins,$id_grp,$id_etd,$prixfinal,$remise);
	switch($action)
		{
			Case 'ajout1' : $variable=$m->liste($cnx); 
							include "Views//diplome/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx);   Break;

			Case 'modif1' : $tab=$v->detail($cnx); 
						    $variable=$m->liste($cnx); 
						    include "Views//diplome/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx); 
							Break;
			
			Case 'supp'  : $v->delete($cnx);
							 Break;
			Case 'affich' : $tab=$v->liste($cnx);
							 include "Views//diplome/list.view.php"; Break;
			

		}	 



?> 