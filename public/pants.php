<?php 
    require_once("../private/initialize.php"); 
    session_start();

    // unset($_SESSION['user']);
    // unset($_SESSION ['item-id']);
    // unset($_SESSION['cart']);

    if(isset($_SESSION['user'])){
        // echo "cart length " . count($_SESSION['cart']) . "<br/>";
        
    
        if (isset($_GET['item']) && isset($_GET["quantity"])) {
            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            if(!isset($_SESSION['item-name'])) {
                $_SESSION['item-name'] = array();
            }
        
            if(!isset($_SESSION['item-price'])) {
                $_SESSION['item-price'] = array();
            }

            $item = $_GET['item'];
            $quantity = $_GET['quantity'];
            $name = $_GET['itemName'];
            $price = $_GET['itemPrice'];
            echo "item " . $item;
            echo " quantity ". $quantity;
            echo "<br/>";
            
            if (array_key_exists($item, $_SESSION['cart'])) {
                $_SESSION['cart'] [$item] += $quantity;
            }
    
            else {
                $_SESSION['cart'] += [$item => $quantity ];
                $_SESSION['item-name'] +=[$item => $name];
                $_SESSION['item-price'] +=[$item => $price];
            }
            
        }
    }
    

    // foreach($_SESSION['item-name'] as $key => $value ){
    //     echo $key . " => " . $value . "<br/>";
    // }

    // foreach($_SESSION['item-price'] as $key => $value ){
    //     echo $key . " => " . $value . "<br/>";
    // }

    // foreach($_SESSION['cart'] as $key => $value ){
    //     echo $key . " => " . $value . "<br/>";
    // }
    
    $category_list = findALLCategory();
    
?>
 
<?php include( SHARED_PATH . "/public_header.php"); ?>
<link rel="stylesheet" href="css/menustyle.css">
    <div class="wrapper">
        <div class="box1"> <!-- for whole segment of menu -->
            <div class="box1content"> <!-- contents within whole segment of menu -->

        <?php if (!isset($_SESSION['user'])) {
            echo '<a href="login.php">To place an order, please LOGIN first!</a>';
        }
        ?>
        <div>
            <?php while($category = $category_list->fetch_assoc()) {
				if ($category["cat_name"] == "Pants") {
					echo '<div class="category">'; 
					echo '<h1>'. $category["cat_name"] .'</h1>'; 
					$item_list = findDishByCategory($category["id"]);
					while ($item = $item_list->fetch_assoc()){
						echo '<div class ="column">';
						echo '<h3>' . $item["prod_name"] . '</h3>';
						echo '<img src="menu photos/' . $item['id'] .'.jpg" alt="Ground Fashion" class="productimage" id="center">';
						echo "<h3>$" . $item["price"] . "</h3>";
                    
						if (isset($_SESSION['user'])){
							echo '<form method="get" action=' . $_SERVER["PHP_SELF"].'>';
							echo '<p class="quantity">Quantity:</p>';
							echo '<div class="quantity"><input value="0" min="0" name="quantity" type="number"></div>';
							echo '<input value=' . $item["id"] . ' name="item" type="hidden"><br>';
							echo '<input value="' . $item["prod_name"] . '" name="itemName" type="hidden">';
							echo '<input value="' . $item["price"] . '" name="itemPrice" type="hidden">';
							echo '<input value="Add to Cart"  type="submit" id="center" class="addtocart">';
							echo '<br><br></form>';
						}
          
						echo '</ul>';
						echo '</div>';
					}
					echo '</div>';
				}
            }
            ?>
        
        
        

        </div>
        <?php if(isset($_SESSION['user'])){
            echo'
				 <div class="button" id="button-2">
					<div id="slide"></div>
					<a href="cart.php">Go To Cart</a>
				</div>';
            }
        
        ?>
        
        </div> <!-- box1 contents -->

        </div> <!-- box 1 -->
    </div> <!-- wrapper -->

<?php include(SHARED_PATH . "/public_footer.php"); ?>





