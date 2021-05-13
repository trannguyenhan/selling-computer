<?php
    require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
    require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
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
<h1>Thông tin sản phẩm</h1>
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>