

function updateCart(quantityId,rowId,priceId,totalPriceId) 
{
    var quantity = document.getElementById(quantityId).value;

    if (quantity<=0)
   {
    document.getElementById(rowId).style.display = "none";
    document.getElementById(quantityId).value = 0;
   }
   var price = parseFloat(document.getElementById(priceId).innerHTML);
   document.getElementById(totalPriceId).innerHTML = (price*quantity);
} 