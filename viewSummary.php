<!DOCTYPE html>
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
                            <th></th>
                            <th>Item</th>
                            <th>Quantity</th>
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
                                                $itemNoId = 'itemNo'.$rowId;
                                                $deleteId ='delete'.$rowId;
                                                $saveId ='save'.$rowId;

                                                //echo'<form action="./php/saveChange.php" method="post">';

                                                echo "<tr id='".$rowId."'>";


                                                echo "<td class='td-center'><img src=".$row['imgURL']."><input type='number' class='input-number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" ></td>";

                                                echo "<td class='td-left'>" .$row['name']. "</td>";

                                                echo "<td>" .$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]. "</td>";
                                                //echo '<td><input type="number" class="input-number" style="background-color: #F5F4F0;" name="quantityId" value='.$_SESSION['quantity'][$i].' id="quantityId" onchange="';
                                                //echo "updateCart('".$rowId."','".$priceId."','".$totalPriceId."','".$saveId."')";
                                                //echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;">';
                                                //echo'<input type="submit" class="update" value="UPDATE" id="'.$saveId.'" style="display:none">';
                                                echo '</td>';

                                                echo'</form>';

                                                $totalPrice = $row['price']*$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]];


                                                echo "<input type='number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" >";

                                                //echo'<input type="submit" class="delete" value="X" id="'.$deleteId.'">
                                                //</form></td>';
                                                
                                                echo "</tr>";

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
                                    <td style="text-align: left; margin-right: 190px; margin-top: 50px;"><h3>payment</h3></td>
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
    <?php
        unset($_SESSION['cart']);
        unset($_SESSION['quantity']);
        unset($_SESSION['customer']);
    ?>
</html>