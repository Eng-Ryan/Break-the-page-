
<?php
session_start();
try{
	$conn= new PDO("mysql:host=localhost;dbname=prevent_sqli", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
	echo "error".$e->getMessage();

}
?>
