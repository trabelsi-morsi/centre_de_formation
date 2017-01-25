<?php
/**
* 
*/
class calendrier_groupe 
{
	private $id_cg;
	private $id_grp;
	private $id_cal;
	private $id_salle;
	

	function __construct($id_cg,$id_grp,$id_cal,$id_salle)
	{
		$this->id_cg=$id_cg;
		$this->id_grp=$id_grp;
		$this->id_cal=$id_cal;
		$this->id_salle=$id_salle;
	}

	//	CRUD
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO calendrier_groupe(id_grp, id_cal,id_salle) VALUES (?,?,?)");
		$req->bindParam(1,$this->id_grp);
		$req->bindParam(2,$this->id_cal);
		$req->bindParam(3,$this->id_salle);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=calendrier_groupe&action=affich")</script>'; 
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE calendrier_groupe SET id_grp=? ,id_cal=?,id_salle=? WHERE id_cg=?");
		$req->bindParam(1,$this->id_grp);
		$req->bindParam(2,$this->id_cal);
		$req->bindParam(3,$this->id_salle);
		$req->bindParam(4,$this->id_cg);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=calendrier_groupe&action=affich")</script>'; 
		
	}

		public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM calendrier_groupe WHERE id_cg=?");
		$req->bindParam(1,$this->id_cg);
		$req->execute();
		echo'<script> document.location.replace("index.php?controller=calendrier_groupe&action=affich")</script>'; 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM calendrier_groupe cg , groupe g , calendrier c , salle s where cg.id_grp=g.id_grp and cg.id_cal=c.id_cal and cg.id_salle=s.id_salle");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM calendrier_groupe WHERE id_cg=?");
		$req->bindParam(1,$this->id_cg);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	public function getId_cg(){
		return $this->id_cg;
	}

	public function setId_cg($id_cg){
		$this->id_cg = $id_cg;
	}

	public function getId_grp(){
		return $this->id_grp;
	}

	public function setId_grp($id_grp){
		$this->id_grp = $id_grp;
	}

	public function getId_cal(){
		return $this->id_cal;
	}

	public function setId_cal($id_cal){
		$this->id_cal = $id_cal;
	}

	public function getId_salle(){
		return $this->id_salle;
	}

	public function setId_salle($id_salle){
		$this->id_salle = $id_salle;
	}
}
?>