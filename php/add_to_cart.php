<?php
session_start();

// include 'credentials.php';


// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // quantity of iced cappuccino double
// $sql = "SELECT * FROM menu";
// $result = mysqli_query($conn, $sql);
// $item=array();
// $price=array();
// $id=array();

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     $i=0;
//     while($row = mysqli_fetch_assoc($result)) {
//         $items[$i] =  str_replace(' ', '', $row['name']);
//         $price[$i] = $row['price'];
//         $id[$i] = $row['id'];
//         $i=$i+1;
//     }
// }



// if (!isset($_SESSION['cart']))
// {
//     $_SESSION['cart'] = array();
//     for ($i=0; $i<count($items); $i++)
//     {
//         $_SESSION['cart'][$i]=array($id[$i],0);
//         echo"<p>".$id[$i]."</p>";
//     }
// }

?>


<?php

$itemNo = $_POST["itemNo"];
$quantity = $_POST["quantity"];
echo $itemNo."   ".$quantity;
$quantityTotal= $quantity + $_SESSION['cart'][$itemNo][1];
$_SESSION['cart'][$itemNo][1]= $quantityTotal;

$message = "id No:".$_SESSION['cart'][$itemNo][0]."add".$_SESSION['cart'][$itemNo][1]." item(s) has been added!";
//  echo "<script type='text/javascript'>alert('$message');
// window.location.href='/sushi/menu.php';
// </script>"; 

 echo "<script type='text/javascript'>alert('$message');
</script>"; 
?>