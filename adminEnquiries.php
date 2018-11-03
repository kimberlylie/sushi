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
if (!isset($_SESSION['enquiriesType']))
{
    $_SESSION['enquiriesType']="";
}
if (isset($_POST['type']))
{
    $_SESSION['enquiriesType']=$_POST['type'];
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
        <script type="text/javascript" src="scripts/cart.js"></script>
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
                            <!--<a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>-->
                        </nav>
                    </div>  
            </div>
            </section>
        
            <div class="cart-main">
                <table id="history-table" style="width: 80%;">
                    <thead>
                    <tr>
                        <th colspan="3"><h2 style="text-align: left;">enquiries list</h2></th>
                        <th></th>
                    </tr>
                    

                    <tr style="margin-bottom: 30px;"> 
                            
                                <script type="text/javascript" src="scripts/adminReports.js"></script>
                                    <th colspan="3">
                                    <form action="adminEnquiries.php" method="post">
                                        <label style="display: inline-block;">Type : </label>
                                        <div class="select-style2" style="display: inline-block; margin-left: 30px; margin-bottom: 20px;">
                                            <select name="type" id="type" onchange="updateDate('go');" >
                                            <option value=""<?php if ($_SESSION['enquiriesType']==""){echo " selected ";}?>>All</option>
                                            <option value="feedback"<?php if ($_SESSION['enquiriesType']=="feedback"){echo " selected ";}?>>feedback</option>
                                            <option value="catering"<?php if ($_SESSION['enquiriesType']=="catering"){echo " selected ";}?>>catering</option>
                                            <option value="others"<?php if ($_SESSION['enquiriesType']=="others"){echo " selected ";}?>>others</option>
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
                                
                                <th>name</th>
                                <th>email</th>
                                <th>subject</th>
                                <th>message</th>
                                
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
                        $sql_1 = "SELECT * FROM feedback WHERE subject LIKE '%".$_SESSION['enquiriesType']."%'";
                        $result = mysqli_query($conn, $sql_1);


                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                                
                                
                                // <form action="./php/editMenu.php" method="post">
                                     echo'
                                        <tr>
                                        <td>'.$row['name'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['subject'].'</td>
                                        <td>'.$row['message'].'</td>
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


