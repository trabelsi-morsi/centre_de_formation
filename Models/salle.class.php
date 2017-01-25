<?php
/**
* 
*/
class salle
{
	private $id_salle;
	private $nom;
	
	function __construct($id_salle,$nom) 
	{
		$this->id_salle=$id_salle;
		$this->nom=$nom;
		
	}

//CRUD

	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO salle (nom) VALUES (?)");

		$req->bindParam(1,$this->nom);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=salle&action=affich")</script>';
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE salle SET nom=? WHERE id_salle=?");
		$req->bindParam(1,$this->nom);
		$req->bindParam(2,$this->id_salle);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=salle&action=affich")</script>';

	}

	public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM salle WHERE id_salle=?");
		$req->bindParam(1,$this->id_salle);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=salle&action=affich")</script>';

	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM salle");
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM salle WHERE id_salle=?");
		$req->bindParam(1,$this->id_salle);
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}	

//Getters and Setters

		public function getId_salle(){
		return $this->id_salle;
	}

	public function setId_salle($id_salle){
		$this->id_salle = $id_salle;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	
}


?>