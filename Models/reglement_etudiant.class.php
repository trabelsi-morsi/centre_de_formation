<?php
/**
* 
*/
class reglement_etudiant 
{
	private $id_regl;
	private $montant;
	private $datee;
	private $id_ins;
	
	function __construct($id_regl,$montant,$datee,$id_ins)
	{
		$this->id_regl=$id_regl;
		$this->montant=$montant;
		$this->datee=$datee;
		$this->id_ins=$id_ins;
	}

	//	CRUD
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO reglement_etudiant(montant, datee,id_ins) VALUES (?,?,?)");
		$req->bindParam(1,$this->montant);
		$req->bindParam(2,$this->datee);
		$req->bindParam(3,$this->id_ins);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=reglement_etudiant&action=affich")</script>'; 
	}

	public function somme($cnx,$inscri)
	{
		$req=$cnx->prepare("SELECT SUM(montant) as mnt FROM reglement_etudiant WHERE id_ins=?");
		$req->bindParam(1,$inscri);
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE reglement_etudiant SET montant=? ,datee=?,id_ins=? WHERE id_regl=?");
		$req->bindParam(1,$this->montant);
		$req->bindParam(2,$this->datee);
		$req->bindParam(3,$this->id_ins);
		$req->bindParam(4,$this->id_regl);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=reglement_etudiant&action=affich")</script>'; 
		
	}

		public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM reglement_etudiant WHERE id_regl=?");
		$req->bindParam(1,$this->id_regl);
		$req->execute();
		echo'<script> document.location.replace("index.php?controller=reglement_etudiant&action=affich")</script>'; 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM reglement_etudiant r , inscription i, etudiant e where i.id_ins=r.id_ins AND i.id_etd= e.id_etd");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM reglement_etudiant WHERE id_regl=?");
		$req->bindParam(1,$this->id_regl);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

		public function getId_pai(){
		return $this->id_pai;
	}

	public function setId_pai($id_pai){
		$this->id_pai = $id_pai;
	}

	public function getMontant(){
		return $this->montant;
	}

	public function setMontant($montant){
		$this->montant = $montant;
	}

	public function getDatee(){
		return $this->datee;
	}

	public function setDatee($datee){
		$this->datee = $datee;
	}

	public function getId_grp(){
		return $this->id_grp;
	}

	public function setId_grp($id_grp){
		$this->id_grp = $id_grp;
	}
}
?>