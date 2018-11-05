<?php 
session_start();
?>
<?php
if (!isset($_SESSION['admin']))
{
    echo "<script type='text/javascript'>
    window.location.href='./adminLogin.php'; 
    </script>"; 
}
?>  

<?php
if (!isset($_SESSION['filterDate']))
{
    $_SESSION['filterDate']="";
}
if (isset($_POST['date']))
{
    $_SESSION['filterDate']=$_POST['date'];
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
        <script type="text/javascript" src="./scripts/adminReports.js"></script>
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
                        <a id="cart" href="./php/adminLogout.php"><img src="assets/nav/logout-icon.jpg" width="50px" height="50px" style="margin-top: 4px; margin-left: 50px;"></a>
                    </nav>
                </div>          
            </div>
            </section>
            
            <div id="admin-main" style="height: 1000px;">
                <div style="width: 80%; height: 800px; padding-top: 20px; display: inline-block; float: left;">
                    
                    <table id="history-table" style="width: 75%">
                        <thead>
                            <tr>
                                <th colspan="3"><h2 style="text-align: left;">transactions log</h2></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="margin-bottom: 30px;"> 
                                <form action="adminReports.php" method="post">
                                    <th colspan="2">
                                        <label style="display: inline-block;">date : </label>
                                        <input type="date" class="datepicker" id="date" name="date" style="display: inline-block; margin-left: 30px;" <?php echo 'value="'.$_SESSION['filterDate'].'"' ?>onchange="updateDate('go');">
                                        <input type="submit" class="go" value="GO" id="go" style="display:none">
                                    </th>
                                    <th></th>
                                    <th></th>
                                </form>
                            </tr>
                            <tr>
                                <th>customer ID</th>
                                <th>address</th>
                                <th>postal code</th>
                                <th>revenue</th>
                                <th>details</th>
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
                        $sql_1 = "SELECT * FROM transaction WHERE date LIKE '%".$_SESSION['filterDate']."%' ORDER BY date DESC";

                        $result = mysqli_query($conn, $sql_1);

                        $totalRevenue = 0;
                        $order=0;
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                                echo
                                '
                                <tr>
                                <td>'.$row['customer_ID'].'</td>
                                <td>'.$row['ship_address'].'</td>
                                <td>'.$row['ship_postalCode'].'</td>
                                <td>'.$row['price'].'</td>
                                <td><form action="adminSummary.php" method="post"><input type="number" id="transactionID" name="transactionID" style="display: none" text-align:center; value='.$row['id'].'><input type="submit" class="submit" style="width: 80px" text-align:center; value="VIEW"></form></td>
                                </tr>
                                ';
                                $totalRevenue = $totalRevenue +$row['price'];
                                $order=$order+1;
                            }
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
                <div style="text-align: left; width: 20%; height: 500px; padding-top: 20px; display: inline-block; float: left;">
                    <div class="index-review" style="width: 100%;">
                        <h2>total income:</h2>
                        <h1><i><?php echo $totalRevenue; ?></i></h1>
                    </div>
                    <div class="index-review" style="width: 100%; text-align: <left></left>; margin-top: 10px; margin-bottom: 20px;">
                        <h2>total orders:</h2>
                        <h1><i><?php echo $order; ?></i></h1>
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
