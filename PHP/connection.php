<?php
$username="fashionwear";
$password="1234";
$host="localhost";
$dbname="fashionwear";
$conn;
try{
	$conn=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
	echo "not connected".$e->getMessage();
}

?>

