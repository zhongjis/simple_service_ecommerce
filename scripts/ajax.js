function getPlace(zip)
{
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function ()
    {
        if (xhr.readyState == 4 && xhr.status == 200) 
        {
            var result = xhr.responseText;
            var place = result.split (', ');
            console.log(place[0], place[1]);
            if (document.getElementById ("city").value == "")
                document.getElementById ("city").value = place[1];
            if (document.getElementById ("state").value == "")
                document.getElementById ("state").value = place[0]; 
        }
    }
    xhr.open("GET", "getCityState.php?zip=" + zip, true);
    xhr.send();
}


// function getPrice() {
// 	var zip = document.getElementById("zipPostalCode").value;
// 	var id = document.getElementById("productIdentifier").value;
//     var xhr = new XMLHttpRequest(); 


// 	xhr.onreadystatechange = function () {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             var rate = parseFloat(xhr.responseText);
// 			if (window.XMLHttpRequest) {
//        			var xhr2 = new XMLHttpRequest();
//     		} else {
//         		var xhr2 = new ActiveXObject ("Microsoft.XMLHTTP");
//     		}

// 			xhr2.onreadystatechange = function () {
//         		if (xhr2.readyState == 4 && xhr2.status == 200) {
//             		var price = parseFloat(xhr2.responseText);
// 					var quantity = parseFloat(document.getElementById("quantity").value);
// 					document.getElementById ("total").innerHTML = "$" + (price*quantity).toFixed(2);
//             		if (zip) {
// 						document.getElementById ("taxtotal").innerHTML = "$"+((price*quantity)*(1.0+rate)).toFixed(2);
// 					}
// 				}
// 			}
// 			xhr2.open("GET", "getItemPrice.php?id=" + id, true);
//     		xhr2.send();	
//         }
//     }

//     xhr.open("GET", "getTaxRate.php?zip=" + zip, true);
//     xhr.send();
// }
