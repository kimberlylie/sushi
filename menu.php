<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="stylesheet" href="sushi.css">
        <meta charset="utf-8">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Barlow|Fira+Sans+Condensed|Hind+Guntur|Karla|KoHo|Libre+Franklin|Noto+Sans+KR|Noto+Serif+KR');
        </style>
    </head>

    <body>   
	    <div class="container">
            <section>
            <div id="header">
                <div id="nav-container">
                    
                    <img src="assets/nav/sushi_logo.png" alt="logo" class="logo" width="150px" height="50px">
                    
                    <nav class="main-nav">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="menu.php">menu</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                    <a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>
                    </nav>
                    
                </div>
            </div>
            </section>
            
            <!--<div id="menu-nav-container">
                <nav class="menu-nav">
                <ul>
                    <li><a href="#maki">maki</a></li>
                    <li><a href="#nigiri">nigiri</a></li>
                    <li><a href="#sashimi">sashimi</a></li>
                    <li><a href="#don">don</a></li>
                    <li><a href="#gunkan">gunkan</a></li>
                </ul>
                </nav>
            </div>-->


<?php
include './php/credentials.php';


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// quantity of iced cappuccino double
$sql = "SELECT * FROM menu";
$result = mysqli_query($conn, $sql);
$items=array();
$itemsName=array();
$price = array();
$image = array();
$id=array();

if (mysqli_num_rows($result) > 0) {
	// output data of each row
	$i=0;
	while($row = mysqli_fetch_assoc($result)) {
        $id[$i]=$row['id'];
        $itemsName[$i]=$row['name'];
        $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
        $price[$i] = $row['price'];
        $image[$i]= $row['imgURL'];
		$i=$i+1;
	}
}



if (!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
    for ($i=0; $i<count($items); $i++)
    {
        $_SESSION['cart'][$i]=array($id[$i],0);
    }
}

?>


            <div id="menu-list-container">
                <ul>
                <?php
                for ($i=0; $i<count($items); $i++)
                {
                echo
                '<li>
                <div id="'.$items[$i].'container" onclick="';
                echo "modalFunc('".$itemsName[$i]."',".$price[$i].",'".$image[$i]."',".$i.")";
                echo
                '"><img src="'.$image[$i].'"><p>'.$itemsName[$i].'</p>
                <div> 
                </li>';
                }
                ?>
                </ul>
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


             <div id="myModal" class="modal">
                <div class="modal-content">
                <form action="./php/add_to_cart.php" method="post">
                    <div id="modal-picture"><img src="assets/menu/dummy.jpg"></div>
                    <div id="modal-details">
                        <span class="close">&times;</span>
                        <div id="modal-item-name"><h1>Item Name</h1></div><br>
                        <div id="modal-item-price"><h3>Item Price</h3></div>
                        <div id="modal-item-description"><h6>Description</h6></div>
                        <input type="number" value=0 id="itemNo" name="itemNo" >
                        <hr>
                       
                        Quantity: <input type="number" name="quantity" value=0 id="quantity" style="width:50px; margin-bottom: 30px; margin-top: 30px;"><br>
                        <input type="submit" value="Add to cart">
                        
                    </div>
                </form>    
                </div>
            </div> 


	    </div>
    </body>
</html>
<script type="text/javascript" src="scripts/menu.js"></script>
