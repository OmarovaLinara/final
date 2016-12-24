<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "admin";
	if (isset($_GET['email']) && isset($_GET['name']) && isset($_GET['password'])){
		try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $n = $_GET['email'];
   $s = $_GET['name'];
   $p = $_GET['password'];
   $sql = "INSERT INTO admin (email, name, password)
   VALUES ('".$n."', '".$s."', '".$p."')";
   $conn->exec($sql);
    echo "Successfully";
   }
catch(PDOException $e)
   {
   echo "Error!";
   }

$conn = null;

	}
?>