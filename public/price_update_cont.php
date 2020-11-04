<?php 
    require_once("../private/initialize.php"); 
    session_start();
    if(isset($_SESSION['user'])){
        $current_user = $_SESSION['user'];
        $order_history =  findAllOrderByUser($current_user['id']);
    }
$servername = "localhost";
$username = "f37ee";
$password = "f37ee";
$dbname = "f37ee";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$priceA1new=$_POST['PriceA1New'];
$priceA2new=$_POST['PriceA2New'];
$priceA3new=$_POST['PriceA3New'];
$priceB1new=$_POST['PriceB1New'];
$priceB2new=$_POST['PriceB2New'];
$priceB3new=$_POST['PriceB3New'];
$priceC1new=$_POST['PriceC1New'];
$priceC2new=$_POST['PriceC2New'];
$priceC3new=$_POST['PriceC3New'];

if ($priceA1new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceA1new);
		}	
	$query = "UPDATE menu SET price = '".$priceA1new."' WHERE id='1'";
	$result = $conn->query($query);		
}

if ($priceA2new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceA2new);
		}	
	$query = "UPDATE menu SET price = '".$priceA2new."' WHERE id='2'";
	$result = $conn->query($query);		
}

if ($priceA3new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA2new = addslashes($priceA3new);
		}	
	$query = "UPDATE menu SET price = '".$priceA3new."' WHERE id='3'";
	$result = $conn->query($query);		
}

if ($priceB1new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceB1new);
		}	
	$query = "UPDATE menu SET price = '".$priceB1new."' WHERE id='4'";
	$result = $conn->query($query);		
}

if ($priceB2new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceB2new);
		}	
	$query = "UPDATE menu SET price = '".$priceB2new."' WHERE id='5'";
	$result = $conn->query($query);		
}

if ($priceB3new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceB3new);
		}	
	$query = "UPDATE menu SET price = '".$priceB3new."' WHERE id='6'";
	$result = $conn->query($query);		
}

if ($priceC1new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceC1new);
		}	
	$query = "UPDATE menu SET price = '".$priceC1new."' WHERE id='7'";
	$result = $conn->query($query);		
}

if ($priceC2new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceC2new);
		}	
	$query = "UPDATE menu SET price = '".$priceC2new."' WHERE id='8'";
	$result = $conn->query($query);		
}

if ($priceC3new != NULL) {
		if (!get_magic_quotes_gpc()){
		$priceA1new = addslashes($priceC3new);
		}	
	$query = "UPDATE menu SET price = '".$priceC3new."' WHERE id='9'";
	$result = $conn->query($query);		
}

$query = "SELECT * FROM `menu` WHERE prod_name='One Shoulder Top'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceA1 = stripslashes($row['price']);
$A1 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE prod_name='Floral Printed Shirt'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceA2 = stripslashes($row['price']);
$A2 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE id='3'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceA3 = stripslashes($row['price']);
$A3 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE prod_name='Summer Printed Pants'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceB1 = stripslashes($row['price']);
$B1 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE prod_name='Basic Skinny Jeans'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceB2 = stripslashes($row['price']);
$B2 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE prod_name='Workout Sport Leggings'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceB3 = stripslashes($row['price']);
$B3 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE prod_name='Biker Leather Jacket'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceC1 = stripslashes($row['price']);
$C1 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE prod_name='Autumn Star Bomber'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceC2 = stripslashes($row['price']);
$C2 = $row['prod_name'];

$query = "SELECT * FROM `menu` WHERE prod_name='Street Style Denim'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceC3 = stripslashes($row['price']);
$C3 = $row['prod_name'];

?>

<?php include( SHARED_PATH . "/public_header.php"); ?>

<div class="box1">
            <div class="box1content">

<form action="price_update_cont.php" method="post">
		<table id="price_update_table" border=1 width="80%">
		<tr>
		<td><h4>Set Price</td>
		<td><h4>Item</td>
		<td><h4>Current Price</td>
		</tr>
			<tr>
				<td> <input type="text" name="PriceA1New" style="width: 50px"></td>
				<td> <?php echo $A1; ?></td>
				<td> <?php echo '$'.$priceA1;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceA2New" style="width: 50px"></td>
				<td> <?php echo $A2; ?></td>
				<td> <?php echo '$'.$priceA2;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceA3New" style="width: 50px"></td>
				<td> <?php echo $A3; ?></td>
				<td> <?php echo '$'.$priceA3;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceB1New" style="width: 50px"></td>
				<td> <?php echo $B1; ?></td>
				<td> <?php echo '$'.$priceB1;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceB2New" style="width: 50px"></td>
				<td> <?php echo $B2; ?></td>
				<td> <?php echo '$'.$priceB2;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceB3New" style="width: 50px"></td>
				<td> <?php echo $B3; ?></td>
				<td> <?php echo '$'.$priceB3;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceC1New" style="width: 50px"></td>
				<td> <?php echo $C1; ?></td>
				<td> <?php echo '$'.$priceC1;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceC2New" style="width: 50px"></td>
				<td> <?php echo $C2; ?></td>
				<td> <?php echo '$'.$priceC2;?> </td>
			</tr>
			<tr>
				<td> <input type="text" name="PriceC3New" style="width: 50px"></td>
				<td> <?php echo $C3; ?></td>
				<td> <?php echo '$'.$priceC3;?> </td>
			</tr>
		</table><br>
		<input id="price_update_button" type="submit" value="Update"><br>
		</form>
                   
</div> <!-- box1 content -->
</div> <!-- box1 -->

<?php include(SHARED_PATH . "/public_footer.php"); ?>