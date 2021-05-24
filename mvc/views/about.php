<?php ?>
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
		<title>About | MTHH</title>
	</head>
	<body>
		<!-- includes nav bar -->
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<div class="about_container" style="font-family: 'Pacifico', cursive;">
			<div class="title">
				<h1>Tại sao lại chọn chúng tôi ?</h1>
				<q>Mọi ngày làm việc của chúng tôi là đem tới cho khách hàng những trải nghiệm tốt hơn</q>
			</div>
			<div class="row">
				<div class="col-2">
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<h4>Trả lời nhanh</h4>
					<p>Hệ thống chúng tôi luôn có nhân viên trực 24/24 sẵn sàng trả lời mọi thắc mắc của các bạn.</p>
					<h4>Hộ trợ tận tình</h4>
					<p>Nếu bạn không biết đâu là sản phẩm phù hợp với bạn, nhân viên của chúng tôi có thể giúp bạn.</p>
					<h4>Chúng tôi quan tâm tới từng chi tiết</h4>
					<p>Những chi tiết dù là nhỏ nhất chún tôi cũng luôn luôn không bỏ qua để mang lại cho bạn trải nghiệm tốt hơn mỗi ngày. </p>
					<br><br>
					<img src="images/about/about1.jpg">
				</div>
				<div class="col-2">
					<img src="images/about/about2.jpg">
					<br>
					<img src="images/about/about3.jpg" id = 'small'>
				</div>
			</div>
		</div>