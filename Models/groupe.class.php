<?php
/**
* 
*/
class groupe 
{
	private $id_grp;
	private $des_grp;
	private $nbreheure;
	private $prixheure;
	private $fraisformateur;
	private $id_formation;
	private $id_formateur;
	
	function __construct($id_grp,$des_grp,$nbreheure,$prixheure,$fraisformateur,$id_formation,$id_formateur)
	{
		$this->id_grp=$id_grp;
		$this->des_grp=$des_grp;
		$this->nbreheure=$nbreheure;
		$this->prixheure=$prixheure;
		$this->fraisformateur=$fraisformateur;
		$this->id_formation=$id_formation;
		$this->id_formateur=$id_formateur;
	}

	//	CRUD
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO groupe(des_grp, nbreheure,prixheure,fraisformateur, id_formation, id_formateur) VALUES (?,?,?,?,?,?)");
		$req->bindParam(1,$this->des_grp);
		$req->bindParam(2,$this->nbreheure);
		$req->bindParam(3,$this->prixheure);
		$req->bindParam(4,$this->fraisformateur);
		$req->bindParam(5,$this->id_formation);
		$req->bindParam(6,$this->id_formateur);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=groupe&action=affich")</script>'; 
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE groupe SET des_grp=? ,nbreheure=?,prixheure=?,fraisformateur=?,id_formation=?,id_formateur=?WHERE id_grp=?");
		$req->bindParam(1,$this->des_grp);
		$req->bindParam(2,$this->nbreheure);
		$req->bindParam(3,$this->prixheure);
		$req->bindParam(4,$this->fraisformateur);
		$req->bindParam(5,$this->id_formation);
		$req->bindParam(6,$this->id_formateur);
		$req->bindParam(7,$this->id_grp);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=groupe&action=affich")</script>'; 
		
	}

		public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM groupe WHERE id_grp=?");
		$req->bindParam(1,$this->id_grp);
		$req->execute();
		echo'<script> document.location.replace("index.php?controller=groupe&action=affich")</script>'; 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM groupe g , formation f , formateur o where g.id_formateur=o.id_formateur and g.id_formation=f.id_formation");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM groupe WHERE id_grp=?");
		$req->bindParam(1,$this->id_grp);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	public function detail2($cnx,$grp)
	{
		$req=$cnx->prepare("SELECT * FROM groupe WHERE id_grp=?");
		$req->bindParam(1,$grp);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

	public function getId_grp(){
		return $this->id_grp;
	}

	public function setId_grp($id_grp){
		$this->id_grp = $id_grp;
	}

	public function getDes_grp(){
		return $this->des_grp;
	}

	public function setDes_grp($des_grp){
		$this->des_grp = $des_grp;
	}

	public function getNbreheure(){
		return $this->nbreheure;
	}

	public function setNbreheure($nbreheure){
		$this->nbreheure = $nbreheure;
	}

	public function getPrixheure(){
		return $this->prixheure;
	}

	public function setPrixheure($prixheure){
		$this->prixheure = $prixheure;
	}

	public function getFraisformateur(){
		return $this->fraisformateur;
	}

	public function setFraisformateur($fraisformateur){
		$this->fraisformateur = $fraisformateur;
	}

	public function getId_formation(){
		return $this->id_formation;
	}

	public function setId_formation($id_formation){
		$this->id_formation = $id_formation;
	}

	public function getId_formateur(){
		return $this->id_formateur;
	}

	public function setId_formateur($id_formateur){
		$this->id_formateur = $id_formateur;
	}
}
?>