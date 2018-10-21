<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="stylesheet" href="sushi.css">
        <meta charset="utf-8">
    </head>
    <script type="text/javascript" src="scripts/cart.js"></script>
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
                    $item=array();
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        $i=0;
                        while($row = mysqli_fetch_assoc($result)) {
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];;
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
            <table border="1">
                        <thead>
                        <tr>
                        <th></th>
                            <th>Item</th>
                            <th>price/unit</th>
                            <th>quantity</th>
                            <th>total price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
               
               for ($i=0; $i<count($_SESSION['cart']); $i++)
               {

                   if ($_SESSION['cart'][$i][1]>0)
                   {   
/*                             $rowId ='ItemWithId' .$_SESSION['cart'][$i][0];
                       $quantityId = 'quantity'.$rowId;
                       echo "<tr id='".$rowId."'>";
                       echo "<td>" .$_SESSION['cart'][$i][0]. "</td>";
                       echo '<td><input type="number" name="'.$quantityId.'" value='.$_SESSION['cart'][$i][1].' id="'.$quantityId.'" onchange="';
                       echo "checkQuantity('".$quantityId."','".$rowId."')";
                       echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;"></td>';
                       echo "</tr>"; */
                       $sql = "SELECT * FROM menu where id=".$_SESSION['cart'][$i][0];
                       $result = mysqli_query($conn, $sql);
                       $item=array();
                       if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) 
                           {
                               $rowId ='ItemWithId' .$_SESSION['cart'][$i][0];
                               $quantityId = 'quantity'.$rowId;
                               $priceId ='price'.$rowId;
                               $totalPriceId ='totalPrice'.$rowId;
                            
                               echo "<tr id='".$rowId."'>";

                               echo "<td><img src=".$row['imgURL']."></td>";
                               echo "<td>" .$row['name']. "</td>";
                               echo "<td id='".$priceId."'>" .$row['price']. "</td>";
                               

                               echo '<td><input type="number" name="'.$quantityId.'" value='.$_SESSION['cart'][$i][1].' id="'.$quantityId.'" onchange="';
                               echo "updateCart('".$quantityId."','".$rowId."','".$priceId."','".$totalPriceId."')";
                               echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;"></td>';

                               $totalPrice = $row['price']*$_SESSION['cart'][$i][1];

                               echo "<td id='".$totalPriceId."'>".$totalPrice."</td>";
                               echo "</tr>";

                           }
                       }


                   }
                   

               }
           ?>
        </div>
        
    </body>
</html>


