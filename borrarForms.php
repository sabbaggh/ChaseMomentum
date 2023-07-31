<?php 
	require_once("database.php");
	
	$sql = $conn->prepare("DELETE  FROM forms WHERE id=?");  
	$sql->bind_param("i", $_GET["id"]); 
	$sql->execute();
	$sql->close(); 
	$conn->close();
	header('location:bajasForms.php');
?>