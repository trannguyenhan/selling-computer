<?php
    global $path_project;
?>
<div class="nav_bar">
	<div class="logo">
		<a href="home"><img src="https://i0.wp.com/s1.uphinh.org/2021/04/25/Untitled-Design-3.png" width="125px"></a>
	</div>
	<nav>
		<ul>
			<li><a href=<?php echo "/" . $path_project . "/" . "home" ?>><span>Trang chủ</span></a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "about" ?>>Về chúng tôi</a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "products" ?>>Sản phẩm</a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "contact" ?>>Liên hệ</a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "account" ?>>Tài khoản</a></li>
		</ul>
	</nav>
	<div class="cart-logo">
		<a href=<?php echo "/" . $path_project . "/" . "cart" ?>><img src=<?php echo "/" . $path_project . "/" . "images/logo/cart.png" ?> width="30px"></a>
	</div>
</div>
