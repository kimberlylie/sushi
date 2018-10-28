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
                            <a id="cart" href="login.php"><img src="assets/nav/logout-icon.jpg" width="50px" height="50px" style="margin-top: 4px; margin-left: 50px;"></a>
                            <!--<a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>-->
                        </nav>
                    </div>  
            </div>
            </section>
        
            <div class="cart-main">
                <div id="cart-table">
            
                <h2 style="text-align: left; margin-left: 40px; padding-top: 40px;">enquiries list</h2>
                <table id="cart-details">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>subject</th>
                        <th>message</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>                      
                        <tr>
                            <td>[Name]</td>
                            <td>[Email]</td>
                            <td>[Subject]</td>
                            <td>[Message]</td>
                            <td>[reply]</td>
                        </tr>
                        <tr>
                            <td>[Name]</td>
                            <td>[Email]</td>
                            <td>[Subject]</td>
                            <td>[Message]</td>
                            <td>[reply]</td>
                        </tr>
                        <tr>
                            <td>[Name]</td>
                            <td>[Email]</td>
                            <td>[Subject]</td>
                            <td>[Message]</td>
                            <td>[reply]</td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <div id="order-summary" style="text-align: left; padding-top: 40px; margin-top: 60px;">
                    <form action="replyMessage.php" method="post">
                        <p style="margin-top: 10px;"><b>to: </b>[email]</p>
                        <p style="margin-top: 10px;"><b>message</b></p><textarea name="description" style="width: 260px;" class="input-textarea" id="description" rows="10" cols="40" required></textarea><br>
                        <input type="submit" class="submit" value="SEND" style="width: 260px; margin-top: 30px; text-align: center;"><br>
                    </form> 
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


