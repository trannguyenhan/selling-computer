<?php
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'php' . DS . 'selling-computer');
    require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="main_page_css.php">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Project I</title>
</head>
<body>
	<!-- insert header to website -->
	<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'header.php' ?>
	
	<div class="collection">
		<h1 class = "title">Ưu đãi lớn khi mua hàng tại MTHH</h1>
		<img src="https://lumen.thinkpro.vn//backend/uploads/baiviet/2021/4/9/microsoft365_thumb.jpg">
	</div>
	<div class="categories">
		<div class="small-container">
			<h1 class = "title">Danh mục sản phẩm</h1>
			<div class="row">
				<div class="col-9">
					<a href="all_products_page.php"><img src="https://hanoicomputercdn.com/media/product/47380_laptop_dell_latitude_3400_l3400i5ssd_i5_8265u_8gb_ddr4_256gb_ssd_14_0_hd_dos_1.jpg"></a>
					<h3>Laptop</h3>
				</div>
				<div class="col-9">
					<a href="all_products_page.php"><img src="https://sc01.alicdn.com/kf/HTB1o3hKIKSSBuNjy0Flq6zBpVXaj/224199322/HTB1o3hKIKSSBuNjy0Flq6zBpVXaj.jpg_.webp"></a>
					<h3>PC</h3>
				</div>
				<div class="col-9">
					<a href="all_products_page.php"><img src="https://gpcantho.com/wp-content/uploads/2020/01/i98E59_simg_de2fe0_500x500_maxb.jpg"></a>
					<h3>Phụ kiện</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="featured_products">
		<div class="small-container">
			<h1 class = "title">Sản phẩm mới nhất</h1>
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
			         if($cnt > 2) break;
			      }
			?>
			</div>
		</div>
	</div>
	<!-- still not used -->
	<div class="special_offer">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="">
				</div>
				<div class="col-2">
					<h1></h1>
					<p></p>
				</div>
			</div>
		</div>
	</div>
	<div class="advertising">
		<img src="background/discount.jpg">
	</div>
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-x">
					<img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Dell_Logo.svg">
				</div>
				<div class="col-x">
					<img src="https://www.lg.com/lg5-common-gp/images/common/share/share-default.jpg" alt="">

				</div>
				<div class="col-x">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/1200px-HP_logo_2012.svg.png" alt="">
				</div>
				<div class="col-x">
					<img src="https://hitechsys.com/wp-content/uploads/avita-logo.png" alt="">
				</div>
				<div class="col-x">
					<img src="https://i.pinimg.com/originals/ba/b7/8b/bab78b1ab6202c17519384fb90b06412.png" alt="">
				</div>
				<div class="col-x">
					<img src="https://www.fpt.com.vn/Content/home/images/icon/ic-logo.png" alt="">
				</div>
				<div class="col-x">
					<img src="https://yt3.ggpht.com/ytc/AAUvwngqV6FGOKwpL5mBQThsaBhqkSnkhejYBUEYhddiTw=s900-c-k-c0x00ffffff-no-rj" alt="">
				</div>
			</div>
		</div>
	</div>
	
	<!-- insert footer page -->
	<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php' ?>
</body>
</html>