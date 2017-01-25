<?php
class type
{
	private $id_type;
    private $des_type;
    
function __construct($id_type,$des_type) 
	{
		$this->id_type=$id_type;
		$this->des_type=$des_type;
		
	}

//CRUD

	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO type (des_type) VALUES (?)");

		$req->bindParam(1,$this->des_type);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=type&action=affich")</script>';
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE type SET des_type=? WHERE id_type=?");
		$req->bindParam(1,$this->des_type);
		$req->bindParam(2,$this->id_type);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=type&action=affich")</script>';

	}

	public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM type WHERE id_type=?");
		$req->bindParam(1,$this->id_type);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=type&action=affich")</script>';

	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM type");
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM type WHERE id_type=?");
		$req->bindParam(1,$this->id_type);
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}	




//GETTERS AND SETTERS
    public function getId_type(){
		return $this->id_type;
	}

	public function setId_type($id_type){
		$this->id_type = $id_type;
	}

	public function getDes_type(){
		return $this->des_type;
	}

	public function setDes_type($des_type){
		$this->des_type = $des_type;
	}

}

?>