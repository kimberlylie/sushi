<?php session_start(); ?>
<?php
                    
    if (!isset($_SESSION['customer']))
    {
    $_SESSION['customer'] = array('firstName'=>'','lastName'=>'','email'=>'','phone'=>'','address'=>'','zip'=>'','notes'=>'');
    }
?>  

<?php
if (!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();
}
?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/sushi.css">
        <meta charset="utf-8">
        <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans');</style>
        <script type="text/javascript" src="./scripts/checkout.js"> </script>
    </head>

    <body>   
	    <div class="container">

            <section>
            <div class="header">
                    
                    <div class="header-box1"><img src="assets/nav/sushi_logo.png" alt="logo" class="logo" width="150px" height="50px"></div>
                       
                    
                    <div class="header-box2">
                        <nav class="main-nav">
                            <ul>
                                <li><a href="index.php"><b>home</b></a></li>
                                <li><a href="menu.php"><b>menu</b></a></li>
                                <li><a href="contact.php"><b>contact</b></a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="header-box3">
                        <nav class="main-nav">
                            <a id="cart" href="user.php"><img src="assets/nav/user-icon.jpg" width="50px" height="50px"></a>
                            <a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>
                        </nav>
                    </div>  
            </div>
            </section>
        
            <div class="confirmation-main">
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
                $name=$_SESSION['customer']['firstName']." ".$_SESSION['customer']['lastName'];
                $address= $_SESSION['customer']['address'];
                $postalCode=$_SESSION['customer']['zip'];
                $email=$_SESSION['customer']['email'];
                $phone= $_SESSION['customer']['phone'];
                $note=$_SESSION['customer']['notes'];
                echo
                '<div id="confirmation-contact">
                    <h1>Thank you, your order has been submitted.</h1><hr>
                    <div id="shipping-details">
                        <p><b>Name:</b></p>
                        <p>'.$name.'</p><br>
                        <p><b>Address:</b></p>
                        <p>'.$address.'</p>
                        <p>Singapore, '.$postalCode.'</p>
                    </div>
                    <div id="email-details">
                        <p><b>an email has been sent to:</b></p>
                        <p>'.$email.'</p>
                    </div>
                </div>'

                ?>

                


                <div id="cart-summary"> 
                    <div id="cart-table" style="margin-top: 30px; float: none;">
                    <table id="cart-details">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Item</th>
                            <th>Item Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                                $allPrice=0;
                                for ($i=0; $i<count($_SESSION['cart']); $i++)
                                {
                                    
                                    if ($_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]>0)
                                    {   
                    /*                  $rowId ='ItemWithId' .$_SESSION['cart'][$i][0];
                                        $quantityId = 'quantity'.$rowId;
                                        echo "<tr id='".$rowId."'>";
                                        echo "<td>" .$_SESSION['cart'][$i][0]. "</td>";
                                        echo '<td><input type="number" name="'.$quantityId.'" value='.$_SESSION['cart'][$i][1].' id="'.$quantityId.'" onchange="';
                                        echo "checkQuantity('".$quantityId."','".$rowId."')";
                                        echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;"></td>';
                                        echo "</tr>"; */
                                        $sql = "SELECT * FROM menu where id=".array_keys($_SESSION['cart'])[$i];
                                        $result = mysqli_query($conn, $sql);
                                        $item=array();
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) 
                                            {
                                                $rowId ='ItemWithId' .array_keys($_SESSION['cart'])[$i];
                                                $quantityId = 'quantity'.$rowId;
                                                $priceId ='price'.$rowId;
                                                $totalPriceId ='totalPrice'.$rowId;
                                                $itemNoId = 'itemNo'.$rowId;
                                                $deleteId ='delete'.$rowId;
                                                $saveId ='save'.$rowId;

                                                //echo'<form action="./php/saveChange.php" method="post">';

                                                echo "<tr id='".$rowId."'>";


                                                echo "<td class='td-center'><img src=".$row['imgURL']."><input type='number' class='input-number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" ></td>";

                                                echo "<td class='td-left'>" .$row['name']. "</td>";

                                                echo "<td id='".$priceId."'>" .$row['price']. "</td>";  

                                                echo "<td>" .$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]. "</td>";
                                                //echo '<td><input type="number" class="input-number" style="background-color: #F5F4F0;" name="quantityId" value='.$_SESSION['quantity'][$i].' id="quantityId" onchange="';
                                                //echo "updateCart('".$rowId."','".$priceId."','".$totalPriceId."','".$saveId."')";
                                                //echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;">';
                                                //echo'<input type="submit" class="update" value="UPDATE" id="'.$saveId.'" style="display:none">';
                                                echo '</td>';

                                                echo'</form>';

                                                $totalPrice = $row['price']*$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]];

                                                echo "<td class='td-center' id='".$totalPriceId."'>".$totalPrice."</td>";
                                                //echo'<td class="td-center"><form action="./php/deleteCartEntry.php" method="post">';

                                                echo "<input type='number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" >";

                                                //echo'<input type="submit" class="delete" value="X" id="'.$deleteId.'">
                                                //</form></td>';
                                                
                                                echo "</tr>";
                                                $allPrice = $allPrice +$totalPrice;

                                            }
                                        }


                                    }
                                    else
                                    {
                                        $_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]=0;
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
                                    <td style="text-align: left; margin-right: 190px;">subtotal</td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: left;"><?php echo $allPrice ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; margin-right: 190px;">delivery</td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: left;">4</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; margin-right: 190px;">gst (7%)</td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: left;"><?php $gstPrice = $allPrice * 0.07; echo $gstPrice; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; margin-right: 190px; margin-top: 50px;"><h3>total</h3></td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: left; margin-top: 50px;"><h3><?php echo $allPrice + $gstPrice + 4; ?></h3></td>
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
    <?php
        unset($_SESSION['cart']);
        unset($_SESSION['quantity']);
        unset($_SESSION['customer']);
    ?>
</html>