<!DOCTYPE html>
<html>
	<head>
		<title>Budda at Home Service</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/general.css" type="text/css">
		<link rel="stylesheet" href="styles/product-detail.css" type="text/css">
	</head>
	<body>
		<a id="website-link" href="index.php">wedoeverythingforyou.com</a>
		<div id="navbar">
			<a href="index.php">About Us</a>
			<a href="product.php">Products</a>
		</div>
		<h1>Budda at Home Service</h1>
		<img src="images/xuancheng.jpeg" alt="budda">
		<p>Want to have your own budda at home? We can help you! Just fill out the form below and we can help you achieve your dream!</p>
		<button onclick="findOutMore('budda statue')" id='findMoreBtn'>Find Out More</button>
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
		<script src="scripts/product.js"></script>
	</body>
</html>