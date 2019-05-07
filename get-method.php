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

		$query = "INSERT INTO orderinfo (product, quantity, firstname, lastname, phonenumber, address, zipcode, city, state, shippingmethod, creditcardnumber, nameofthecard) VALUES ('".
		$product_identifier."', '".
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
		echo('<h3>Form Submission status</h3>'); 
		if ($conn->query($query) == TRUE) {
			echo "success";
		} else {
			echo "error: ". $query."<br>".$conn->error;
		}
		
		exit;
	// }
?>
 