function getPlace(zipcode)
{
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function ()
    {
        if (xhr.readyState == 4 && xhr.status == 200) 
        {
            var result = xhr.responseText;
            var place = result.split (', ');
            if (document.getElementById ("city").value == "")
                document.getElementById ("city").value = place[0];
            if (document.getElementById ("state").value == "")
                document.getElementById ("state").value = place[1]; 
        }
    }
    xhr.open("GET", "getCityState.php?zip=" + zip, true);
    xhr.send();
}