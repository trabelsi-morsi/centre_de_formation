<?php
include "Models/salle.class.php";

//initialisation des attributs de l’objet
	$id_salle = '';
	$nom = '';
	

//récuperation des valeurs des attributs de l’objet
	 if(isset($_REQUEST['id_salle']))
	 	$id_salle=$_REQUEST['id_salle'];	 

	 if(isset($_REQUEST['nom']))
	 	$nom=$_REQUEST['nom'];


//Instanciation de l’objet
	$v=new salle($id_salle,$nom);

	switch($action)
		{
			Case 'ajout1' : include "Views//salle/ajout1.view.php"; Break;
			Case 'ajout'  : $v->add($cnx);   Break;
			Case 'modif1' : $tab=$v->detail($cnx); include "Views//salle/modif1.view.php"; Break;
			Case 'modif'  : $v->edit($cnx);  Break;
			
			Case 'supp'  : $v->delete($cnx); Break;
			Case 'affich' : $tab=$v->liste($cnx); include "Views//salle/list.view.php"; Break;
			

		}	 



?>