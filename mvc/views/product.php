<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/about.css" type="text/css">
	<link rel="stylesheet" href="css/footer_container.css" type="text/css">
	<link rel="stylesheet" href="css/nav_bar.css" type="text/css">
	<title>Product Detail | MTHH</title>
</head>
<body>
<!-- includes nav bar -->
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
<div>Thông tin sản phẩm</div>
<?php
	require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
?>
	<div>Hình ảnh: <?php echo $product->getImage() ?></div>
	<div>Giá bán: <?php echo $product->getPrice() ?></div>
	<div>Cân nặng: <?php echo $product->getWeigh() ?></div>
	<div>Màu sắc: <?php echo $product->getColor() ?></div>
	<div>Thương hiệu: <?php echo $product->getSupplier() ?></div>
	<div>Mô tả sản phẩm: <?php echo $product->getDescription() ?></div>

	<?php
	$check = TypeProductsServices::checkType($product->getProductID());

	if($check == Type::PC || $check == Type::LAPTOP) {
	?>
			<div>CPU: <?php echo $product->getCPU() ?></div>
			<div>RAM: <?php echo $product->getRAM() ?></div>
			<div>Bộ nhớ: <?php echo $product->getRAM() ?></div>
			<div>Màn hình: <?php echo $product->getScreen() ?></div>
			<div>Card đồ họa: <?php echo $product->getCard() ?></div>
			<div>Kết nối chính: <?php echo $product->getMainConnection() ?></div>
			<div>Hệ điều hành: <?php echo $product->getOS() ?></div>
		<?php
		if($check == Type::PC) {
		?>
			<div>Case: <?php echo $product->getCase()?></div>
		<?php
		}
		else {
		?>
			<div>Pin: <?php echo $product->getBattery()?></div>
		<?php
		}
	}
	else {
	?>
			<div>Kết nối tiêu chuẩn: <?php echo $product->getStandardConnection() ?></div>
			<div>Giao thức kết nối: <?php echo $product->getConnectionProtocon() ?></div>
			<div>Có led: <?php echo $product->getIsLed() ?></div>
			<div>Kích cỡ: <?php echo $product->getSize() ?></div>
	<?php
	}

?>
<?php //require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>
