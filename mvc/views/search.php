<?php
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';

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

	// filter product with search_request
	$listTmpProducts = array();
	if(array_key_exists("search_request", $_POST)){
			if($_POST['search_request'] != ""){
					$search_keys = $_POST['search_request'];
					for($i=0; $i<count($listProducts); $i++){
							if(strpos($listProducts[$i]->getModel(), $search_keys) !== false){
									array_push($listTmpProducts, $listProducts[$i]);
							}
					}
			}
	}

	if(count($listTmpProducts) != 0) $listProducts = $listTmpProducts;
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
	<title>Products | MTHH</title>
	<style>
	#request{
		transition: width 0.4s ease-in-out;
		width: 60%;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		font-size: 16px;
		background-color: white;
		background-image: url('searchicon.png');
		background-position: 10px 10px;
		background-repeat: no-repeat;
		padding: 12px 20px 12px 12px;
		transition: width 0.4s ease-in-out;
	}

	#request:focus{
		width:100%;
	}
	#search_label{
		width: 20%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}

	#submit{
		width: 15%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}
	</style>
</head>
<body>
<!-- includes nav bar -->
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
<br />
<div id="search">
	<form action="" method="POST">
		<input type="text" name="search_request" placeholder="nhập từ cần tìm kiếm vào đây..." id="request"><br />
		<select name="search_label" id="search_label"><option>Laptop</option><option>PC</option><option>Phụ kiện</option><option>Tất cả</option></select>
		<input type="submit" value="search" id="submit">
	</form>
</div>
<div class="all-product">
	<!-- <div class="title" >
		<a href="products"><h2>Xem tất cả sản phẩm</h2></a>
	</div> -->
		<?php for($p=0; $p<3; $p++){
		?>
		<div class="row">
			<?php
						$start = $p * 4;
						$end = $p * 4 + 4;
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
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li><a href="">4</a></li>
			<a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		</ul>
	</div>
</div>


<?php //require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
