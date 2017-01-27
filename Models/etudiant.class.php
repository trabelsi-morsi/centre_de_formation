<?php



class etudiant
{
	 
	private $id_etd;
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $mail;
	private $date_naiss;
	private $photo;

	
function __construct($id_etd,$cin,$nom,$prenom,$tel,$mail,$date_naiss,$photo)
	{
		$this->id_etd=$id_etd;
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->mail=$mail;
		$this->date_naiss=$date_naiss;
		$this->photo=$photo;

	}

//	CRUD
	public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO etudiant(cin, nom,prenom,tel, mail, date_naiss,photo) VALUES (?,?,?,?,?,?,?)");
		$req->bindParam(1,$this->cin);
		$req->bindParam(2,$this->nom);
		$req->bindParam(3,$this->prenom);
		$req->bindParam(4,$this->tel);
		$req->bindParam(5,$this->mail);
		$req->bindParam(6,$this->date_naiss);
		$req->bindParam(7,$this->photo);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=etudiant&action=affich")</script>'; 
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE etudiant SET cin=? ,nom=?,prenom=?,tel=?,mail=?,date_naiss=?,photo=? WHERE id_etd=?");
		$req->bindParam(1,$this->cin);
		$req->bindParam(2,$this->nom);
		$req->bindParam(3,$this->prenom);
		$req->bindParam(4,$this->tel);
		$req->bindParam(5,$this->mail);
		$req->bindParam(6,$this->date_naiss);
		$req->bindParam(7,$this->photo);
		$req->bindParam(8,$this->id_etd);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=etudiant&action=affich")</script>'; 
	}


	public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM etudiant WHERE id_etd=?");
		$req->bindParam(1,$this->id_etd);
		$req->execute();
		echo'<script> document.location.replace("index.php?controller=etudiant&action=affich")</script>'; 
	
	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM etudiant ");
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM etudiant WHERE id_etd=?");
		$req->bindParam(1,$this->id_etd);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

	public function recherche($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM etudiant WHERE cin=?");
		$req->bindParam(1,$this->cin);
		$req->execute();
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}



//Getters and Setters 	
		public function getId_etd(){
		return $this->id_etd;
	}

	public function setId_etd($id_etd){
		$this->id_etd = $id_etd;
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


}

?>