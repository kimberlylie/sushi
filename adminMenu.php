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
<?php
if (!isset($_SESSION['menuType']))
{
    $_SESSION['menuType']="";
}
if (isset($_POST['type']))
{
    $_SESSION['menuType']=$_POST['type'];
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
        <style>
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: url('OpenSans-Regular.ttf') format('truetype');
            }
        </style>
        
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
        
            <div class="cart-main">
                <!--<div id="cart-table">-->
            
                
                <table id="history-table" style="width: 80%;">
                        <thead>
                            <tr>
                                <th colspan="4"><h2 style="text-align: left;">menu items</h2></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="margin-bottom: 30px;"> 
                            
                                <script type="text/javascript" src="scripts/adminReports.js"></script>
                                    <th colspan="3">
                                    <form action="adminMenu.php" method="post">
                                        <label style="display: inline-block; margin-right: 30px; margin-bottom: 20px;">Type : </label>
                                        <div class="select-style2" style="display: inline-block;">
                                            <select name="type" id="type" onchange="updateDate('go');" >
                                            <option value=""<?php if ($_SESSION['menuType']==""){echo " selected ";}?>>All</option>
                                            <option value="Gunkan"<?php if ($_SESSION['menuType']=="Gunkan"){echo " selected ";}?>>Gunkan</option>
                                            <option value="Maki"<?php if ($_SESSION['menuType']=="Maki"){echo " selected ";}?>>Maki</option>
                                            <option value="Sets"<?php if ($_SESSION['menuType']=="Sets"){echo " selected ";}?>>Sets</option>
                                            <option value="Nigiri"<?php if ($_SESSION['menuType']=="Nigiri"){echo " selected ";}?>>Nigiri</option>
                                            <option value="Don"<?php if ($_SESSION['menuType']=="Don"){echo " selected ";}?>>Don</option>
                                            </select>
                                        </div>
                                        <input type="submit" class="go" value="GO" id="go" style="display:none">
                                        </form>
                                    </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                               
                            </tr>
                            <tr>
                                <th></th>
                                <th> item name</th>
                                <th>price</th>
                                <th>details</th>
                                <th>availability</th>
                                <th></th>
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
                        $sql_1 = "SELECT * FROM menu WHERE type LIKE '%".$_SESSION['menuType']."%'";
                        $result = mysqli_query($conn, $sql_1);


                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                                
                                
                                // <form action="./php/editMenu.php" method="post">
                                     echo'
                                        <tr>
                                        <td><img src="'.$row['imgURL'].'"></td>
                                        <td>'.$row['name'].'</td>
                                        <td><input class="input-number" type="number" align="left" id="price'.$row['id'].'" name="price'.$row['id'].'" style=" text-align:left; background-color: #f4f5f0; margin-left: 0px;    " form="form'.$row['id'].'"  value='.$row['price'].' onchange="updateDate(\'go'.$row['id'].'\');"></td>
                                        <td style="padding-top: 20px;"><textarea class="input-textarea" id="description'.$row['id'].'" name="description'.$row['id'].'" style=" text-align:left;" form="form'.$row['id'].'" onchange="updateDate(\'go'.$row['id'].'\');"> '.$row['description'].'</textarea></td>

                                        
                                        <td>
                                        <div class="select-style2">
                                        <select name="availability'.$row['id'].'" id="availability'.$row['id'].'" onchange="updateDate(\'go'.$row['id'].'\');"  form="form'.$row['id'].'" required >
                                        <option value="1"'; if ($row['availability']==1){echo " selected ";}echo'>Available</option>
                                        <option value="0"'; if ($row['availability']==0){echo " selected ";}echo'>Unavailable</option>
                                        </select>
                                        </div>
                                        </td>
                                        
                                        <td>
                                        <form  name="form'.$row['id'].'" id="form'.$row['id'].'" action="./php/editMenu.php" method="post">
                                        <input type="number" id="menuID" name="menuID" style="display: none" value='.$row['id'].'>
                                        <input type="submit" class="update" value="UPDATE" id="go'.$row['id'].'" style="display:none">
                                        </form>
                                        </td>

                                        </tr>'
                                        // </form>
                                ;
            
                            }
                        }
                        ?>

                        </tbody>
                    </table>
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


