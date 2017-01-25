<?php
if(!isset($_SESSION['login']) || !isset($_SESSION['pass'])){
	echo "<script>window.location.href='login.php?controller=admin&action=login1';</script>";
	exit();
}


//else{
//	echo "<script>window.location.href='index.php';</script>";
//	exit();
// }


 

?>