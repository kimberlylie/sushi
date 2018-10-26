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
                <div id="landing-image"><h1>Welcome!</h1></div>
                <div id="landing-login">
                    <img src="assets/index/logo.png"><hr>
                    <form action="login.php" method="post">
                        <div id="login-input">
                            <p><b>Email</b></p><input type="email" class="input-text" style="background-color: #fff;" name="email" id="email">
                            <p><b>Password</b></p><input type="password" class="input-text" style="background-color: #fff;" name="password" id="password">
                        </div>
                        <input type="submit" class="submit" value="Log-in"><br>
                        <h5>Don't have an account with Sushi? <a href="signup.php">Sign up here!</a></h5>
                    </form>    
                </div>
            </div>
	    </div>
    </body>
</html>
