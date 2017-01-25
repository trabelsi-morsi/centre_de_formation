<?php
/**
* 
*/
class formateur 
{
	private $id_formateur;
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $mail;
	private $date_naiss;
	private $photo;
	private $fraisheure;
	private $id_type;

	function __construct($id_formateur,$cin,$nom,$prenom,$tel,$mail,$date_naiss,$photo,$fraisheure,$id_type)
	{
		$this->id_formateur=$id_formateur;
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->mail=$mail;
		$this->date_naiss=$date_naiss;
		$this->photo=$photo;
		$this->fraisheure=$fraisheure;
		$this->id_type=$id_type;
	}




	public function listetype($cnx,$type)
	{
		$req=$cnx->prepare("SELECT * FROM formateur f , type t where f.id_type=t.id_type and  f.id_type=?");
		$req->bindParam(1,$type);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	//	CRUD
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO formateur(cin, nom, prenom, tel, mail, date_naiss,photo,fraisheure,id_type) VALUES (?,?,?,?,?,?,?,?,?)");
		$req->bindParam(1,$this->cin);
		$req->bindParam(2,$this->nom);
		$req->bindParam(3,$this->prenom);
		$req->bindParam(4,$this->tel);
		$req->bindParam(5,$this->mail);
		$req->bindParam(6,$this->date_naiss);
		$req->bindParam(7,$this->photo);
		$req->bindParam(8,$this->fraisheure);
		$req->bindParam(9,$this->id_type);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=formateur&action=affich")</script>'; 
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE formateur SET cin=? ,nom=?,prenom=?,tel=?,mail=?,date_naiss=?,photo=? ,fraisheure=? ,id_type=? WHERE id_formateur=?");
		$req->bindParam(1,$this->cin);
		$req->bindParam(2,$this->nom);
		$req->bindParam(3,$this->prenom);
		$req->bindParam(4,$this->tel);
		$req->bindParam(5,$this->mail);
		$req->bindParam(6,$this->date_naiss);
		$req->bindParam(7,$this->photo);
		$req->bindParam(8,$this->fraisheure);
		$req->bindParam(9,$this->id_type);
		$req->bindParam(10,$this->id_formateur);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=formateur&action=affich")</script>'; 
		
	}
	public function edit_s($cnx)	// modifier sans photo
	{
		$req=$cnx->prepare("UPDATE formateur SET cin=? ,nom=?,prenom=?,tel=?,mail=?,date_naiss=? ,fraisheure=? ,id_type=? WHERE id_formateur=?");
		$req->bindParam(1,$this->cin);
		$req->bindParam(2,$this->nom);
		$req->bindParam(3,$this->prenom);
		$req->bindParam(4,$this->tel);
		$req->bindParam(5,$this->mail);
		$req->bindParam(6,$this->date_naiss);
		
		$req->bindParam(7,$this->fraisheure);
		$req->bindParam(8,$this->id_type);
		$req->bindParam(9,$this->id_formateur);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=formateur&action=affich")</script>'; 
	}

		public function delete($cnx)
	{

	
		$req=$cnx->prepare("DELETE FROM formateur WHERE id_formateur=?");
		$req->bindParam(1,$this->id_formateur);
		$req->execute();
		// unlink($photo);
	echo'<script> document.location.replace("index.php?controller=formateur&action=affich")</script>'; 
	//	echo'<script> alert('.$photo.');	</script>'; 
 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM formateur f , type t where f.id_type=t.id_type");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM formateur WHERE id_formateur=?");
		$req->bindParam(1,$this->id_formateur);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}


		public function getId_formateur(){
		return $this->id_formateur;
	}

	public function setId_formateur($id_formateur){
		$this->id_formateur = $id_formateur;
	}

	public function getCin(){
		return $this->cin;
	}

	public function setCin($cin){
		$this->cin = $cin;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function getTel(){
		return $this->tel;
	}

	public function setTel($tel){
		$this->tel = $tel;
	}

	public function getMail(){
		return $this->mail;
	}

	public function setMail($mail){
		$this->mail = $mail;
	}

	public function getDate_naiss(){
		return $this->date_naiss;
	}

	public function setDate_naiss($date_naiss){
		$this->date_naiss = $date_naiss;
	}

	public function getPhoto(){
		return $this->photo;
	}

	public function setPhoto($photo){
		$this->photo = $photo;
	}

	public function getFraisheure(){
		return $this->fraisheure;
	}

	public function setFraisheure($fraisheure){
		$this->fraisheure = $fraisheure;
	}

	public function getId_type(){
		return $this->id_type;
	}

	public function setId_type($id_type){
		$this->id_type = $id_type;
	}
}
?>