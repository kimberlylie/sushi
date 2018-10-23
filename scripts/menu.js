// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function modalFunc(name,price,image,item,description) {
    modal.style.display = "block";
    document.getElementById("modal-item-name").innerHTML ='<h1>'.concat(name, '</h1>');
    document.getElementById("modal-item-price").innerHTML = '<h3>'.concat(('$'.concat(price)),'</h3>');
    document.getElementById("modal-picture").innerHTML = '<img src="'.concat(image, '">');  
    document.getElementById("modal-item-description").innerHTML ="<h6>".concat(description,"</h6>");
    document.getElementById("itemNo").value = item; 
    document.getElementById("itemNo").style.display = "none";
   
}  

function checkQuantity()
{
    if (document.getElementById("quantity").value < 0)
    {
    alert ("Quantity cannot be less than 0")
    document.getElementById("quantity").value = 0;
    }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}