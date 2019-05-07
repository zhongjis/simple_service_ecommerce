<?php
	// this php block is for db connection and data retrival 
	require_once('dbconnect.php');
	$conn = connect(); 
	$query = "SELECT * FROM products";
	$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
	<title>Product</title>
	<head>
		<title>Product</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/product.css">
		<link rel="stylesheet" href="styles/general.css">
	</head>
	<?php require_once "header.php"; ?>
	<body>
		<div id="products">
			<h1>Our Products</h1>
			<?php
				while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
					echo('<div class="product">');
					echo('<a href="/product-detail.php?id='.$row['id'].'">');
					echo("<img src='".$row['img_dir']."' alt='".$row['img_dir']."'>");
					echo('</a>');
					echo('<h3 class="product-title">'.$row['name'].'</h3>');
					echo('<p class="product-description">'.$row['brief_description'].'</p>');
					echo('<a href="index.php">Contact Us</a>');
					echo('</div>');
				}
			?>
		</div>
		<script src="scripts/product.js"></script>
	</body>
</html>