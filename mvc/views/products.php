<?php
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/products.css" >
	<title>Products | MTHH</title>
</head>
<body>
	<!-- includes nav bar -->
	<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>

	<div class="products_container">
		<h1 class = "title">Máy tính xách tay</h1>
		<div class="row">
		
			<!-- insert new products -->
			<?php $service = new LaptopServices();
			      $listLaptop = $service->getAll();
			      
			      $cnt = 0;
			      foreach ($listLaptop as $laptop){
			         $cnt++;
			?>
				<div class="col-3">
					<img src=<?php echo "\"" . $laptop->getImage() . "\"" ?> >
					<h3></h3>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<p><?php echo $laptop->getPrice() . " VNĐ" ?></p>
				</div>
			<?php 
			         
			      }
			?>
		</div>

		<h1 class = "title">Máy tính để bàn</h1>
		<div class="row">
		
			<!-- insert new products -->
			<?php $service = new PCServices();
			      $listPC = $service->getAll();
			      
			      $cnt = 0;
			      foreach ($listPC as $pc){
			         $cnt++;
			?>
				<div class="col-3">
					<img src=<?php echo "\"" . $pc->getImage() . "\"" ?> >
					<h3></h3>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<p><?php echo $pc->getPrice() . " VNĐ" ?></p>
				</div>
			<?php 
			         
			      }
			?>
		</div>

		<h1 class = "title">Phụ kiện</h1>
		<div class="row">
		
			<!-- insert new products -->
			<?php $service = new ComputerMouseProductsServices();
			      $listMouse = $service->getAll();
			      
			      $cnt = 0;
			      foreach ($listMouse as $mouse){
			         $cnt++;
			?>
				<div class="col-3">
					<img src=<?php echo "\"" . $mouse->getImage() . "\"" ?> >
					<h3></h3>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<p><?php echo $mouse->getPrice() . " VNĐ" ?></p>
				</div>
			<?php 
			         
			      }
			?>
		</div>
	</div>