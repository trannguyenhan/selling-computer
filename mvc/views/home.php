<?php
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="public/css/home.css" type="text/css">
		<link rel="stylesheet" href="public/css/footer_container.css" type="text/css">
		<link rel="stylesheet" href="public/css/nav_bar.css">
		<script>
			var cnt = 1;
			function convert(){
					cnt++; if(cnt == 100) cnt = 0;
					var col_1 = document.getElementById("col-2-1");
					var col_2 = document.getElementById("col-2-2");
					var img_1 = document.getElementById("img-1");
					var img_2 = document.getElementById("img-2");

					if(cnt % 2 == 0){
							col_2.style.display = "";
							img_2.style.display = "";
							col_1.style.display = "none";
							img_1.style.display = "none";

					} else {
							col_1.style.display = "";
							img_1.style.display = "";
							col_2.style.display = "none";
							img_2.style.display = "none";
					}

					// console.log(col_2.style.display);
					// console.log(col_1.style.display)
			}
		</script>
		<title>Home | MTHH</title>
	</head>
	<body>
		<!-- includes nav bar -->
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<!-- <div class="row">
        <div class="col-2" style="padding-left: 100px">
            <h1>Tìm kiếm những mẫu máy tính mới nhất của chúng tôi!</h1>
            <p>Khai thông sức mạnh, dẫn đâu xu hướng</p>
            <a href="products" class = "btn">Khám phá ngay&#8594;</a>
        </div>
        <div class="col-2">
            <img src="https://i0.wp.com/s1.uphinh.org/2021/04/25/zapmaster_serviceability_01_tcm2649_2908010_tcm2649_2908098_tcm2649-2908010.png">
        </div>
    </div> -->

		<div class="slideshow-container">
			<div class="slides" id="home">
				<div class="row">
					<div class="col-2" id="col-2-1" style="padding-left:10%;">
						<h1>Tìm kiếm những mẫu máy tính mới nhất của chúng tôi!</h1><br>
						<q>Khai thông sức mạnh, dẫn đâu xu hướng</q><br>
						<a href="products" class = "btn">Khám phá ngay&#8594;</a>
					</div>
					<div class="col-2" id="col-2-2" style="padding-left:10%; display : none">
						<h1>Xem thêm về chúng tôi để hiểu hơn về chúng tôi và Team MTHH</h1><br>
						<q>MTHH Team</q><br>
						<a href="about" class = "btn">Xem giới thiệu&#8594;</a>
					</div>
					<div class="col-2" style="min-height : 648px;">
						<img id="img-1" src="public/images/logo/laptophome.png">
						<img id="img-2" src="public/images/logo/aboutme.png" style="display:none">
					</div>
				</div>
			</div>

			<!-- <div class="slides" id="collection">
				<img src="https://lumen.thinkpro.vn//backend/uploads/baiviet/2021/4/9/microsoft365_thumb.jpg">
			</div>
			<br />
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(1)"></span>
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a> -->
			<a class="prev" onclick="convert()">&#10094;</a>
			<a class="next" onclick="convert()">&#10095;</a>
		</div>

		<div class="categories">
			<div class="small-container">
				<h1 class = "title">Danh mục sản phẩm</h1>
				<div class="row">
					<div class="col-3">
						<a href="search&label=laptop"><img src="public/images/logo/laptoplabel.jpg"></a>
						<h3>Laptop</h3>
					</div>
					<div class="col-3">
						<a href="search&label=pc"><img src="public/images/logo/pclabel.webp"></a>
						<h3>PC</h3>
					</div>
					<div class="col-3">
						<a href="search&label=mouse"><img src="public/images/logo/mouselabel.jpg"></a>
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
					$path = $laptop->getModel();
					$path = str_replace(' ', '-', $path);
					$cnt++;
					?>
					<div class="col-3">
						<a href="<?php echo "details/" . $laptop->getProductID() . "/" . $path ?>"><img src=<?php echo "\"" . $laptop->getImage() . "\"" ?> ></a>
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
						<!-- <img src=""> -->
					</div>
					<div class="col-2">
						<h1></h1>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="advertising">
			<img src=<?php echo "/" . $path_project . "/" . "images/background/discount.jpg"?> height="500rem"><br /><br /><br /><br />
		</div> -->
		<h1 class = "title">Thương hiệu hợp tác</h1>
		<div class="brands">
			<div class="small-container">
				<div class="row">
					<div class="col-7">
						<a href="search&label=all&supplier=dell" ><img src="images/logo/Dell_Logo.svg"></a>
					</div>
					<div class="col-7">
						<a href="search&label=all&supplier=lg" ><img src="images/logo/LG.jpg" alt=""></a>
					</div>
					<div class="col-7">
						<a href="search&label=all&supplier=hp" ><img src="images/logo/HP.png" alt=""></a>
					</div>
					<div class="col-7">
						<a href="search&label=all&supplier=avita" ><img src="images/logo/avita.png" alt=""></a>
					</div>
					<div class="col-7">
						<a href="search&label=all&supplier=logitech" ><img src="images/logo/logitech.png" alt=""></a>
					</div>
					<div class="col-7">
						<a href="search&label=all&supplier=thinkpad" ><img src="images/logo/thinkpad.jpg" alt=""></a>
					</div>
					<div class="col-7">
						<a href="search&label=all&supplier=lenovo" ><img src="images/logo/lenovo.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Js for slide show -->
		<script type="text/javascript" src="public/javascript/home.js"></script>
