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
                    <li><a href="index.php">home</a></li>
                    <li><a href="menu.php">menu</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
                <a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>
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
                            <th></th>
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
                                                $itemNoId = 'itemNo'.$rowId;
                                                $deleteId ='delete'.$rowId;
                                                $saveId ='save'.$rowId;

                                                echo'<form action="./php/saveChange.php" method="post">';

                                                echo "<tr id='".$rowId."'>";


                                                echo "<td><img src=".$row['imgURL']."><input type='number' value=".$i." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" ></td>";

                                                echo "<td>" .$row['name']. "</td>";

                                                echo "<td id='".$priceId."'>" .$row['price']. "</td>";  

                                                echo '<td><input type="number" name="quantityId" value='.$_SESSION['cart'][$i][1].' id="quantityId" onchange="';
                                                echo "updateCart('".$rowId."','".$priceId."','".$totalPriceId."','".$saveId."')";
                                                echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;">';
                                                echo'<input type="submit" value="Save" id="'.$saveId.'" style="display:none">';
                                                echo '</td>';

                                                echo'</form>';

                                                $totalPrice = $row['price']*$_SESSION['cart'][$i][1];

                                                echo "<td id='".$totalPriceId."'>".$totalPrice."</td>";
                                                echo'<td><form action="./php/deleteCartEntry.php" method="post">';

                                                echo "<input type='number' value=".$i." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" >";

                                                echo'<input type="submit" value="delete" id="'.$deleteId.'">
                                                </form></td>';
                                                
                                                echo "</tr>";

                                            }
                                        }


                                    }
                                        else
                                        {
                                            $_SESSION['cart'][$i][1]=0;
                                        }
                   

                                }
                             ?>
                    </tbody>
        </table>
        <form action="./php/proceedToCheckOut.php" method="post">
        <input type="submit" value="Proceed to Checkout">
        </form>
        </div>
        
    </body>
</html>


