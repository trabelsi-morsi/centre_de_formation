<?php
/**
* 
*/
class paiement_formateur 
{
	private $id_pai;
	private $montant;
	private $datee;
	private $id_grp;
	

	function __construct($id_pai,$montant,$datee,$id_grp)
	{
		$this->id_pai=$id_pai;
		$this->montant=$montant;
		$this->datee=$datee;
		$this->id_grp=$id_grp;
	}

	public function somme($cnx,$grp)
	{
		$req=$cnx->prepare("SELECT SUM(montant) as montantpaye from paiement_formateur where id_grp =? ");
		$req->bindParam(1,$grp);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}



	//	CRUD



	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO paiement_formateur(montant, datee,id_grp) VALUES (?,?,?)");
		$req->bindParam(1,$this->montant);
		$req->bindParam(2,$this->datee);
		$req->bindParam(3,$this->id_grp);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=paiement_formateur&action=affich")</script>'; 
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE paiement_formateur SET montant=? ,datee=?,id_grp=? WHERE id_pai=?");
		$req->bindParam(1,$this->montant);
		$req->bindParam(2,$this->datee);
		$req->bindParam(3,$this->id_grp);
		$req->bindParam(4,$this->id_pai);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=paiement_formateur&action=affich")</script>'; 
		
	}

		public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM paiement_formateur WHERE id_pai=?");
		$req->bindParam(1,$this->id_pai);
		$req->execute();
		echo'<script> document.location.replace("index.php?controller=paiement_formateur&action=affich")</script>'; 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM paiement_formateur p , groupe g where p.id_grp=p.id_grp ");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}


	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM paiement_formateur WHERE id_pai=?");
		$req->bindParam(1,$this->id_pai);
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