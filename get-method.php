 <?php 
// Check if the form is submitted 

	if ( isset( $_GET['submit'] ) ) { 
		// retrieve the form data by using the element's name attributes value as key 
		$product_identifier = $_GET['productidentifier'];
		$quantity = $_GET['quantity'];
		$firstname = $_GET['firstname']; 
		$lastname = $_GET['lastname'];
		$phoneNumber = $_GET['phoneNumber']; 
		$shippingAddress = $_GET['shippingAddress'];
		$zipCode = $_GET['zipCode'];
		$city = $_GET['city'];
		$state = $_GET['state'];
		$shippingMethod = $_GET['shippingMethod'];
		$creditNo = $_GET['creditNo'];
		$creditHolder = $_GET['creditHolder'];

		// display the results 
		echo '<h3>Form GET Method</h3>'; 
		echo 'Your name is ' . $lastname . ' ' . $firstname; exit;
	}
?>
 