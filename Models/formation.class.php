<?php
/**
* 
*/
class formation
{
	private $id_formation;
	private $des_form;
	private $id_type;

	function __construct($id_formation,$des_form,$id_type)
	{
		$this->id_formation=$id_formation;
		$this->des_form=$des_form;
		$this->id_type=$id_type;
	}

//CRUD
	public function listetype($cnx,$type)
	{
		$req=$cnx->prepare("SELECT * FROM formation f , type t where f.id_type=t.id_type and  f.id_type=?");
		$req->bindParam(1,$type);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO formation(des_form,id_type) VALUES (?,?)");
		$req->bindParam(2,$this->id_type);
		$req->bindParam(1,$this->des_form);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=formation&action=affich")</script>';
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE formation SET des_form=? ,id_type=?WHERE id_formation=?");
		$req->bindParam(1,$this->des_form);
		$req->bindParam(2,$this->id_type);
		$req->bindParam(3,$this->id_formation);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=formation&action=affich")</script>';

	}

	public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM formation WHERE id_formation=?");
		$req->bindParam(1,$this->id_formation);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=formation&action=affich")</script>';


	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT *  FROM formation f , type t where f.id_type=t.id_type");
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM formation WHERE id_formation=?");
		$req->bindParam(1,$this->id_formation);
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}	

//Getters and Setters
	
		public function getId_formation(){
		return $this->id_formation;
	}

	public function setId_formation($id_formation){
		$this->id_formation = $id_formation;
	}

	public function getDes_form(){
		return $this->des_form;
	}

	public function setDes_form($des_form){
		$this->des_form = $des_form;
	}

	public function getId_type(){
		return $this->id_type;
	}

	public function setId_type($id_type){
		$this->id_type = $id_type;
	}
}


?>