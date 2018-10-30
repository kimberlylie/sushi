<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/sushi.css">
        <meta charset="utf-8">
        <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans');</style>
        <script type="text/javascript" src="./scripts/buttonTop.js"> </script>
    </head>

    <body>   
	    <div class="container">
            
            <button onclick="topFunction()" id="button-top" title="Go to top"><img src="./assets/menu/buttonTop.png"></button>  
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
            
            <div id="menu-content">
                <div id="menu-nav-container">
                    <ul>
                        <li><a href="#maki">maki</a></li>
                        <li><a href="#nigiri">nigiri</a></li>
                        <li><a href="#sets">sets</a></li> 
                        <li><a href="#don">don</a></li> 
                        <li><a href="#gunkan">gunkan</a></li>
                    </ul>
                </div>
                <div id="menu-list-container">

                <?php
                                    $items=array();
                                    $itemsName=array();
                                    $price = array();
                                    $image = array();
                                    $id=array();
                                    $i=0;
                                    $k = 0;
                ?>
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

                    $sql = "SELECT * FROM menu WHERE type='Maki'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                        }
                    }
                    ?>
           
                    <?php
                        echo '<div id="maki" style="padding-top: 20px;">';
                        //echo '<h1>Maki</h1>';

                       $c = 0;
                       for ($i=0; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                        
                    ?>
                <!--</div>-->
                <?php

                    $sql = "SELECT * FROM menu WHERE type='Nigiri'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="nigiri" style="padding-top: 20px;">';
                        //echo '<h1>Nigiri</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>

                    <?php

                    $sql = "SELECT * FROM menu WHERE type='Sets'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="sets" style="padding-top: 20px;">';
                        //echo '<h1>Sets</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>                    

                    <?php

                    $sql = "SELECT * FROM menu WHERE type='Don'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="don" style="padding-top: 20px;">';
                        //echo '<h1>Don</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>

                    <?php

                    $sql = "SELECT * FROM menu WHERE type='Gunkan'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="gunkan" style="padding-top: 20px;">';
                        //echo '<h1>Gunkan</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>

                    <?php
                    
                    if (!isset($_SESSION['cart']))
                    {
                        $_SESSION['cart'] = array();

                    }
                    ?>  

                    <?php
                    
                    if (!isset($_SESSION['quantity']))
                    {
                        $_SESSION['quantity'] = array();
                    }
                    ?>

                </div>
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                <form action="./php/add_to_cart.php" method="post">
                    <div id="modal-picture" class="modal-col1"><img src="assets/menu/dummy.jpg"></div>

                    <div id="modal-details" class="modal-col2">
                        <div id="modal-item-name"><h1>Item Name</h1></div>
                        <div id="modal-item-price"><h2>Item Price</h2></div>
                        <div id="modal-item-description"><h4>Description</h4></div>
                        
                        <hr>
                        <h4>Quantity: </h4><input type="number" class="input-number" name="quantity" value=0 id="quantity" onchange="checkQuantity()">
                        <input type="number" value=0 id="itemId" name="itemId"><br>
                        <input type="submit" id="submit" class="submit" value="ADD TO CART">   
                    </div>

                    <div id="modal-close" class="modal-col3"><span class="close">&times;</span></div>
                </form>    
                </div>
            </div>

            <script type="text/javascript" src="scripts/menu.js"></script>

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
