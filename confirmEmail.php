<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/sushi.css">
        <meta charset="utf-8">
        <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans');</style>
        <script type="text/javascript" src="./scripts/confirmEmail.js"></script>
    </head>

    <body>   
	    <div class="container">
            <div id="landing-contents">
                <div id="landing-login">
                    <img src="./assets/login/logo.png"><hr>
                    <h3 style="color: gray; margin-bottom: 40px;">Please insert the 4-digit OTP we sent to your email.</h3>
                    <form action="checkOTP.php" method="post">
                        <input type="text" class="otp" id="otp" maxLength="1" size="1" min="0" max="9" onchange="checkOTP()" style="margin-left: 320px; text-align: center;">
                        <input type="text" class="otp" id="otp" maxLength="1" size="1" min="0" max="9" onchange="checkOTP()" style="margin-left: 30px; text-align: center;">
                        <input type="text" class="otp" id="otp" maxLength="1" size="1" min="0" max="9" onchange="checkOTP()" style="margin-left: 30px; text-align: center;">
                        <input type="text" class="otp" id="otp" maxLength="1" size="1" min="0" max="9" onchange="checkOTP()" style="margin-left: 30px; text-align: center;">
                        <hr style="border: 0;">
                        <input type="submit" class="submit" style="text-align: center; margin-top: 50px;" value="VERIFY EMAIL">
                    </form> 
                    <a href="./signup.php" class="back-button" style="margin-top: 15px; width: 220px;">BACK TO SIGN UP</a>    
                </div>
                <div id="landing-image"><img src="./assets/login/cover1f.jpg"></div>
            </div>
	    </div>
    </body>
</html>
