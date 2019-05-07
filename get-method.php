 <?php 
// Check if the form is submitted 
	// if ( isset( $_GET['submit'] ) ) { 
	// 	echo "hahahahah";
		// retrieve the form data by using the element's name attributes value as key 
		require_once "header.php";
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

		function showSubmission() {
			global $conn, $query;
			echo('<h3>Form Submission status</h3>'); 
			if ($conn->query($query) == TRUE) {
				echo "success <br>";
			} else {
				echo "error: ". $query."<br>".$conn->error;
			}
		}

		showSubmission();

		header("confirmation.php?id=".$order_id);
		echo('<a href="confirmation.php?id='.$order_id.'">'.'Click Here to see your order confirmation</a>');
		exit;
	// }
?>
 