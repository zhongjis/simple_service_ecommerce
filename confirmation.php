<?php 
	require_once "header.php";

	$order_id = $_GET['id'];
	require_once('dbconnect.php');
	$conn = connect(); 

	$stmt = $conn->prepare('SELECT * FROM orderinfo WHERE id = :id');
	$stmt->bindParam(':id', $order_id);
	$stmt->execute();

	echo('<h2>Your Order</h2>');
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo('<p>Your order No.: '.$row['id'].'</p>');
		echo('<p>Your product: '.$row['product'].'</p>');
		echo('<p>Quantity: '.$row['quantity'].'</p>');
		echo('<p>Your first name: '.$row['firstname'].'</p>');
		echo('<p>Your last name: '.$row['lastname'].'</p>');
		echo('<p>Your contact phone number: '.$row['phonenumber'].'</p>');
		echo('<p>Your address: '.$row['address'].'</p>');
		echo('<p>Your zip code: '.$row['zipcode'].'</p>');
		echo('<p>Your city: '.$row['city'].'</p>');
		echo('<p>Your state: '.$row['state'].'</p>');
		echo('<p>Your shipping method: '.$row['shippingmethod'].'</p>');
		echo('<p>Your credit card No.: '.$row['creditcardnumber'].'</p>');
		echo('<p>Your card holder name: '.$row['nameofthecard'].'</p>');
	}
?>
