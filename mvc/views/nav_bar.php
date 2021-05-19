<?php
    global $path_project;
?>
<div class="nav_bar">
	<div class="logo">
		<a href=<?php echo "/" . $path_project . "/" ?>><img src="https://i0.wp.com/s1.uphinh.org/2021/04/25/Untitled-Design-3.png" width="125px"></a>
	</div>
	<nav>
		<ul>
			<li><a href=<?php echo "/" . $path_project . "/"?>><span>Trang chủ</span></a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "about" ?>>Về chúng tôi</a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "products" ?>>Sản phẩm</a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "contact" ?>>Liên hệ</a></li>
			<li><a href=<?php echo "/" . $path_project . "/" . "login" ?>>Tài khoản</a></li>
		</ul>
	</nav>
	<div class="cart-logo">
		<a href=<?php echo "/" . $path_project . "/" . "cart" ?>><img src=<?php echo "/" . $path_project . "/" . "images/logo/cart.png" ?> width="30px"> &nbsp;</a>
    <a href="search"><img src="https://icon-library.com/images/search-box-icon-png/search-box-icon-png-1.jpg" width="30px"></a>
	</div>
</div>
