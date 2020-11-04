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

$ordernum=$_POST['ordernum'];

$query = "SELECT * FROM `orderitem` WHERE FIND_IN_SET (''.$ordernum.'',orderid)";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesA1 = stripslashes($row['itemid']);
$A1 = 'One Shoulder Top';

$query = "SELECT * FROM `order` WHERE id='2'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesA2 = stripslashes($row['amount']);
$A2 = 'Floral Printed Shir';

$query = "SELECT * FROM `order` WHERE id='3'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesA3 = stripslashes($row['amount']);
$A3 = 'Manhattan Graphic Tee';

$query = "SELECT * FROM `order` WHERE id='4'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesB1 = stripslashes($row['amount']);
$B1 = 'Summer Printed Pants';

$query = "SELECT * FROM `order` WHERE id='5'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesB2 = stripslashes($row['amount']);
$B2 = 'Basic Skinny Jeans';

$query = "SELECT * FROM `order` WHERE id='6'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesB3 = stripslashes($row['amount']);
$B3 = 'Workout Sport Leggings';

$query = "SELECT * FROM `order` WHERE id='7'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesC1 = stripslashes($row['amount']);
$C1 = 'Biker Leather Jacket';

$query = "SELECT * FROM `order` WHERE id='8'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesC2 = stripslashes($row['amount']);
$C2 = 'Autumn Star Bomber';

$query = "SELECT * FROM `order` WHERE id='9'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$salesC3 = stripslashes($row['amount']);
$C3 = 'Street Style Denim';

$profit = $salesA1 +$salesA2 +$salesA3 +$salesB1 +$salesB2 +$salesB3 +$salesC1 +$salesC2 +$salesC3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> JavaJam - Sales by products </title>
	<meta charset="utf-8">

</head>
<body>
	<table border="1">
		<tr>
			<th><h5>Product</th>
			<th><h5>Profit</th>
		</tr>
		<tr>
			<td><?php echo $A1 ?></td>
			<td>$<?php echo number_format($salesA1,2);?></td>
		</tr>
				<tr>
			<td><?php echo $A2 ?></td>
			<td>$<?php echo number_format($salesA2,2);?></td>
		</tr>		<tr>
			<td><?php echo $A3 ?></td>
			<td>$<?php echo number_format($salesA3,2);?></td>
		</tr>		<tr>
			<td><?php echo $B1 ?></td>
			<td>$<?php echo number_format($salesB1,2);?></td>
		</tr>		<tr>
			<td><?php echo $B2 ?></td>
			<td>$<?php echo number_format($salesB2,2);?></td>
		</tr>		<tr>
			<td><?php echo $B3 ?></td>
			<td>$<?php echo number_format($salesB3,2);?></td>
		</tr>		<tr>
			<td><?php echo $C1 ?></td>
			<td>$<?php echo number_format($salesC1,2);?></td>
		</tr>		<tr>
			<td><?php echo $C2 ?></td>
			<td>$<?php echo number_format($salesC2,2);?></td>
		</tr>		<tr>
			<td><?php echo $C3 ?></td>
			<td>$<?php echo number_format($salesC3,2);?></td>
		</tr>
		<tr>
			<td><h5>Total Sales</td>
			<td><h5>$<?php echo number_format($profit,2);?></td>
		</tr>

	</table>
	<br><br><br>
	<a href="report.php"> Return </a><br><br>
</body>
</html>