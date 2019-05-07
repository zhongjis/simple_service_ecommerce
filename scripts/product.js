function getMoreDetail(obj) {
	window.location.href = obj+'.php';
}

function findOutMore(obj) {
	var link = 'https://www.google.com/search?tbm=isch&q='+obj
	window.open(link, '_blank');
}

function checkQuoteRequest() {
	var Quantity = document.getElementById("quantity").value;
	if (!(parseInt(Quantity)>0)) {
		alert("Quantity must be a positive integer");
		return (false);
	}

	var letters = /^[A-Za-z]+$/;
	var firstName = document.getElementById('firstName').value;
	if (!firstName.match(letters)) {
		alert("must input a valid first name");
		return (false);
	}

	var lastName = document.getElementById('lastName').value;
	if (!lastName.match(letters)) {
		alert("must input a valid last name");
		return (false);
	}

	var phoneno = /^\d{10}$/;
	var phoneNumber = document.getElementById('phoneNumber').value;
	if(!(phoneNumber.match(phoneno))) {
		alert("must input a valid 10-digit phone using all numbers");
		return (false);
	}

	var shippingAddress = document.getElementById('shippingAddress').value;

	var creditno = /^\d{16}$/;
	var creditNo = document.getElementById('creditNo').value;
	if(!(creditNo.match(creditno))) {
		alert("must input a valid 16-digit credit card number");
		return (false);
	}

	var fullName = /^[a-zA-Z]+ [a-zA-Z]+$/
	var cardHolder = document.getElementById('creditHolder').value;
	if (!cardHolder.match(letters)) {
		alert("must input a valid cardholder name");
		return (false);
	}

	return (true)
}