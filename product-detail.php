<!doctype html>
<html>
	<head>
		<title>Product Info</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/general.css" type="text/css">
	</head>
	<body>
		<a id="website-link" href="index.php">wedoeverythingforyou.com</a>
		<div id="navbar">
			<a href="index.php">About Us</a>
			<a href="product.php">Products</a>
		</div>
		<h1>Product Name</h1>
		<h2>Product image</h2>
		<p>Product Description</p>
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