<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Sushi Bar SG</title>
        <link rel="stylesheet" href="sushi.css">
        <meta charset="utf-8">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Barlow|Fira+Sans+Condensed|Hind+Guntur|Karla|KoHo|Libre+Franklin|Noto+Sans+KR|Noto+Serif+KR');
        </style>
    </head>

    <body>   
	    <div class="container">
            <section>
            <div id="header">
                <div id="nav-container">
                    
                    <img src="assets/nav/sushi_logo.png" alt="logo" class="logo" width="150px" height="50px">
                    
                    <nav class="main-nav">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="menu.php">menu</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                    <a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>
                    </nav>
                    
                </div>
            </div>
            </section>
            
            <!--<div id="menu-nav-container">
                <nav class="menu-nav">
                <ul>
                    <li><a href="#maki">maki</a></li>
                    <li><a href="#nigiri">nigiri</a></li>
                    <li><a href="#sashimi">sashimi</a></li>
                    <li><a href="#don">don</a></li>
                    <li><a href="#gunkan">gunkan</a></li>
                </ul>
                </nav>
            </div>-->

            <div id="menu-list-container">
                <ul>
                    <li><img src="assets/menu/dummy.jpg" id="myItem"><p tag="Name">Name</p></li>
                    <li><img src="assets/menu/dummy.jpg" id="myItem"><p tag="Name">Name</p></li>
                    <li><img src="assets/menu/dummy.jpg" id="myItem"><p tag="Name">Name</p></li>
                    <li><img src="assets/menu/dummy.jpg" id="myItem"><p tag="Name">Name</p></li>
                    <li><img src="assets/menu/dummy.jpg" id="myItem"><p tag="Name">Name</p></li>
                    <li><img src="assets/menu/dummy.jpg" id="myItem"><p tag="Name">Name</p></li>
                </ul>
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


            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Dummy Item</p>
                    <form action="add_to_cart.php" method="post">
                        Quantity: <input type="number" name="quantity" id="quantity" style="width:50px;"><hr>
                        <input type="submit" value="Add to cart">
                    </form>
                </div>
            </div>
	    </div>
    </body>
</html>
<script type="text/javascript" src="scripts/menu.js"></script>
