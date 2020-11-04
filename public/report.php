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
<div class="box1">
            <div class="box1content">
		<table id="centeritem">
			<tr>
				<td> Click to generate total sales figure  </td>
				<td> <form action="report_totalsales.php"><input class="btn" type="submit" value=""></form></td>
			</tr>
			<!--<tr>
				<td>Search order number: <form action="price_update_cont.php" method="post"><input type="text" name="ordernum" style="width: 50px"></form></td>
				<td> <form action="report_salesQ.php"><input class="btn" type="submit" value=""></form></td>
				</td>
			</tr> -->
		</table>                 
</div> <!-- box1 content -->
</div> <!-- box1 -->


<?php include(SHARED_PATH . "/public_footer.php"); ?>