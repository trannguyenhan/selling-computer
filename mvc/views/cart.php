<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			<?php
				require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
				$service = new GuestServices();
				$listProducts = $service->getListCartProducts("huy0628");

				foreach ($listProducts as $product){
			?>
			<tr>
				<td>
					<div class="cart-info">
						<img src="<?php echo $product->getImage() ?>">
						<div>
							<p><?php echo $product->getModel() ?></p>

							<small>Price: <?php echo $product->getPrice() ?> VNĐ</small>
							<br>
							<a href="cart">Remove</a>
						</div>

					</div>
				</td>
				<td><input type="number" name="" value="1"></td>
				<td><del><?php echo $product->getPrice() ?></del><?php echo $product->getPrice() * 0.98 ?></td>
			</tr>
			<?php
				}
			?>
		</table>
		<div class="total-price">
			<table>
				<tr>
					<td>Subtotal</td>
					<td></td>
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
<?php //require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>
