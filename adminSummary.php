<?php 
session_start();
?>
<?php
if (!isset($_SESSION['admin']))
{
    echo "<script type='text/javascript'>
    window.location.href='./sushi/adminLogin.php'; 
    </script>"; 
}
?>  
<!DOCTYPE html>
<?php
$transactionId= $_POST["transactionID"];
?>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/sushi.css">
        <meta charset="utf-8">
        <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans');</style>
    </head>

    <body>   
	    <div class="container">
            <section>
            <div class="header">       
                <div class="header-box1"><img src="assets/nav/sushi_logo.png" alt="logo" class="logo" width="150px" height="50px"></div>

                <div class="header-box2">
                    <nav class="main-nav">
                        <ul>
                            <li><a href="adminReports.php"><b>reports</b></a></li>
                            <li><a href="adminMenu.php"><b>menu</b></a></li>
                            <li><a href="adminEnquiries.php"><b>enquiries</b></a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="header-box3">
                    <nav class="main-nav">
                        <a id="cart" href="adminLogin.php"><img src="assets/nav/logout-icon.jpg" width="50px" height="50px" style="margin-top: 4px; margin-left: 50px;"></a>
                        <!--<a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>-->
                    </nav>
                </div>          
            </div>
            </section>

            <div class="confirmation-main">

                <div id="cart-summary" display:"inline-block;"> 
                    <div id="cart-table" style="margin-top: 100px; width: 70%; margin-left: -150px;">
                    <table id="cart-details">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Item</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>

                    <?php
                    include './php/credentials.php';
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    ?>

                 <?php

                 $sql = "SELECT * FROM orders WHERE transaction_ID=".$transactionId;
                 $result = mysqli_query($conn, $sql);

                 if (mysqli_num_rows($result) > 0) {
                     // output data of each row
                     
                     while($row = mysqli_fetch_assoc($result)) {
                        $sql_1 = "SELECT * FROM menu WHERE id=".$row['menu_ID'];
                        $result_1 = mysqli_query($conn, $sql_1);
                        if (mysqli_num_rows($result_1) > 0) {
                            // output data of each row
                            
                            while($row_menu = mysqli_fetch_assoc($result_1)) {
                                echo
                                "
                                <tr>
                                <td><img src='".$row_menu['imgURL']."'></td>
                                <td>".$row_menu['name']."</td>
                                ";
                            }
                         }

                        echo
                        "
                        <td>".$row['quantity']."</td>
                        </tr>
                        ";
                     }
                 }
                 
                 
                 ?>

                        </tbody>
                    </table>
                    </div>

                    <div id="payment-made" style="display: inline-block; width: 30%;">
                        <table id="summary-details" class="table-center" style="text-align: left; margin-top: 80px;">
                            <tbody>
                                <tr><td><h2>payment : </h2></td></tr>
                                <tr>
                                    <td><h2>
                                    <?php 
                                    $sql_2 = "SELECT * FROM transaction WHERE id=".$transactionId;
                                    $result_2 = mysqli_query($conn, $sql_2);
                   
                                    if (mysqli_num_rows($result_2) > 0) {
                                       // output data of each row
                                       
                                       while($row_transaction = mysqli_fetch_assoc($result_2)) {
                                           echo $row_transaction['price'];
                                       }
                                    }
                                    ?></h2></td>   
                                </tr>
                                <tr style="margin-top: 50px;">
                                    <td><a href="./adminReports.php" class="back-button" style="width: 200px;">BACK</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <section>
            <div class="footer">
                <div id="icons">
                    <a href="#"><img src="assets/footer/fb_icon.jpg"></a>
                    <a href="#"><img src="assets/footer/pinterest_icon.jpg"></a>
                    <a href="#"><img src="assets/footer/snapchat_icon.jpg"></a>
                    <a href="#"><img src="assets/footer/spotify_icon.jpg"></a>
                </div>
                <div id="copyright">
                    <i>&copy; The Sushi Bar All Rights Reserved</i>
                </div>
            </div>
            </section>

        </div>

    </body>

</html>