<?php session_start(); ?>
<?php
                    
                    if (!isset($_SESSION['customer']))
                    {
                        $_SESSION['customer'] = array('firstName'=>'','lastName'=>'','email'=>'','phone'=>'','address'=>'','zip'=>'','notes'=>'');

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
                    
                    <div class="header-box3"><nav class="main-nav"><a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a></nav></div>
                                   
            </div>
            </section>
        
            <div class="checkout-main">
                <div id="checkout-form">
                    <?php

                        include './php/credentials.php';


                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $allPrice = $_POST['allPrice'];
                    ?>
                
                    <table id="checkout-details">
                        <thead>
                        <tr>
                            <th style="border-bottom: 1px solid #ddd;"><h2 style="text-align: left;">checkout</h2></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
    

                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            echo
                            '<form action="./php/submitOrder.php" method="post">

                            <tr>
                                <td><p><b>first name</b></p><input type="text" name="firstName" value="'.$_SESSION['customer']['firstName'].'"class="input-text" id="firstName" placeholder="John" onchange="checkFirstName()" required></td>
                                <td></td>
                                <td><p><b>last name</b></p><input type="text" name="lastName"  value="'.$_SESSION['customer']['lastName'].'"class="input-text" id="lastName" placeholder="Doe" onchange="checkLastName()"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><p><b>email</b></p><input type="email" name="email" value="'.$_SESSION['customer']['email'].'" class="input-text" id="email" placeholder="john.doe@gmail.com" onchange="checkEmail()" required></td>
                                <td></td>
                                <td><p><b>phone no.</b></p><input type="text" name="phone"  value="+65'.$_SESSION['customer']['phone'].'"class="input-text" id="phone" onchange="checkPhone()"  required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><p><b>address</b></p><input type="text" name="address" value="'.$_SESSION['customer']['address'].'" class="input-text" id="address" placeholder="#B2-54 24 Nanyang Avenue" onchange="checkAddress()" required></td>
                                <td></td>
                                <td><p><b>postal code</b></p><input type="text" name="zip"  value="'.$_SESSION['customer']['zip'].'"class="input-text" id="zip" placeholder="6 digits" onchange="checkZIP()" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3"><p><b>notes</b></p><textarea name="notes" value="'.$_SESSION['customer']['notes'].'" class="input-textarea" id="notes" rows="4" cols="40" style="width: 100%;" placeholder="no wasabi, more soysauce, no. of chopsticks"></textarea></td> 
                                <td></td>
                                <td></td> 
                            </tr>
                            <tr>
                                <td><small>* pay by cash during food delivery.</small></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>  
                            <tr>
                                <td><a href="./cart.php" class="back-button">BACK TO CART</a></td>
                                <td></td>
                                <td><input type="submit" class="submit" value="SUBMIT ORDER" style="width: 100%;"></td>
                                <td></td>
                                <td></td>
                            </tr>  
                            </form>' ;
                            ?>                                                   
                        </tbody>
                    </table>
                </div>

                <div id="order-summary2">
                    <table id="summary-details">
                        <thead>
                            <th style="border-bottom: 1px solid #ddd;"><h2 style="text-align: left; margin-top: 65px;">order summary</h2></th>
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
                                <td style="text-align: left;"><?php $gstPrice = $allPrice * 0.3; echo $gstPrice; ?></td>
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



