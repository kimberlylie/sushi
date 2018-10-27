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
            <div id="landing-contents">
                <div id="landing-image"><img src="./assets/login/cover2.jpg"></div>
                <div id="landing-login">
                    <img src="./assets/login/logo.png"><hr>
                    <form action="login.php" method="post">
                        <p style="margin-top: 30px;"><b>Email</b></p><input type="email" class="input-text" style="background-color: #fff; margin-left: 190px; width: 260px;" name="email" id="email">
                        <p><b>Password</b></p><input type="password" class="input-text" style="background-color: #fff; margin-left: 190px; width: 260px;;" name="password" id="password">
                        <input type="submit" class="submit" value="LOG IN" style="margin-top: 50px; text-align: center;"><br>
                    </form> 
                    <a href="./signup.php" class="back-button" style="margin-top: 15px; width: 220px;">SIGN UP</a>    
                </div>
            </div>
	    </div>
    </body>
</html>
