
<?php
/**
* 
*/
class diplome 
{
	
	
	private $id_dip;
	private $id_ins;
	private $datee;
	private $mention;
	private $score;

	function __construct($id_dip,$id_ins,$datee,$mention,$score)
	{
		$this->datee=$datee;
		$this->id_dip=$id_dip;
		$this->id_ins=$id_ins;
		$this->mention=$mention;
		$this->score=$score;
	}

	//	CRUD
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO diplome(datee, mention,score,id_ins) VALUES (?,?,?,?)");
		$req->bindParam(1,$this->datee);
		$req->bindParam(2,$this->mention);
		$req->bindParam(3,$this->score);
		$req->bindParam(4,$this->id_ins);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=diplome&action=affich")</script>'; 
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE diplome SET datee=? ,mention=?,score=?,id_ins=? WHERE id_dip=? ");
		$req->bindParam(1,$this->datee);
		$req->bindParam(2,$this->mention);
		$req->bindParam(3,$this->score);
		$req->bindParam(4,$this->id_ins);
		$req->bindParam(5,$this->id_dip);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=diplome&action=affich")</script>'; 
		
	}

		public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM diplome WHERE id_dip=?");
		$req->bindParam(1,$this->id_dip);
		$req->execute();
		echo'<script> document.location.replace("index.php?controller=diplome&action=affich")</script>'; 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM diplome d , inscription i ,etudiant e, groupe g, formation f where d.id_ins=i.id_ins AND i.id_etd=e.id_etd AND i.id_grp=g.id_grp AND g.id_formation = f.id_formation");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM diplome WHERE id_dip=?");
		$req->bindParam(1,$this->id_dip);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

		public function getDatee(){
		return $this->datee;
	}

	public function setDatee($datee){
		$this->datee = $datee;
	}

	public function getId_dip(){
		return $this->id_dip;
	}

	public function setId_dip($id_dip){
		$this->id_dip = $id_dip;
	}

	public function getId_ins(){
		return $this->id_ins;
	}

	public function setId_ins($id_ins){
		$this->id_ins = $id_ins;
	}

	public function getMention(){
		return $this->mention;
	}

	public function setMention($mention){
		$this->mention = $mention;
	}

	public function getScore(){
		return $this->score;
	}

	public function setScore($score){
		$this->score = $score;
	}
}
?>