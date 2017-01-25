<?php
include "Models/calendrier.class.php";

//initialisation des attributs de l’objet calendrier
	$id_cal = '';
	$datee= '';
	$heuredeb = '';
	$rechdate = '' ; 

//récuperation des valeurs des attributs de l’objet calendrier
	 if(isset($_REQUEST['id_cal']))
	 	$id_cal=$_REQUEST['id_cal'];	 

	 if(isset($_REQUEST['datee']))
	 	$datee=$_REQUEST['datee'];

	 if(isset($_REQUEST['heuredeb']))
	 	$heuredeb=$_REQUEST['heuredeb'];

	 if(isset($_REQUEST['rechdate']))
	 	$rechdate=$_REQUEST['rechdate'];


//Instanciation de l’objet  calendrier
	$v=new calendrier($id_cal,$datee,$heuredeb);
	
	switch($action)
		{
			Case 'ajout1' :
							include "Views//calendrier/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx);   Break;

			Case 'modif1' : $tab=$v->detail($cnx); 
						    
						    include "Views//calendrier/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx); 
							Break;
			
			Case 'supp'  : $v->delete($cnx);
							 Break;
			Case 'affich' : $tab=$v->liste($cnx); $tab2=$v->liste($cnx);
							 include "Views//calendrier/list.view.php"; Break;

			Case 'affichdate' : if($rechdate!=0) {$tab=$v->listedate($cnx,$rechdate);   $tab2=$v->liste($cnx);}
									else {$tab=$v->liste($cnx);  $tab2=$v->liste($cnx);}
							 include "Views//calendrier/list.view.php"; Break;

			

		}	 



?>