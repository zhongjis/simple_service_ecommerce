 <?php 
// Check if the form is submitted 

	if ( isset( $_GET['submit'] ) ) { 
		// retrieve the form data by using the element's name attributes value as key 
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

		// display the results 
		echo '<h3>Form GET Method</h3>'; 
		echo 'Your name is ' . $lastname . ' ' . $firstname; exit;
	}
?>
 