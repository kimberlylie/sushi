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
        
            <div class="confirmation-main">

                <div id="cart-summary"> 
                    <div id="cart-table" style="margin-top: 30px; float: none;">
                    <table id="cart-details">
                        <thead>
                        <tr>
                            <th><a href="./user.php" class="back-button" style="width: 100px;">BACK</a></th>
                            <th></th>
                            <th></th>
                        </tr>
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

                    <div id="order-summary2" style="float: none; margin-left: 550px;">
                        <table id="summary-details">
                            <thead>
                                <th style="border-bottom: 1px solid #ddd;"></th>
                                <th style="border-bottom: 1px solid #ddd;"></th>
                                <th style="border-bottom: 1px solid #ddd;"></th>
                                <th style="border-bottom: 1px solid #ddd;"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: left; margin-right: 190px; margin-top: 50px;"><h3>payment: 
                                    <?php 
                                    $sql_2 = "SELECT * FROM transaction WHERE id=".$transactionId;
                                    $result_2 = mysqli_query($conn, $sql_2);
                   
                                    if (mysqli_num_rows($result_2) > 0) {
                                       // output data of each row
                                       
                                       while($row_transaction = mysqli_fetch_assoc($result_2)) {
                                           echo $row_transaction['price'];
                                       }
                                    }
                                    ?></h3></td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: left; margin-top: 50px;"><h3></h3></td>
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