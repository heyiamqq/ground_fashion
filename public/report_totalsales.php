<?php 
    require_once("../private/initialize.php"); 
    session_start();
    if(isset($_SESSION['user'])){
        $current_user = $_SESSION['user'];
        $order_history =  findAllOrderByUser($current_user['id']);
    }
?>

<?php include( SHARED_PATH . "/public_header.php"); ?>

<?php if (!isset($_SESSION['user'])) {
            echo '<a href="login.php">To place an order, please LOGIN first!</a>';
        }
        ?>

<?php

// get profit = price * quantity

$servername = "localhost";
$username = "f37ee";
$password = "f37ee";
$dbname = "f37ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `orderitem` WHERE itemid='1'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QA1 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='1'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceA1 = stripslashes($row['price']);
$salesA1 = $priceA1 * $QA1;
$A1 = 'One Shoulder Top';

$query = "SELECT * FROM `orderitem` WHERE itemid='2'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QA2 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='2'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceA2 = stripslashes($row['price']);
$salesA2 = $priceA2 * $QA2;
$A2 = 'Floral Printed Shirt';

$query = "SELECT * FROM `orderitem` WHERE itemid='3'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QA3 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='3'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceA3 = stripslashes($row['price']);
$salesA3 = $priceA3 * $QA3;
$A3 = 'Manhattan Graphic Tee';

$query = "SELECT * FROM `orderitem` WHERE itemid='4'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QB1 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='4'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceB1 = stripslashes($row['price']);
$salesB1 = $priceB1 * $QB1;
$B1 = 'Summer Printed Pants';

$query = "SELECT * FROM `orderitem` WHERE itemid='5'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QB2 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='5'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceB2 = stripslashes($row['price']);
$salesB2 = $priceA1 * $QB2;
$B2 = 'Basic Skinny Jeans';

$query = "SELECT * FROM `orderitem` WHERE itemid='6'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QB3 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='6'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceB3 = stripslashes($row['price']);
$salesB3 = $priceB3 * $QB3;
$B3 = 'Workout Sport Leggings';

$query = "SELECT * FROM `orderitem` WHERE itemid='7'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QC1 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='7'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceC1 = stripslashes($row['price']);
$salesC1 = $priceC1 * $QC1;
$C1 = 'Biker Leather Jacket';

$query = "SELECT * FROM `orderitem` WHERE itemid='8'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QC2 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='8'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceC2 = stripslashes($row['price']);
$salesC2 = $priceC2 * $QC2;
$C2 = 'Autumn Star Bomber';

$query = "SELECT * FROM `orderitem` WHERE itemid='9'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$QC3 = stripslashes($row['quantity']);
$query = "SELECT * FROM `menu` WHERE id='9'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$priceC3 = stripslashes($row['price']);
$salesC3 = $priceC3 * $QC3;
$C3 = 'Street Style Denim';

$profit = $salesA1 +$salesA2 +$salesA3 +$salesB1 +$salesB2 +$salesB3 +$salesC1 +$salesC2 +$salesC3;
$QT = $QA1 + $QA2 + $QA3 + $QB1 + $QB2 + $QB3 + $QC1 + $QC2 + $QC3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Report </title>
	<meta charset="utf-8">

</head>
<body>
<div class="box1">
            <div class="box1content">
	<table id="carttable">
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Profit</th>
		</tr>
		<tr>
			<td><?php echo $A1 ?></td>
			<td><?php echo $QA1 ?></td>
			<td>$<?php echo number_format($salesA1,2);?></td>
		</tr>
				<tr>
			<td><?php echo $A2 ?></td>
			<td><?php echo $QA2 ?></td>
			<td>$<?php echo number_format($salesA2,2);?></td>
		</tr>		<tr>
			<td><?php echo $A3 ?></td>
			<td><?php echo $QA3 ?></td>
			<td>$<?php echo number_format($salesA3,2);?></td>
		</tr>		<tr>
			<td><?php echo $B1 ?></td>
			<td><?php echo $QB1 ?></td>
			<td>$<?php echo number_format($salesB1,2);?></td>
		</tr>		<tr>
			<td><?php echo $B2 ?></td>
			<td><?php echo $QB2 ?></td>
			<td>$<?php echo number_format($salesB2,2);?></td>
		</tr>		<tr>
			<td><?php echo $B3 ?></td>
			<td><?php echo $QB3 ?></td>
			<td>$<?php echo number_format($salesB3,2);?></td>
		</tr>		<tr>
			<td><?php echo $C1 ?></td>
			<td><?php echo $QC1 ?></td>
			<td>$<?php echo number_format($salesC1,2);?></td>
		</tr>		<tr>
			<td><?php echo $C2 ?></td>
			<td><?php echo $QC2 ?></td>
			<td>$<?php echo number_format($salesC2,2);?></td>
		</tr>		<tr>
			<td><?php echo $C3 ?></td>
			<td><?php echo $QC3 ?></td>
			<td>$<?php echo number_format($salesC3,2);?></td>
		</tr>
		<tr>
			<td><b>Total Sales</td>
			<td><b><?php echo $QT ?></td>
			<td><b>$<?php echo number_format($profit,2);?></td>
		</tr>

	</table>
	<br>
	<!--<input type="button" onclick="report.php';" value="Return" />-->
	<div class="button" id="button-1">
		<div id="slide"></div>
		<a href="report.php"> Return </a></div><br>
</div> <!-- box1 content -->
</div> <!-- box1 -->
</body>
</html>


