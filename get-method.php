 <?php 
// Check if the form is submitted 
	// if ( isset( $_GET['submit'] ) ) { 
	// 	echo "hahahahah";
		// retrieve the form data by using the element's name attributes value as key 
		require_once('dbconnect.php');
		$conn = connect(); 
		
		$product_identifier = $_GET['productIdentifierField'];
		$quantity = $_GET['quantityField'];
		$firstname = $_GET['firstNameField']; 
		$lastname = $_GET['lastNameField'];
		$phoneNumber = $_GET['phoneNumberField']; 
		$shippingAddress = $_GET['shippingAddressField'];
		$zipCode = $_GET['zipcodeField'];
		$city = $_GET['cityField'];
		$state = $_GET['stateField'];
		$shippingMethod = $_GET['shippingMethodField'];
		$creditNo = $_GET['creditNoField'];
		$creditHolder = $_GET['cardHolderField'];

		date_default_timezone_set('America/Los_Angeles');
		$today = date("Ymd");
		$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
		$order_id = $today . $rand;

		$query = "INSERT INTO orderinfo (product, id, quantity, firstname, lastname, phonenumber, address, zipcode, city, state, shippingmethod, creditcardnumber, nameofthecard) VALUES ('".
		$product_identifier."', '".
		$order_id."', '".
		$quantity."', '".
		$firstname."', '".
		$lastname."', '".
		$phoneNumber."', '".
		$shippingAddress."', '".
		$zipCode."', '".
		$city."', '".
		$state."', '".
		$shippingMethod."', '".
		$creditNo."', '".
		$creditHolder."')";

		// display the results 
		echo('<h2>Your Order</h2>');
		
		$stmt = $conn->prepare('SELECT * FROM orderinfo WHERE id = :id');

		function getRows() {
			global $conn, $order_id, $stmt;
			$stmt->bindParam(':id', $order_id);
			$stmt->execute();
		}

		function showConfirmation(){
			global $stmt;
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
		}

		function showSubmission() {
			global $conn, $query;
			echo('<h3>Form Submission status</h3>'); 
			if ($conn->query($query) == TRUE) {
				echo "success <br>";
			} else {
				echo "error: ". $query."<br>".$conn->error;
			}
		}

		getRows();
		showConfirmation();
		showSubmission();

		header("confirmation.php?id=".$order_id);

		exit;
	// }
?>
 