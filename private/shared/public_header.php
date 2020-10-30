<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Ground Fashion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="javascript/validateform.js"></script>
    </head>

    <body>
        <div class="wrapper">
        <header>
            <div class="container">
                    
                <a href="index.php"><img src="media/logogf.png" alt="Ground Fashion" class="logo"></a>
                   
                <nav class="side">
                    <a href="cart.php"> <img src="media/shopping-cart.png" alt="Cart" class="icons"><br> Cart</a> 
                    <a href="order.php"> <img src="media/hanger.png" alt="Order" class="icons"><br> Order</a> 
                    <a href="contact.php"> <img src="media/contact.png" alt="Contact" class="icons"><br> Contact</a> 
                    <?php if(!isset($_SESSION['user'])){
                            echo '<a href="login.php"><img src="media/login.png" alt="user" class="icons"><br>Log In</a>';
                        }
                          else {
                            echo '<a href="logout.php"><img src="media/login.png" alt="user" class="icons"><br>Log Out</a>';
                          }
                    ?>  
                </nav>				
            </div>
        </header>
   
