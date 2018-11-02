<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/sushi.css">
        <meta charset="utf-8">
        <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans');</style>
        <script type="text/javascript" src="./scripts/signup.js"></script>
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
            <div id="landing-contents" style="height: 700px">
                <!--<div id="landing-login">-->
                    <!--<img src="./assets/login/logo.png" style="margin-top: 60px;"><hr>-->
                    <table id="signup-table" class="table-center2">
                        <form action="./php/addMember.php" method="post">
                            <tr>
                                <th colspan="3"><h2 style="padding-top: 60px; text-align: center;">Sign up</h2></th>
                            </tr>
                            <tr>
                                <td colspan="3"><p style="text-align: left;"><b>name</b></p><input type="text" name="firstName" class="input-text" id="firstName" placeholder="John Doe" onchange="checkFirstName();" style="width: 100%;" required></td> 
                            </tr>

                            <tr>
                                <td><p style="text-align: left;"><b>email</b></p><input type="email" name="email" class="input-text" id="email" placeholder="john.doe@gmail.com" onchange="checkEmail();" style="width: 250px;" required></td>
                                <td></td>
                                <td><p style="text-align: left; margin-left: 30px;"><b>phone no.</b></p><input type="text" name="phone" class="input-text" id="phone" onchange="checkPhone();" style="margin-left: 30px; width: 250px;" required></td>
                            </tr>

                            <tr>
                                <td><p style="text-align: left;"><b>address</b></p><input type="text" name="address" class="input-text" id="address" placeholder="#B2-54 24 Nanyang Avenue" onchange="checkAddress();" style="width: 250px;" required></td>
                                <td></td>
                                <td><p style="text-align: left; margin-left: 30px;"><b>postal code</b></p><input type="text" name="zip" class="input-text" id="zip" placeholder="6 digits" onchange="checkZIP();" style="margin-left: 30px; width: 250px;" required></td>
                            </tr>

                            <tr>
                                <td><p style="text-align: left;"><b>password</b></p><input type="password" name="password" class="input-text" id="password" onchange="checkPassword();"  style="width: 250px;" required></td>
                                <td></td>
                                <td>
                                    <p style="text-align: left; margin-left: 30px;"><b>confirm password</b></p><input type="password" name="cpassword" class="input-text" id="cpassword" onchange="checkPassword();" style="margin-left: 30px; width: 250px;" required> 
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><p  style="text-align: left; margin-left: 30px;" id="message"></p></td>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="submit" class="submit" value="SIGN UP" style="width: 99%; margin-left: 0px; margin-top: 60px; text-align: center;"></td>
                            </tr>  
                            <tr>
                                <td colspan="3"><a href="./login.php" class="back-button" style="margin-left: 0px; margin-top: 15px; width: 495px;">LOG IN</a></td>
                            </tr>                            
                        </form> 
                    </table> 
                <!--</div>-->
                <!--<div id="landing-image"><img src="./assets/login/cover1.jpg"></div>-->
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
