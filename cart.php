<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="stylesheet" href="sushi.css">
        <meta charset="utf-8">
    </head>
    <body>   
	    
	    <header>
            <div class="container">
                
                <img src="assets/nav/sushi_logo.png" alt="logo" class="logo" width="150px" height="50px">
                
                <nav class="main-nav">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="menu.html">menu</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
                <a id="cart" href="cart.html"><img src="assets/nav/cart.png" width="50px" height="50px"></a>
                </nav>
                
            </div>
	    </header>
        
        <div class="cart-main">
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
            <table border="1">
                        <thead>
                        <tr>
                            <th>Item Description</th>
                            <th>quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                <?php
                    for ($i=0; $i < count($_SESSION['cart']); $i++)
                    {
                        if ($_SESSION['cart'][$i][1]>0)
                        {
                        echo "<tr>";
                        echo "<td>" .$_SESSION['cart'][$i][0]. "</td>";
                        echo '<td>'.$_SESSION['cart'][$i][1].'</td>';
                        echo "</tr>";
                        }
                    }
                ?>
        </div>
        
    </body>
</html>

