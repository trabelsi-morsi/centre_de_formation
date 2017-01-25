<?php
/**
* 
*/
class calendrier
{
	private $id_cal;
	private $datee;
	private $heuredeb;

	function __construct($id_cal,$datee,$heuredeb)
	{
		$this->id_cal=$id_cal;
		$this->datee=$datee;
		$this->heuredeb=$heuredeb;
	}

//CRUD

	public function listedate($cnx,$rechdate)
	{
		$req=$cnx->prepare("SELECT * FROM calendrier WHERE datee=?");
		$req->bindParam(1,$rechdate);
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO calendrier(datee,heuredeb) VALUES (?,?)");
		$req->bindParam(2,$this->heuredeb);
		$req->bindParam(1,$this->datee);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=calendrier&action=affich")</script>';
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE calendrier SET datee=? ,heuredeb=?WHERE id_cal=?");
		$req->bindParam(1,$this->datee);
		$req->bindParam(2,$this->heuredeb);
		$req->bindParam(3,$this->id_cal);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=calendrier&action=affich")</script>';

	}

	public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM calendrier WHERE id_cal=?");
		$req->bindParam(1,$this->id_cal);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=calendrier&action=affich")</script>';


	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT *  FROM calendrier");
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM calendrier WHERE id_cal=?");
		$req->bindParam(1,$this->id_cal);
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}	

//Getters and Setters
	
		public function getId_cal(){
		return $this->id_cal;
	}

	public function setId_cal($id_cal){
		$this->id_cal = $id_cal;
	}

	public function getDate(){
		return $this->datee;
	}

	public function setDate($datee){
		$this->datee = $datee;
	}

	public function getHeuredeb(){
		return $this->heuredeb;
	}

	public function setHeuredeb($heuredeb){
		$this->heuredeb = $heuredeb;
	}
}


?>