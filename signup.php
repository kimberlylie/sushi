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
            <div id="landing-contents">
                <div id="landing-login">
                    <img src="./assets/index/logo.png"><hr>
                    <table id="signup-table">
                        <form action="verifyEmail.php" method="post">
                            <tr>
                                <td><p><b>first name</b></p><input type="text" name="firstName" class="input-text" id="firstName" placeholder="John" onchange="checkFirstName()" style="background-color: #fff; width: 250px;" required></td>
                                <td></td>
                                <td><p style="margin-left: 60px;"><b>last name</b></p><input type="text" name="lastName" class="input-text" id="lastName" placeholder="Doe" onchange="checkLastName()" style="background-color: #fff; margin-left: 60px; width: 250px;"></td>
                            </tr>
                            <tr>
                                <td><p><b>email</b></p><input type="email" name="email" class="input-text" id="email" placeholder="john.doe@gmail.com" onchange="checkEmail()" style="background-color: #fff; width: 250px;" required></td>
                                <td></td>
                                <td><p style="margin-left: 60px;"><b>phone no.</b></p><input type="text" name="phone" class="input-text" id="phone" onchange="checkPhone()" style="background-color: #fff; margin-left: 60px; width: 250px;" required></td>
                            </tr>
                            <tr>
                                <td><p><b>address</b></p><input type="text" name="address" class="input-text" id="address" placeholder="#B2-54 24 Nanyang Avenue" onchange="checkAddress()" style="background-color: #fff; width: 250px;" required></td>
                                <td></td>
                                <td><p style="margin-left: 60px;"><b>postal code</b></p><input type="text" name="zip" class="input-text" id="zip" placeholder="6 digits" onchange="checkZIP()" style="background-color: #fff; margin-left: 60px; width: 250px;" required></td>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="submit" class="submit" value="SIGN UP" style="width: 100%; margin-left: 0px; margin-top: 60px; text-align: center;"></td>
                            </tr>  
                            <tr>
                                <td colspan="3"><a href="./index.php" class="back-button" style="margin-left: 0px; margin-top: 15px; width: 540px;">LOG IN</a></td>
                            </tr>                            
                        </form> 
                    </table> 
                </div>
                <div id="landing-image"><img src="./assets/index/cover1.jpg"></div>
            </div>
	    </div>
    </body>
</html>
