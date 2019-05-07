<?php
	require_once "dbconnect.php";
	
	$id = $_GET["id"];

	$sql = "SELECT price FROM products WHERE id=".$id;
	$stmt = $pdo->query($sql);
	while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
		print $row["price"];

	}
?>
