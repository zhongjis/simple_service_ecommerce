<?php
	// this php block is for db connection and data retrival 
	require_once('dbconnect.php');
	$conn = connect(); 
	$query = "SELECT * FROM products";
	$result = $conn->query($query);
?>

<!doctype html>
<html>
	<head>
		<title>Product Info</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/product-detail.css" type="text/css">
		<script type = "text/JavaScript" src ="ajax.js"> </script>
		<script src="scripts/product.js"></script>
	</head>
	<?php require_once "header.php"; ?>
	<body>
		<?php
			$id = $_GET["id"];
			$query = "SELECT * FROM products WHERE id = ".$id;
			$result = $conn->query($query);
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo('<h1 class="product-title">'.$row['name'].'</h1>');
				echo("<img src='".$row['img_dir']."' alt='".$row['img_dir']."'>");
				echo('<p class="product-description">'.$row['detail_description'].'</p>');
			}
		?>
		<form action="mailto:zhongjis@uci.edu" name="QuoteForm" method="post" enctype="text/plain" onSubmit="return (checkQuoteRequest())"> <br>
			<h3>Get a Quote</h3>
			<div id="basicInfo">
				<h4>Basic Information</h4>
				Product Identifier: <br>
				<select name="How long you want this done" id="shippingMethod">
					<option value="lion">Baby Lion Service</option>
					<option value="camel">Camel Service</option>
					<option value="cancun">Cancun Settlement Service</option>
					<option value="chongqing">Chongqing, China Settlement Service</option>
					<option value="effelTower">Effel Tower Settlement Service</option>
					<option value="hollywood">Hollywood Settlement Service</option>
					<option value="lion">Moscow Settlement Service</option>
					<option value="camel">Baby Panda Service</option>
					<option value="cancun">Valley Settlement Service</option>
					<option value="chongqing">Budda at Home Service</option>
				</select> <br>
				Quantity: <br> 
				<input type="text" name="quantityField" id="quantity"> <br>
				First Name: <br>
				<input type="text" name="firstNameField" id="firstName"> <br>
				Last Name: <br>
				<input type="text" name="lastNameField" id="lastName"> <br>
				Phone Number: <br>
				<input type="text" name="phoneNumberField" id="phoneNumber"> <br>
				Shipping Address: <br>
				<input type="text" name="shippingAddressField" id="shippingAddress"> <br>
				Zip Code: <br>
				<input type="" name="Zip Code" id="zipcode"> <br>
				City: <br>
				<input type="" name="City" id="city"> <br>
				State: <br>
				<input type="" name="State" id="state"> <br>
				Shipping Method: <br>
				<select name="shippingMethod">
					<option value="overnight">Overnight</option>
					<option value="2-day">2-day</option>
					<option value="6-day">6-day</option>
				</select> <br> <br>
			</div>
			<div id="paymentInfo">
				<h4>Deposit Payment Method</h4>
				Credit Card No.:<br>
				<input type="text" name="creditNoField" id="creditNo"><br>
				Name on the Card:<br>
				<input type="text" name="cardHolderField" id="creditHolder"><br>
			</div> <br>
			<input type="reset" value="Reset">
			<input type="submit" value="Send">
		</form>
	</body>
</html>