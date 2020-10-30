<?php require_once("../private/initialize.php"); ?>

<body>
    <?php include( SHARED_PATH . "/public_header.php"); ?>
    <div class="wrapper">
        <div class="slideshow">
            <div class="slidepic">
            <h1>Our Goal: Simplify Fashion!</h1>
            
            <p>Why make clothing complicated and expensive while you can look absolutely amazing with simplicity? </p>
            
            </div>
        </div> 

        <div class="section2">
            <div class="insidesection2">
                <h2> Popular Categories</h2>
				
				<table>
					<tr>
						<td><a href="shirt.php"><img src="media/shirt.jpg" alt="shirt" class="categories"></a></td>
						<td><a href="pants.php"><img src="media/pants.jpg" alt="pants" class="categories"></a></td>
						<td><a href="jacket.php"><img src="media/jacket.jpg" alt="jacket" class="categories"></a></td>
					</tr>
					<tr>
						<td><a href="shirt.php">Shirt</a></td>
						<td><a href="pants.php">Pants</a></td>
						<td><a href="jacket.php">Jacket</a></td>
					</tr>
				</table>
            </div> 
        </div> 
    </div>
    
<?php include(SHARED_PATH . "/public_footer.php"); ?>
