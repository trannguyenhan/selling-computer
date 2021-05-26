<?php
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';
$service;
$page;

	// assign value for GET['label']
if(array_key_exists("label", $_GET)){
		$label = $_GET['label'];
} else {
		$label = "all";
}

// POST method is priority more GET
if(array_key_exists("search_label", $_POST)){
		if(strcmp($_POST['search_label'], "Laptop") == 0){
				$label = "laptop";
		} else if (strcmp($_POST['search_label'], "PC") == 0){
				$label = "pc";
		} else if (strcmp($_POST['search_label'], "Phụ kiện") == 0){
				$label = "mouse";
		} else {
				$label = "all";
		}
}

if(strcmp($label, "mouse") == 0){
		$service = new ComputerMouseProductsServices();
} else if (strcmp($label, "pc") == 0){
		$service = new PCServices();
} else {
		$service = new LaptopServices();
}

if(array_key_exists("page", $_GET)){
		$page = intval($_GET['page']);
} else {
		$page = 1;
}

$listProducts = $service->getAll(); // list product
// if request is all -> get all products
if(strcmp($label, "all") == 0){
		$service = new PCServices();
		$listProducts = array_merge( $listProducts, $service->getAll());
		$service = new ComputerMouseProductsServices();
		$listProducts = array_merge( $listProducts, $service->getAll());
}

$listTmpProducts = array();
$cnt = 0;
// filter with supplier
if(array_key_exists("supplier", $_GET)){
		$supp = $_GET['supplier'];
		for($i=0; $i<count($listProducts); $i++){
				if(strpos(strtolower($listProducts[$i]->getSupplier()), $supp) !== false){
						array_push($listTmpProducts, $listProducts[$i]);
				}
		}
		$cnt++;
}
if($cnt != 0) $listProducts = $listTmpProducts;

// filter with price
if(array_key_exists("price", $_GET)){
		$pri = intval($_GET['price']);

		if($pri == 1){
				for($i=0; $i<count($listProducts); $i++){
						if($listProducts[$i]->getPrice() > 1000000 && $listProducts[$i]->getPrice() <= 2000000){
								array_push($listTmpProducts, $listProducts[$i]);
						}
				}
		} else if($pri == 2){
				for($i=0; $i<count($listProducts); $i++){
						if($listProducts[$i]->getPrice() > 2000000 && $listProducts[$i]->getPrice() <= 10000000){
								array_push($listTmpProducts, $listProducts[$i]);
						}
				}
		} else if($pri == 10){
				for($i=0; $i<count($listProducts); $i++){
						if($listProducts[$i]->getPrice() > 10000000 && $listProducts[$i]->getPrice() <= 20000000){
								array_push($listTmpProducts, $listProducts[$i]);
						}
				}
		} else if($pri == 20){
			for($i=0; $i<count($listProducts); $i++){
					if($listProducts[$i]->getPrice() > 20000000){
							array_push($listTmpProducts, $listProducts[$i]);
					}
			}
		}

		$cnt++;
}
if($cnt != 0) $listProducts = $listTmpProducts;

// filter with weigh
if(array_key_exists("weigh", $_GET)){
	 $wei = intval($_GET['weigh']);

	 if($wei == 1){
			 for($i=0; $i<count($listProducts); $i++){
					 if($listProducts[$i]->getWeigh() < 1){
							 array_push($listTmpProducts, $listProducts[$i]);
					 }
			 }
	 } else if($wei == 2){
			 for($i=0; $i<count($listProducts); $i++){
					 if($listProducts[$i]->getWeigh() >= 1 && $listProducts[$i]->getWeigh() <= 2){
							 array_push($listTmpProducts, $listProducts[$i]);
					 }
			 }
	 } else if($wei == 3){
			 for($i=0; $i<count($listProducts); $i++){
					 if($listProducts[$i]->getWeigh() >= 2 && $listProducts[$i]->getWeigh() <= 3){
							 array_push($listTmpProducts, $listProducts[$i]);
					 }
			 }
	 } else if($wei == 4){
		 for($i=0; $i<count($listProducts); $i++){
				 if($listProducts[$i]->getWeigh() >= 3){
						 array_push($listTmpProducts, $listProducts[$i]);
				 }
		 }
	 }

	 $cnt++;
}
if($cnt != 0) $listProducts = $listTmpProducts;

// filter with os
if(array_key_exists("os", $_GET)){
		$type_services = new TypeProductsServices();
		$os = $_GET['os'];
		for($i=0; $i<count($listProducts); $i++){
				$type = TypeProductsServices::checkType($listProducts[$i]->getProductID());
				if($type == Type::MOUSE){
						continue;
				}
				if(strpos(strtolower($listProducts[$i]->getOS()), $os) !== false){
						array_push($listTmpProducts, $listProducts[$i]);
				}
		}
		$cnt++;
}
if($cnt != 0) $listProducts = $listTmpProducts;

