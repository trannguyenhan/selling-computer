<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="cart_css.php">
	<link rel="stylesheet" type="text/css" href="all_products_page_css.php">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Project I</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="nav_bar">
				<div class="logo">
					<img src="logo/logo.png" width="125px">
				</div>
				<nav>
					<ul>
						<li><a href="main_page.php"><span>Home</span></a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="all_products_page.php">Products list</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="account.php">Account</a></li>
					</ul>
				</nav>
				<img src="logo/cart.png" width="30px">
			</div>
			<div class="row">
				<div class="col-2">
					<h1>Check Out Our New Designs!</h1>
					<p>Se khong lam ban phai that vong</p>
					<a href="" class = "btn">Explore Now&#8594;</a>
				</div>
				<div class="col-2">
					<img src="background/image1.png">
				</div>
			</div>
		</div>
	</header>
	<!-- -----------cart items details------------ -->
	<div class="small-container cart-page">
		<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="hoodie/ao_hoodie_1.jpg">
						<div>
							<p>Hoodie</p>

							<small>Price: 500000đ</small>
							<br>
							<a href="cart.php">Remove</a>
						</div>

					</div>
				</td>
				<td><input type="number" name="" value="300"></td>
				<td><del>700000đ</del>500000đ</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="hoodie/ao_hoodie_1.jpg">
						<div>
							<p>Hoodie</p>

							<small>Price: 500000đ</small>
							<br>
							<a href="cart.php">Remove</a>
						</div>

					</div>
				</td>
				<td><input type="number" name="" value="300"></td>
				<td><del>700000đ</del>500000đ</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="hoodie/ao_hoodie_1.jpg">
						<div>
							<p>Hoodie</p>

							<small>Price: 500000đ</small>
							<br>
							<a href="cart.php">Remove</a>
						</div>

					</div>
				</td>
				<td><input type="number" name="" value="300"></td>
				<td><del>700000đ</del>500000đ</td>
			</tr>
		</table>
		<div class="total-price">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>500000đ</td>
				</tr>
				<tr>
					<td>Tax</td>
					<td>35.000đ</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>535000đ</td>
				</tr>
			</table>
		</div>
		<a href="order.php?subtotal=535000" class = 'btn'>Confirm order</a>
	</div>
	<!-- -----------------------footer------------------- -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>About Us</h3>
					<p><a href="">+84794112293</a></p>
					<a href="mailto:buiviethoang12062000@gmail.com">buiviethoang12062000@gmail.com</a>
					<p><address>Ngo Hoa Binh, Hai Ba Trung, Ha Noi</address></p>
					<a href="">Specific In4</a>
				</div>
				<div class="footer-col-2">
					<h3>Help</h3>
					<ul>
						<li><a href="">FAQs</a></li>
						<li><a href="">Delivery Services</a></li>
						<li><a href="">Return & Exchanges</a></li>
						<li><a href="">Payment Options</a></li>
						<li><a href="">Unsubscribe</a></li>
					</ul>
				</div>
				<div class="footer-col-3">
					<img src="logo/logo.png" width="125px">
					<p>We're not merely your friend<br>We're your company!</p>
				</div>
				<div class="footer-col-4">
					<h3>Contact Us</h3>
					<ul>
						<li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a></li>
						<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
						<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
						<li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a></li>
						<li><a href=""><i class="fa fa-snapchat" aria-hidden="true"></i> Snapchat</a></li>
					</ul>
				</div>
				<div class="footer-col-5">
					<h3>Our Apps</h3>
					<p>Download our iOS app</p>
					<img src="logo/app-store.png" class="first_img">
					<img src="logo/app-store2.png" class="second-img">
					<p>Download our Android app</p>
					<img src="logo/play-store.png" class="first_img">
					<img src="logo/play-store2.png" class="second-img">
				</div>
			</div>
		</div>
		<hr>
		<div class="copyright">
			<p>Copyright&#169; by Bui Viet Hoang</p>
		</div>
	</div>
</footer>
<!-- -------------js for toggle menu----------------- -->
<script>
	var menuItems = document.getElementById('MenuItems')
	menuItems.style.maxHeight = "0px";
	function menutoggle() {
		if (menuItems.style.maxHeight == "0px") {
			menuItems.style.maxHeight = "200px";
		}
		else {
			menuItems.style.maxHeight = "0px";
		}
	}
</script>
</body>
</html>