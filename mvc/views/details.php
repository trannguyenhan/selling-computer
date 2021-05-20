<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../public/css/about.css" type="text/css">
	<link rel="stylesheet" href="../../public/css/footer_container.css" type="text/css">
	<link rel="stylesheet" href="../../public/css/nav_bar.css" type="text/css">
	<link rel="stylesheet" href="../../public/css/details.css" type="text/css">
	<title>Product Detail | MTHH</title>
</head>
<body>
<!-- includes nav bar -->
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
<div class='title'><b>THÔNG TIN SẢN PHẨM</b></div>
<?php
	require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
	require_once ROOT . DS . 'services' . DS . 'EvaluateServices.php';
?>

<!-- print all information -->
<div class='info'>
	<img src=<?php echo $product->getImage() ?> ></img>
	<div class='desc'>
		<div class='name'><b><?php echo $product->getModel() ?></b></div>
		<div><b>Giá bán</b>: <?php echo $product->getPrice() ?> đồng</div>
		<div><b>Cân nặng</b>: <?php echo $product->getWeigh() ?> kg</div>
		<div><b>Màu sắc</b>: <?php echo $product->getColor() ?></div>
		<div><b>Thương hiệu</b>: <?php echo $product->getSupplier() ?></div>
		<div><b>Mô tả sản phẩm</b>: <?php echo $product->getDescription() ?></div>

		<?php
		$check = TypeProductsServices::checkType($product->getProductID());

		// if this product is computer
		if($check == Type::PC || $check == Type::LAPTOP) {
		?>
			<div><b>Vi xử lý</b>: <?php echo $product->getCPU() ?></div>
			<div><b>Bộ nhớ RAM</b>: <?php echo $product->getRAM() ?></div>
			<div><b>Bộ nhớ</b>: <?php echo $product->getStorage() ?> GB</div>
			<div><b>Màn hình</b>: <?php echo $product->getScreen() ?></div>
			<div><b>Card đồ họa</b>: <?php echo $product->getCard() ?></div>
			<div><b>Kết nối chính</b>: <?php echo $product->getMainConnection() ?></div>
			<div><b>Hệ điều hành</b>: <?php echo $product->getOS() ?></div>
			<?php

			if($check == Type::PC) {
			?>
				<div><b>Case</b>: <?php echo $product->getCase()?></div>
			<?php
			}
			else {
			?>
				<div><b>Pin</b>: <?php echo $product->getBattery()?> Wh</div>
			<?php
			}
		}

		// if this product is mouse
		else {
		?>
			<div><b>Kết nối tiêu chuẩn</b>: <?php echo $product->getStandardConnection() ?></div>
			<div><b>Giao thức kết nối</>: <?php echo $product->getConnectionProtocon() ?></div>
			<div><b>Có led</b>:
			<?php
			if($product->getIsLed()) {
				echo "Có";
			}
			else {
				echo "Không";
			}
			?>
			</div>
			<div><b>Kích cỡ</b>: <?php echo $product->getSize() ?></div>
		<?php
		}
	?>
	</div>
</div>

<form action="" method="POST">
<div class="add-product" style="padding-top: 50px;position: relative;margin-bottom: 30px;/* justify-content: space-between; */">
	<input class="number" type="number" name="number" min="1">
	<input class="add" type="submit" value="Thêm vào giỏ hàng" style="margin-left:30px;">
</div>
</form>

<?php
if(array_key_exists('number', $_POST)) {
	$number = isset($_POST['number']) ? $_POST['number'] : '';

	if($number == '') { // if not type number
		alert("Vui lòng nhập số lượng!");
	}
	elseif(!isset($_SESSION['username'])) { // if not log in
		alert("Vui lòng đăng nhập!");
	}
	else {
		require_once ROOT . DS . 'services' . DS . 'GuestServices.php';

		$username = $_SESSION['username'];
		$quantity = $_POST['number'];

		$guestServiecs = new GuestServices();
		$guestServiecs->insertProduct($username, $product, $quantity);
		echo header('location: details.php');
	}
}
?>

<!-- allow user to evaluate -->
<div class='cmt-title'><b>Đánh giá của bạn</b></div>
<form action="" method="POST">
<div class='your-evaluate'>
	<div class='your-star'><b>Điểm đánh giá</b>: <input class='rating' type="number" name="star" min="1" max="5"></div>
	<div class='your-cmt'><b>Bình luận</b>: </div>
	<textarea class='comment' rows='1' name="cmt" placeholder='Hãy để lại bình luận của bạn'></textarea>
	<input class='submit' type='submit' value='Gửi'>
</div>
</form>
<?php

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}

function formatMoney($money) {

}

?>
<?php
// if click submit
if(array_key_exists("cmt", $_POST)) {

	$star = isset($_POST['star']) ? $_POST['star'] : '';
	$cmt = isset($_POST['cmt']) ? $_POST['cmt'] : '';
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('Y-m-d h:i:s', time());
	$productID = $product->getProductID();

	if($star == '') { // if not rating
		alert("Vui lòng nhập điểm đánh giá!");
	}
	elseif($cmt == '') { // if not comment
		alert('Vui lòng nhập bình luận!');
	} 
	elseif(!isset($_SESSION['username'])) { // if not log in
		alert('Vui lòng đăng nhập để đánh giá!');
	}
	else { 	// insert to database
		require_once ROOT . DS . 'services' . DS . 'EvaluateServices.php';
		require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Evaluate.php';

		$username = $_SESSION['username'];
		$evalate = new Evaluate($username, $productID, $star, $cmt, $date);
		$service = new EvaluateServices();
		$service->insert($evalate);
		echo header('location: details.php');
	}
}
?>

<!-- print all evaluate -->
<div class='cmt-title'><b>Ý kiến đánh giá</b></div>
<?php

$evaluateService = new EvaluateServices();
$listEvaluates = $evaluateService->getAll($product->getProductID());
for($i = 0; $i < count($listEvaluates); $i++) {
	$temp = $listEvaluates[$i];
?>
	<div class='evaluate'>
		<div class='user'><b><?php echo $temp->getUsername() ?></b></div>
		<div class='date'><?php echo $temp->getDate() ?> </div>
		<div class='star'><b>Điểm đánh giá: </b><?php echo $temp->getStar() ?>/5</div>
		<div class='cmt'><?php echo $temp->getComment() ?> </div>
	</div>
<?php
}
?>
<?php //require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>
