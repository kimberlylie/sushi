                <?php
                session_start();
                if (!isset($_SESSION['cart']))
                    {
                        echo 
                        "<script type='text/javascript'>
                        window.location.href='/sushi/menu.php'; 
                        </script>"; //window.location.href='/~kimie/sushi/cart.php'; 
                    }
                    ?>
                <?php
                if (!isset($_SESSION['cart']))
                    {
                        echo 
                        "<script type='text/javascript'>
                        window.location.href='/sushi/menu.php'; 
                        </script>"; //window.location.href='/~kimie/sushi/cart.php'; 
                    }
                ?>

                <?php
                    
                    if (!isset($_SESSION['customer']))
                    {
                        echo 
                        "<script type='text/javascript'>
                        window.location.href='/sushi/checkout.php'; 
                        </script>"; //window.location.href='/~kimie/sushi/cart.php'; 

                    }
                ?>  

                <?php
                 $_SESSION['customer']['firstName']= $_POST["itemNoId"];
                 $_SESSION['customer']['lastName']= $_POST["itemNoId"];
                 $_SESSION['customer']['email']= $_POST["itemNoId"];
                 $_SESSION['customer']['phone']= $_POST["itemNoId"];
                 $_SESSION['customer']['address']= $_POST["itemNoId"];
                 $_SESSION['customer']['zip']= $_POST["itemNoId"];
                 $_SESSION['customer']['notes']= $_POST["itemNoId"];

                 
                 echo$_SESSION['customer']['firstName'];
                 echo$_SESSION['customer']['lastName'];
                 echo$_SESSION['customer']['email'];
                 echo$_SESSION['customer']['Name'];
                 echo$_SESSION['customer']['firstName'];
                 echo$_SESSION['customer']['firstName'];



                ?>