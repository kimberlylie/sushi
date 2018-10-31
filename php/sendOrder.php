<?php
session_start();

include 'credentials.php';



$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=$_SESSION['customer']['firstName']." ".$_SESSION['customer']['lastName'];
$address= $_SESSION['customer']['address'];
$postalCode=$_SESSION['customer']['zip'];
$email=$_SESSION['customer']['email'];
$phone= $_SESSION['customer']['phone'];
$note=$_SESSION['customer']['notes'];


$sql_1 = "INSERT INTO `customers` (`name`,`address`,`postalCode`,`email`,`phone`,`note`) VALUES ('".$name."','".$address."',".$postalCode.",'".$email."','".$phone."','".$note."')";
$result =mysqli_query($conn, $sql_1);
if ($result) { 
    
    $sql_2 = "SELECT ID AS LastID FROM `customers` WHERE ID = @@Identity";
    $result = mysqli_query($conn, $sql_2);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $customerId=$row['LastID'];
        }
    }

    $date = date("Y-m-d");
    $sql_3 ="INSERT INTO `orders` (`customer_ID`,`date`,`menu_ID`,`quantity`) VALUES";

    //  (".$customerId.",'".$date."',".array_keys($_SESSION['cart'])[0].",'".$_SESSION['cart'][array_keys($_SESSION['cart'])[0]]."')";

    for ($i=0; $i<count($_SESSION['cart']); $i++)
    {
    if ($_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]>0)
    {
    $sql_3=$sql_3."(".$customerId.",'".$date."',".array_keys($_SESSION['cart'])[$i].",'".$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]."'),";
    }    
    }
    
    $sql_3 = substr($sql_3, 0, -1);
    if(mysqli_query($conn, $sql_3))
    {
        $message = "Order has been sent!";
        echo "<script type='text/javascript'>alert('$message');";
        echo "window.location.href='/sushi/summary.php';";
        echo"</script>"; //window.location.href='/~kimie/sushi/contact.html';
    }
    else 
    {
        echo "Error: " . $sql_3 . "<br>" . mysqli_error($conn);
    }
} 
else 
{
    echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>