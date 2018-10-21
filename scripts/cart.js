

function checkQuantity(quantityId,rowId) 
{
    var quantity = document.getElementById(quantityId).value;
    if (quantity<=0)
   {
    document.getElementById(rowId).style.display = "none";
   }
} 