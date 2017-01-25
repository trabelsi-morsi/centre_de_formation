<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $cnx = new PDO("mysql:host=$servername;dbname=centreformation", $username, $password);
    // set the PDO error mode to exception
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>