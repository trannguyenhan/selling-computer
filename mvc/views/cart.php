<?php
ob_start();
session_start();
if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
		header("Location: login");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/cart.css" >
		<link rel="stylesheet" href="public/css/footer_container.css">
		<link rel="stylesheet" href="public/css/nav_bar.css">
		<script type="text/javascript" src = "public/javascript/cart.js"></script>
		<title>Products | MTHH</title>
	</head>
	<body>
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<div class="cart">
			<div class="small-container cart-page">
				<table id="table">
					<tr>
						<th>Sản phẩm</th>
						<th>Số lượng</th>
						<th>Đơn giá</th>
					</tr>
					<?php
						require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
						$service = new GuestServices();
						$listProducts = $service->getListCartProducts($_SESSION['username']);
						$sum = 0;
						foreach ($listProducts as $product){
							$sum += $product->getPrice();
					?>
					<tr>
						<td>
							<div class="cart-info">
								<img src="<?php echo $product->getImage() ?>">
								<div>
									<p><?php echo $product->getModel() ?></p>
									<small>Price: <?php echo $product->getPrice() ?> VNĐ</small>
									<br>
									<form action="library/delete_product.php" method="POST">
										<input input="text" value="<?php echo $product->getPrice() ?>" class="price" style="display : none">
										<input type="text" name="product_id" value="<?php echo $product->getProductID() ?>" style="display: none">
										<input type="submit" style="display:none" id="submit_delete">
										<a href="javascript:void(0);" onclick="remove_form()">Remove</a>
									</form>
								</div>
							</div>
						</td>
						<td><input type="number" name="number" class="quantity" value="1" min="1" onclick="update_quantity(this)"></td>
						<td><?php echo $product->getPrice() ?></td>
					</tr>
					<?php
						}
					?>
				</table>
				<div class="total-price">
					<table id="table_total">
						<tr>
							<td>Tổng tiền</td>
							<td><?php echo $sum ?></td>
						</tr>
						<!-- <tr>
								<td>Tax</td>
								<td>35.000đ</td>
						</tr>
						<tr>
								<td>Total</td>
								<td>535000đ</td>
						</tr> -->
					</table>
				</div>
				<form action="library/insert_product.php" method="POST">
					<input type="text" name="list_quantity" id="list_quantity" value="1 1" style="display:none">
					<input type="submit" id="submit_insert" style="display:none">
				</form>
				<a href="javascript:void(0);" onclick="confirm_order()" class = 'btn'>Xác nhận</a>
			</div>
		</div>