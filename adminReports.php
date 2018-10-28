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
            
            <div id="admin-main">
                <div style="width: 80%; height: 500px; padding-top: 20px; display: inline-block; float: left;">
                    <h2 style="text-align: left; margin-left: 100px; margin-bottom: 40px;">daily sales report</h2>
                    <h3 style="text-align: left; margin-left: 100px; margin-bottom: 40px;"><i>[today's date]</i></h2>
                    <table id="history-table" style="width: 75%">
                        <thead>
                            <tr>
                                <th>category</th>
                                <th>quantity</th>
                                <th>sales amount</th>
                                <th>tax</th>
                                <th>total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>maki</td>
                                <td>6</td>
                                <td>190</td>
                                <td>13.3</td>
                                <td>203.3</td>
                            </tr>
                            <tr>
                                <td>gunkan</td>
                                <td>8</td>
                                <td>$190</td>
                                <td>13.3</td>
                                <td>203.3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="text-align: left; width: 20%; height: 500px; padding-top: 20px; display: inline-block; float: left;">
                    <div class="index-review" style="width: 100%;">
                        <h2>total income:</h2>
                        <h1><i>$1080</i></h1>
                    </div>
                    <div class="index-review" style="width: 100%; text-align: <left></left>; margin-top: 10px; margin-bottom: 20px;">
                        <h2>total orders:</h2>
                        <h1><i>15</i></h1>
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
