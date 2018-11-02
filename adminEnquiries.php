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
                            <a id="cart" href="adminLogin.php"><img src="assets/nav/logout-icon.jpg" width="50px" height="50px" style="margin-top: 4px; margin-left: 50px;"></a>
                            <!--<a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>-->
                        </nav>
                    </div>  
            </div>
            </section>
        
            <div class="cart-main">
                <table id="cart-details">
                    <thead>
                    <tr>
                        <th colspan="3"><h2 style="text-align: left; padding-top: 40px;">enquiries list</h2></th>
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
                        <tr>
                            <td>[Name]</td>
                            <td>[Email]</td>
                            <td>[Subject]</td>
                            <td>[Message]</td>
                        </tr>
                        <tr>
                            <td>[Name]</td>
                            <td>[Email]</td>
                            <td>[Subject]</td>
                            <td>[Message]</td>
                        </tr>
                        <tr>
                            <td>[Name]</td>
                            <td>[Email]</td>
                            <td>[Subject]</td>
                            <td>[Message]</td>
                        </tr>
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


