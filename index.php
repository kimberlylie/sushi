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
            
            <div id="home-main">
                <div id="slideshow-container" style="background-color: #F5F4F0">
                    <div class="carousel-wrapper">
                        <span id="item-1"></span>
                        <span id="item-2"></span>
                        <span id="item-3"></span>
                        <div class="carousel-item item-1">
                            <a class="arrow arrow-prev" href="#item-3"></a>
                            <a class="arrow arrow-next" href="#item-2"></a>
                        </div>
                        
                        <div class="carousel-item item-2">
                            <a class="arrow arrow-prev" href="#item-1"></a>
                            <a class="arrow arrow-next" href="#item-3"></a>
                        </div>
                        
                        <div class="carousel-item item-3">
                            <a class="arrow arrow-prev" href="#item-2"></a>
                            <a class="arrow arrow-next" href="#item-1"></a>
                        </div>
                    </div>
                </div>

                <div id="index-services">
                    <h1>Our Services</h1>
                    <div class="services-card">
                        <img src="./assets/home/food_delivery.jpg">
                        <br><h3>Fast delivery</h3><br>
                        < 30 minutes guaranteed, or meal will be free.
                    </div>
                    <div class="services-card">
                        <img src="./assets/home/fresh_food.jpg">
                        <br><h3>Fresh products</h3><br>
                        Air-flown from Tsukijii Market, Tokyo, Japan.
                    </div>
                    <div class="services-card">
                        <img src="./assets/home/catering.jpg">
                        <br><h3>Catering services</h3><br>
                        Feel free to contact us for a quote!                   
                    </div>
                </div>

                <div id="index-review">
                    <h3><i>"10/10 would recommend" - Gordon Ramsay</i></h3>
                    <a href="./menu.php" class="submit" style="margin-top: 20px; margin-bottom: 30px;">BUY NOW</a>
                </div>

                <div id="index-roots">
                    <div class="index-half">
                        <h2>our roots</h2>
                        <p style="padding-top: 20px;">We hail from the Tsukiji Market, <br>and have relocated to Singapore, <br>to share the gastronomic delight<br> sushi can offer.</p>
                    </div>
                    <div class="index-half"><img src="./assets/home/roots.jpg" width="50%" height="50%"></div>
                </div>

                <div id="index-chef">
                    <div class="index-half"><img src="./assets/home/chef.jpg" width="50%" height="50%"></div>
                    <div class="index-half">
                        <h2 style="padding-top: 20px;">meet jiro morimoto, head chef</h2>
                        <p style="padding-top: 20px;">The guy who revolutionized <br>sushi delivery. He believes <br>that everyone deserves<br> quality sushi from Japan.</p>
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
