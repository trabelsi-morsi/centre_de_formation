<?php
include "Models/calendrier_groupe.class.php";
include "Models/salle.class.php";
include "Models/groupe.class.php";
include "Models/calendrier.class.php";

//initialisation des attributs de l’objet calendrier_groupe
	$id_cg = '';
	 $id_grp = '';
	 $id_cal = '';
	$id_salle = '';
	
	 //initialisation des attributs de l’objet salle
	
	$nom = '';
	
 //initialisation des attributs de l’objet groupe


$des_grp= '';
 $nbreheure= '';
$prixheure= '';
$fraisformateur= '';
$id_formation= '';
$id_formateur= '';



//initialisation des attributs de l’objet calendrier
	
	$datee= '';
	$heuredeb = '';
	$rechdate = '' ; 

//récuperation des valeurs des attributs de l’objet calendrier
	 

	 if(isset($_REQUEST['datee']))
	 	$datee=$_REQUEST['datee'];

	 if(isset($_REQUEST['heuredeb']))
	 	$heuredeb=$_REQUEST['heuredeb'];

	 if(isset($_REQUEST['rechdate']))
	 	$rechdate=$_REQUEST['rechdate'];
//récuperation des valeurs des attributs de l’objet  groupe 

		 

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

//récuperation des valeurs des attributs de l’objet salle 
	  

	 if(isset($_REQUEST['nom']))
	 	$nom=$_REQUEST['nom'];
	 

//récuperation des valeurs des attributs de l’objet calendrier_groupe
	 if(isset($_REQUEST['id_cg']))
	 	$id_cg=$_REQUEST['id_cg'];	 

	 if(isset($_REQUEST['id_grp']))
	 	$id_grp=$_REQUEST['id_grp'];

	 if(isset($_REQUEST['id_cal']))
	 	$id_cal=$_REQUEST['id_cal'];

	 if(isset($_REQUEST['id_salle']))
	 	$id_salle=$_REQUEST['id_salle'];


	  

//Instanciation de l’objet
	$v=new calendrier_groupe($id_cg,$id_grp,$id_cal,$id_salle);
	$f=new groupe($id_grp,$des_grp,$nbreheure,$prixheure,$fraisformateur,$id_formation,$id_formateur);
	$ff=new calendrier($id_cal,$datee,$heuredeb);
	$fff=new salle($id_salle,$nom); 
	switch($action)
		{
			Case 'ajout1' :  $groupes=$f->liste($cnx); 
							 $calendriers=$ff->liste($cnx);  
							 $salles=$fff->liste($cnx); 
							 include "Views//calendrier_groupe/ajout1.view.php"; Break;
			Case 'ajout'  :  $v->add($cnx); 
							 Break;
			Case 'modif1' :  $tab=$v->detail($cnx);
							 $groupes=$f->liste($cnx); 
							 $calendriers=$ff->liste($cnx);  
							 $salles=$fff->liste($cnx);   
							 include "Views//calendrier_groupe/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx); Break;
			
			Case 'supp'   : $v->delete($cnx);  Break;
			Case 'affich' : $tab=$v->liste($cnx); include "Views//calendrier_groupe/list.view.php"; Break;
			

		}	 
?>