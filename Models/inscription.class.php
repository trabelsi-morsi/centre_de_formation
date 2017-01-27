<?php
/**
* 
*/
class inscription 
{
	private $id_ins;
	private $id_grp;
	private $id_etd;
	private $prixfinal;
	private $remise;

	function __construct($id_ins,$id_grp,$id_etd,$prixfinal,$remise)
	{
		$this->id_ins=$id_ins;
		$this->id_grp=$id_grp;
		$this->id_etd=$id_etd;
		$this->prixfinal=$prixfinal;
		$this->remise=$remise;
	}

	//	CRUD
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO inscription(id_grp, id_etd,prixfinal,remise) VALUES (?,?,?,?)");
		$req->bindParam(1,$this->id_grp);
		$req->bindParam(2,$this->id_etd);
		$req->bindParam(3,$this->prixfinal);
		$req->bindParam(4,$this->remise);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=inscription&action=affich")</script>'; 
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE inscription SET id_grp=? ,id_etd=?,prixfinal=?,remise=? WHERE id_ins=?");
		$req->bindParam(1,$this->id_grp);
		$req->bindParam(2,$this->id_etd);
		$req->bindParam(3,$this->prixfinal);
		$req->bindParam(4,$this->remise);
		$req->bindParam(5,$this->id_ins);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=inscription&action=affich")</script>'; 
		
	}

		public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM inscription WHERE id_ins=?");
		$req->bindParam(1,$this->id_ins);
		$req->execute();
		echo'<script> document.location.replace("index.php?controller=inscription&action=affich")</script>'; 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM inscription i , groupe g , etudiant e where i.id_grp=g.id_grp and e.id_etd = i.id_etd ");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM inscription WHERE id_ins=?");
		$req->bindParam(1,$this->id_ins);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

	public function detail2($cnx,$inscri)
	{
		$req=$cnx->prepare("SELECT * FROM inscription WHERE id_ins=?");
		$req->bindParam(1,$inscri);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

		public function getId_ins(){
		return $this->id_ins;
	}

	public function setId_ins($id_ins){
		$this->id_ins = $id_ins;
	}

	public function getId_grp(){
		return $this->id_grp;
	}

	public function setId_grp($id_grp){
		$this->id_grp = $id_grp;
	}

	public function getId_etd(){
		return $this->id_etd;
	}

	public function setId_etd($id_etd){
		$this->id_etd = $id_etd;
	}

	public function getPrixfinal(){
		return $this->prixfinal;
	}

	public function setPrixfinal($prixfinal){
		$this->prixfinal = $prixfinal;
	}

	public function getRemise(){
		return $this->remise;
	}

	public function setRemise($remise){
		$this->remise = $remise;
	}
}
?>