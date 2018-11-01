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
            
            <div id="user-main">
                <div id="index-review" style="height: 80px;">
                    <h1>Hello, [Name] !</h1>
                </div>
                <div id="index-review" style="height: 400px; padding-top: 20px;">
                    <h2 style="text-align: left; margin-left: 100px; margin-bottom: 40px;">order history</h2>
                    <table id="history-table">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>date</th>
                                <th>total</th>
                                <th>details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>27 Oct 2018, 12:45</td>
                                <td>$190</td>
                                <td><a href="./viewSummary.php" class="submit" style="width: 30px">VIEW</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>28 Oct 2018, 01:17</td>
                                <td>$190</td>
                                <td><a href="./viewSummary.php" class="submit" style="width: 30px">VIEW</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr width="85%">
                <div id="index-review" style="height: 500px; padding-top: 20px;">
                    <div class="index-half" style="width: 70%;">
                        <table id="particulars-table" style="margin-left: 100px;">
                            <form action="updateDetails.php" method="post">
                            <tr>
                                <th colspan="2"><h2>your particulars</h2></th>
                                <th></th>
                            </tr>
                        
                            <tr>
                                <td colspan="3"><p><b>name</b></p><input type="text" name="firstName" class="input-text" id="firstName" placeholder="John Doe" onchange="checkFirstName();" style="width: 100%;" required></td>
                            </tr>
                            <tr>
                                <td><p><b>email</b></p><input type="email" name="email" class="input-text" id="email" placeholder="john.doe@gmail.com" onchange="checkEmail();" style="width: 250px;" required></td>
                                <td></td>
                                <td><p style="margin-left: 30px;"><b>phone no.</b></p><input type="text" name="phone" class="input-text" id="phone" onchange="checkPhone();" style="margin-left: 30px; width: 250px;" required></td>
                            </tr>
                            <tr>
                                <td><p><b>address</b></p><input type="text" name="address" class="input-text" id="address" placeholder="#B2-54 24 Nanyang Avenue" onchange="checkAddress();" style="width: 250px;" required></td>
                                <td></td>
                                <td><p style="margin-left: 30px;"><b>postal code</b></p><input type="text" name="zip" class="input-text" id="zip" placeholder="6 digits" onchange="checkZIP();" style="margin-left: 30px; width: 250px;" required></td>
                            </tr>

                            <tr>
                                <td colspan="3"><input type="submit" class="submit" value="UPDATE PARTICULARS" style="width: 99%; margin-left: 0px; margin-top: 60px; text-align: center;"></td>
                            </tr>                            
                        </form> 
                    </table> 
                    </div>
                    <div class="index-half" style="width: 30%; text-align: left; margin-top: 10px; margin-bottom: 20px;">
                        <h2>change password</h2>
                        <form action="login.php" method="post">
                            <p style="margin-top: 32px;"><b>old password</b></p><input type="password" class="input-text" style="width: 260px;" name="oldpassword" id="oldpassword">
                            <p style="margin-top: 25px;"><b>new password</b></p><input type="password" class="input-text" style="width: 260px;" name="password" id="password">
                            <p style="margin-top: 25px;"><b>confirm password</b></p><input type="password" class="input-text" style="width: 260px;;" name="cpassword" id="cpassword">
                            <input type="submit" class="submit" value="CHANGE PASSWORD" style="margin-top: 64px; text-align: center;"><br>
                        </form> 
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
