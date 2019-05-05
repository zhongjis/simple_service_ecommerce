<?php
	// this php block is for db connection and data retrival 
	include_once('dbconnect.php');
	$conn = connect(); 
	$query = "SELECT * FROM products";
	$result = $pdo->query($query);
?>

<?php
	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
?>
		<div class="product">
				<img onclick="getMoreDetail('babylion')" src="images/babylion.jpg" alt="Baby Lion">
				<h3 class="product-title"> <php? echo $rows['name']; ?> </h3>
				<p class="product-description"> <php? echo $rows['description']; ?> </p>
				<a href="index.php">Contact Us</a>
		</div>
<?php
	}
?>

<!DOCTYPE html>
<?php require_once "header.php"; ?>
<html>
	<title>Product</title>
	<head>
		<title>Product</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/product.css">
		<link rel="stylesheet" href="styles/general.css">
	</head>
	<body>
		<div id="products">
			<h1>Our Products</h1>
			<div class="product">
				<img onclick="getMoreDetail('babylion')" src="images/babylion.jpg" alt="Baby Lion">
				<h3 class="product-title">Baby Lion Service</h3>
				<p class="product-description">Want a baby lion at home? Craving the life with lion King? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('camel')" src="images/camel.jpeg" alt="Camel">
				<h3 class="product-title">Camel Service</h3>
				<p class="product-description">Want a camel at home and ride it anywhere you want? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('cancun')" src="images/cancun.jpeg" alt="Cancun">
				<h3 class="product-title">Cancun Settlement Service</h3>
				<p class="product-description">Want to buy an island near Cancun? Want to have your own beach? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('chongqing')" src="images/chongqing.jpg" alt="Chongqing, China">
				<h3 class="product-title">Chongqing, China Settlement Service</h3>
				<p class="product-description">Want to live in Chongqing, China and have Hotpot everyday? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('effelTower')" src="images/effelTower.jpeg" alt="Effel Tower">
				<h3 class="product-title">Effel Tower Settlement Service</h3>
				<p class="product-description">Want to have your own living space on Effel Tower? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('hollywood')" src="images/hollywood.jpeg" alt="Hollywood">
				<h3 class="product-title">Hollywood Settlement Service</h3>
				<p class="product-description">Want to buy the whole Hollywood? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('moscow')" src="images/moscow.jpeg" alt="Moscow">
				<h3 class="product-title">Moscow Settlement Service</h3>
				<p class="product-description">Want to live in Moscow? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('panda')" src="images/panda-1.jpeg" alt="Panda">
				<h3 class="product-title">Baby Panda Service</h3>
				<p class="product-description">Want a Panda at home? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('somewhere')" src="images/somewherenice.jpg" alt="Somewhere nice">
				<h3 class="product-title">Valley Settlement Service</h3>
				<p class="product-description">Want to own your own valley? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
			<div class="product">
				<img onclick="getMoreDetail('xuanchen')" src="images/xuancheng.jpeg" alt="Xuancheng">
				<h3 class="product-title">Budda at Home Service</h3>
				<p class="product-description">Want to have your own budda at home? We can help you!</p>
				<a href="index.php">Contact Us</a>
			</div>
		</div>
		<script src="scripts/product.js"></script>
	</body>
</html>