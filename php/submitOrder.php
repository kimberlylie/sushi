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