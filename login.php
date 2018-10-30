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
                <!--<div id="landing-image"><img src="./assets/login/cover2.jpg"></div>-->
                <!--<div id="landing-login">-->
                    <!--<img src="./assets/login/logo.png"><hr>-->
                    <h2 style="padding-top: 70px;">Login</h2>
                    <form action="processLogin.php" method="post">
                        <p style="margin-top: 30px; text-align: left; margin-left: 510px;"><b>Email</b></p><input type="email" class="input-text" name="email" id="email" style="margin-left: 510px;">
                        <p style="text-align: left; margin-left: 510px;"><b>Password</b></p><input type="password" class="input-text" name="password" id="password" style="margin-left: 510px;">
                        <input type="submit" class="submit" value="LOG IN" style="margin-top: 50px; text-align: center;"><br>
                    </form> 
                    <a href="./signup.php" class="back-button" style="margin-top: 15px; width: 220px;">SIGN UP</a>    
                <!--</div>-->
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
