<!doctype html>
<html>
	<head>
		<title>Product Info</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/general.css" type="text/css">
		<script type = "text/JavaScript" src ="ajax.js"> </script>
	</head>
	<body>
		<a id="website-link" href="index.php">wedoeverythingforyou.com</a>
		<div id="navbar">
			<a href="index.php">About Us</a>
			<a href="product.php">Products</a>
		</div>
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
		<form>
			<h3>Get a Quote</h3>
			Product Identifier:<br>
			<input type="text" name="identifier"><br>
			Quantity:<br>
			<input type="text" name="quantity"><br>
			First name:<br>
			<input type="text" name="firstname"><br>
			Last name:<br>
			<input type="text" name="lastname"><br>
			Phone number:<br>
			<input type="text" name="phone"><br>
			Shipping Address:<br>
			<input type="text" name="address"><br>
			Shipping Method:<br>
			<select name="How long you want this done" id="shipping">
				<option value="overnight">Overnight</option>
				<option value="2-day">2-day</option>
				<option value="6-day">6-day</option>
			</select>
			<div>
				<h3>Deposit Payment Method</h3>
				Credit Card No.:<br>
				<input type="text" name="credit-no"><br>
				Name on the Card:<br>
				<input type="text" name="card-name"><br>
			</div>
			<input type="submit" name="submit">
		</form>
	</body>
</html>