<?php
// include('connection.php');
// if(isset($_GET['subtotal'])){
// 	$add_subtotal_sql = "insert into Order_Info(subtotal) values(".$_GET['subtotal'].")";
// 	$add_subtotal = sqlsrv_query($conn, $add_subtotal_sql);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="cart_css.php">
	<link rel="stylesheet" type="text/css" href="all_products_page_css.php">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="order_css.php">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Project I</title>
</head>
<body>
	<h2>SHIPPING INFORMATION</h2>
	<div class="container">
		<div class="logo">
			<i class="fa fa-check-square-o" ></i>
			<i class="fa fa-ship"></i>
			<i class="fa fa-credit-card-alt"></i>
		</div>
		<div class="row">
			<form name = "form" action = "action.php" method = "get">
				<label>User Contact</label>
				<input type="text"  name="name" placeholder="Full name" required>
				<input type="tel" name="phone"   placeholder="Phone number" required>
				<input type="email" name ="email" placeholder="Email" required>
				<label>Shipping Info</label>
				<div class="addr">
					<input type="text" name = 'address' placeholder="Your address" required>
					<input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" id="date" name = 'date' required>
					<input type="text" name = 'company' placeholder="Company" required>
					<input type="number" name ='code' placeholder="Zip/postal code" required>
				</div>
				<div class="check-box">
					<input type="checkbox" name="ship[]" id = 'ship'  value="7h:11h">
					<label for="morning">7h:11h</label>
					<input type="checkbox" name="ship[]"  id = 'ship' value="13h:17h">
					<label for="afternoon">13h:17h</label>
					<input type="checkbox" name="ship[]"  id = 'ship'  value="19h:23h">
					<label for="evening"> 19h:23h
					</div>
					<textarea name="message"  placeholder="Note"></textarea>
					<input type="submit">
				</form>
			</div>
		</div>
	</body>
	</html>