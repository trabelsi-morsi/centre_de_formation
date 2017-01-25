<?php
class admin 
{
	private $id_admin;
    private $login;
    private $pass;
    
    public function __construct($id_admin,$login,$pass){
    	$this->id_admin=$id_admin;
        $this->login=$login;
        $this->pass=$pass;
    }


    public function login($cnx){
	$this->pass=md5(sha1($this->pass));

       $req=$cnx->query("select * from admin where login='".$this->login."' and pass='".$this->pass."'");
	   $verif=$req->rowCount();
	  
	   if($verif==1)
	   {
	   $_SESSION['login']=$this->login;
	   $_SESSION['pass']=$this->pass;
	   echo "<script>window.location.href='index.php';</script>";
	  
	   }else

	
	  echo "<script>window.location.href='login.php?controller=admin&action=login1'</script>";
        }

         public function logout(){
       echo "<script>window.location.href='login.php?controller=admin&action=login1'</script>";

        }



        public function add($cnx)
	{
		$req=$cnx->prepare("INSERT INTO admin (login,pass) VALUES (?,?)");
		$this->pass=md5(sha1($this->pass));
		$req->bindParam(1,$this->login);
		$req->bindParam(2,$this->pass);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=admin&action=affich")</script>';
	}

	public function edit($cnx)	
	{
		$req=$cnx->prepare("UPDATE admin SET login=?, pass=? WHERE  id_admin=?");
		$this->pass=md5(sha1($this->pass));
		$req->bindParam(1,$this->login);
		$req->bindParam(2,$this->pass);
		$req->bindParam(3,$this->id_admin);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=admin&action=affich")</script>';

	}

	public function delete($cnx)
	{
		$req=$cnx->prepare("DELETE FROM admin WHERE id_admin=?");
		$req->bindParam(1,$this->id_admin);
		$req->execute() ;
		echo'<script> document.location.replace("index.php?controller=admin&action=affich")</script>';

	}

	public function liste($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM admin");
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;

	}

	public function detail($cnx)
	{
		$req=$cnx->prepare("SELECT * FROM admin WHERE id_admin=?");
		$req->bindParam(1,$this->id_admin);
		$req->execute() ;
		$rows=$req->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}	
}