$listTmpProducts = array();
$cnt = 0;
// filter product with search_request
if(array_key_exists("search_request", $_POST)){
		echo $_POST["search_request"];
		if($_POST['search_request'] != ""){
				$search_keys = $_POST['search_request'];
				for($i=0; $i<count($listProducts); $i++){
						if(strpos(strtolower($listProducts[$i]->getModel()), strtolower($search_keys)) !== false){
								array_push($listTmpProducts, $listProducts[$i]);
						}
				}
				$cnt++;
		} else {
			$cnt = 0;
		}
}
if($cnt != 0) $listProducts = $listTmpProducts;

$lens = count($listProducts);				// number of product in search
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/products.css" >
		<link rel="stylesheet" href="public/css/footer_container.css">
		<link rel="stylesheet" href="public/css/nav_bar.css">
		<link rel="stylesheet" href="public/css/search.css">
		<title>Products | MTHH</title>
	</head>
	<body>
		<!-- includes nav bar -->
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<div class="product-container">
			<div class="left-bar">
				<div class="sidenav">
					<button class="dropdown-btn">Thương hiệu<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="search&label=all&supplier=dell">DELL<!--<span>(30000)</span>--></a>
						<a href="search&label=all&supplier=hp">HP<!--<span>(30000)</span>--></a>
						<a href="search&label=all&supplier=logitech">LOGITECH<!--<span>(30000)</span>--></a>
						<a href="search&label=all&supplier=avita">AVITA<!--<span>(30000)</span>--></a>
					</div>
					<button class="dropdown-btn">Giá tiền<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="search&label=all&price=1">1.000.000 - 2.000.000<!--<span>(30000)</span>--></a>
						<a href="search&label=all&price=2">2.000.000 - 10.000.000<!--<span>(30000)</span>--></a>
						<a href="search&label=all&price=10">10.000.000 - 20.000.000<!--<span>(30000)</span>--></a>
						<a href="search&label=all&price=20">20.000.000 - <!--<span>(30000)</span>--></a>
					</div>
					<button class="dropdown-btn">Cân nặng<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="search&label=all&weigh=1">Nhỏ hơn 1kg<!--<span>(30000)</span>--></a>
						<a href="search&label=all&weigh=2">1kg - 2kg<!--<span>(30000)</span>--></a>
						<a href="search&label=all&weigh=3">2kg - 3kg<!--<span>(30000)</span>--></a>
						<a href="search&label=all&weigh=4">Lớn hơn 3kg<!--<span>(30000)</span>--></a>
					</div>
					<button class="dropdown-btn">Hệ điều hành<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="search&label=all&os=windows">Windows</a>
						<a href="search&label=all&os=linux">Linux</a>
						<!-- <a href="all_products_page.php?view=view&id_price=200000"><200000đ</a>
						<a href="all_products_page.php?view=view&id_price=200000"><200000đ</a> -->
					</div>
				</div>
			</div>
			<div class="all-product">
				<div id="search">
				<form action="" method="POST">
					<input type="text" name="search_request" placeholder="nhập từ cần tìm kiếm vào đây..." id="request"><br />
					<select name="search_label" id="search_label">
						<option>Laptop</option>
						<option>PC</option>
						<option>Phụ kiện</option>
						<option>Tất cả</option>
					</select>
					<input type="submit" value="Search" id="submit">
				</form>
				</div>
				<div class="title" >
					<h2>Sản phẩm tìm kiếm</h2>
				</div>
				<?php for($p=0; $p<3; $p++){
				?>
				<div class="row">
					<?php
								$start = ($p + 3 * ($page-1)) * 4;
								$end = ($p + 3 * ($page-1)) * 4 + 4;
								if($end > $lens) $end = $lens;
								for ($i=$start; $i<$end; $i++){
									if($i > $lens) break;
									$product = $listProducts[$i];
									$path = $product->getModel();
									$path = str_replace(' ', '-', $path);
					?>
					<div class="col-4">
						<div class="product-grid">
							<a href="<?php echo "details/" . $product->getProductID() . "/" . $path ?>">
								<div class="product-image">
									<img src=<?php echo "\"" . $product->getImage() . "\"" ?> >
									<span class="product-trend-label">Xem sản phẩm</span>
									<span class="product-discount-label">50%</span>
									<ul class="social">
										<li><a href="<?php;?>" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class = "fa fa-shopping-cart" onclick="cart_change()"></i></a></li>
										<li><a href="#" data-toggle="tooltip" data-placement="top" title="Wish List"><i class = "fa fa-heart"></i></a></li>
										<li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class = "fa fa-random"></i></a></li>
										<li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class = "fa fa-search"></i></a></li>
									</ul>
								</div>
							</a>
							<div class="product-content">
								<p><?php echo $product->getModel() . "\n"?></p>
								<p><?php echo $product->getPrice() . " VNĐ"; ?><sup color='red';>đ</sup></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
				<div class="next-pages">
					<ul>

						<?php
							for($i=1; $i< intval($lens / 12) + 2; $i++){
									echo "<li><a href='search&page=$i'>$i</a></li>";
							}
						?>
						<a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</ul>
				</div>
			</div>
		</div>
<script type="text/javascript" src = "public/javascript/product.js"></script>
