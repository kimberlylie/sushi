<?php
session_start();

$servername = "localhost";
$username = "f37ee";
$password = "f37ee";
$dbname = "f37ee";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// quantity of iced cappuccino double
$sql = "SELECT * FROM menu";
$result = mysqli_query($conn, $sql);
$item=array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
        $items[$i] =  str_replace(' ', '', $row['name']);
        $price[$i] = $row['price'];
        $i=$i+1;
    }
}

if (!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
    for ($i=0; $i<count($items); $i++)
    {
        $_SESSION['cart'][$i]=array($items[$i],0);
    }
}

?>


<?php
$itemNo = $_POST["itemNo"];
$quantity = $_POST["quantity"];
$quantityTotal=$quantity+$_SESSION['cart'][$itemNo][1];
$_SESSION['cart'][$itemNo]= array($items[$itemNo],$quantityTotal) ;

$message = $quantity." item(s) has been added!";
echo "<script type='text/javascript'>alert('$message');
window.location.href='/sushi/menu.php';
</script>";
?>