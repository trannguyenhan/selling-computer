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
	<script>
			function remove_form(){
					document.getElementById("submit_delete").click();
			}

			function update_quantity(this_row){
					let list = document.getElementById("table").rows;
					let lens = list.length;
					let sum = 0;

					let list_quantity = new Array();
					for(let i=1; i<lens; i++){
							let quantity = parseInt(document.getElementsByClassName("quantity")[i-1].value);
							if(list[i].contains(this_row)){
									let ele_price = document.getElementsByClassName("price")[i-1].value;
									if(quantity >=6){
											alert("Chọn tối đa 5 sản phầm thôi! Vì chúng tôi biết chả ai mua nhiều máy tính tới thế!");
											document.getElementsByClassName("quantity")[i-1].value = 5;
											return;
									}

									let new_price = String(parseInt(ele_price) * quantity);
									list[i].cells[2].innerHTML = new_price;
							}

							list_quantity.push(quantity);
							sum += parseInt(list[i].cells[2].innerHTML);
					}

					// let ele_price = document.getElementById("price").value;
					// let quantity = parseInt(document.getElementById("quantity").value);
					// if(quantity >= 5){
					// 		alert("5 cái thôi, ai mua máy tính mua chục cái bao giờ!");
					// 		document.getElementById("quantity").value = 5;
					// 		return;
					// }
					// let new_price = String(parseInt(ele_price) * quantity);
					// alert(new_price);

					// document.getElementById("table").rows[1].cells[2].innerHTML = new_price;
					document.getElementById("table_total").rows[0].cells[1].innerHTML = String(sum);

					let text = "";
					for(let i=0; i<list_quantity.length; i++){
							let t = String(list_quantity[i]);
							text += t + " ";
					}

					document.getElementById("list_quantity").value = text;
					// alert(sum);
			}

			function confirm_order(){
					document.getElementById("submit_insert").click();
			}
	</script>
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
<?php //require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>
