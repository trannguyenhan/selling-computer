<?php
	require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
	require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
	require_once ROOT . DS . 'mvc' . DS . 'models'.  DS . 'products' . DS . 'PC.php';
	require_once ROOT . DS . 'mvc' . DS . 'models'.  DS . 'products' . DS . 'ComputerMouseProducts.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="public/css/about.css" type="text/css">
	<link rel="stylesheet" href="public/css/footer_container.css" type="text/css">
	<link rel="stylesheet" href="public/css/nav_bar.css" type="text/css">
	<title>Product Detail | MTHH</title>
</head>
<body>
<!-- includes nav bar -->
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
<div>Thông tin sản phẩm</div>
<?php
	require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
	
	print "	<div>Hình ảnh: $product->getImage()</div>
			<div>Giá bán: $product->getPrice()</div>
			<div>Cân nặng: $product->getWeigh()</div>
			<div>Màu sắc: $product->getColor()</div>
			<div>Thương hiệu: $product->getSupplier()</div>
			<div>Mô tả sản phẩm: $product->getDescription()</div>";

	$check = TypeProductsServices::checkType($product->getProductID());

	if($check == Type::PC || $check == Type::Laptop) {
		print "	<div>CPU: $product->getCPU()</div>
				<div>RAM: $product->getRAM()</div>
				<div>Bộ nhớ: $product->getRAM()</div>
				<div>Màn hình: $product->getScreen()</div>
				<div>Card đồ họa: $product->getCard()</div>
				<div>Kết nối chính: $product->getMainConnection()</div>
				<div>Hệ điều hành: $product->getOS()</div>";
		
		if($check == Type::PC) {
			print "<div>Case: $product->getCase()>/div>";
		}
		else {
			print "<div>Pin: $product->getBattery()</div>";
		}
	}
	else {
		print "	<div>Kết nối tiêu chuẩn: $product->getStandardConnection()</div>
				<div>Giao thức kết nối: $product->getConnectionProtocon()</div>
				<div>Có led: $product->getIsLed()</div>
				<div>Kích cỡ: $product->getSize()</div>";
	}
	
?>
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>