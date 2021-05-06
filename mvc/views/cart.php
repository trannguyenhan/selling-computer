<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/cart.css" >
	<link rel="stylesheet" href="public/css/footer_container.css">
	<link rel="stylesheet" href="public/css/nav_bar.css">
	<title>Products | MTHH</title>
</head>
<body>
	<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
	<div class="cart">
	<div class="small-container cart-page">
		<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="">
						<div>
							<p>Hoodie</p>

							<small>Price: 500000đ</small>
							<br>
							<a href="cart">Remove</a>
						</div>

					</div>
				</td>
				<td><input type="number" name="" value="300"></td>
				<td><del>700000đ</del>500000đ</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="">
						<div>
							<p>Hoodie</p>

							<small>Price: 500000đ</small>
							<br>
							<a href="cart">Remove</a>
						</div>

					</div>
				</td>
				<td><input type="number" name="" value="300"></td>
				<td><del>700000đ</del>500000đ</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="">
						<div>
							<p>Hoodie</p>

							<small>Price: 500000đ</small>
							<br>
							<a href="cart">Remove</a>
						</div>

					</div>
				</td>
				<td><input type="number" name="" value="300"></td>
				<td><del>700000đ</del>500000đ</td>
			</tr>
		</table>
		<div class="total-price">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>500000đ</td>
				</tr>
				<tr>
					<td>Tax</td>
					<td>35.000đ</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>535000đ</td>
				</tr>
			</table>
		</div>
		<a href="#" class = 'btn'>Confirm order</a>
	</div>
	</div>
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>