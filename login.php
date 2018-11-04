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
            <div id="landing-contents">
                <table class="table-center">
                    <tr>
                        <th><h2 style="padding-top: 70px;">Login</h2></th>
                    </tr>
                    <form action="./php/processLogin.php" method="post">
                    <tr>
                        <td><p style="margin-top: 30px; text-align: left;"><b>Email</b></p></td>
                    </tr>
                    <tr>
                        <td><input type="email" class="input-text" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td><p style="text-align: left;"><b>Password</b></p></td>
                    </tr>
                    <tr>
                        <td><input type="password" class="input-text" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="submit" value="LOG IN" style="margin-top: 50px; text-align: center;"><br></td>
                    </tr>
                    <tr>
                    <td><a href="./signup.php" class="back-button" style="margin-top: 15px; width: 220px;">SIGN UP</a></td>   
                    </tr>
                    </form>
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
