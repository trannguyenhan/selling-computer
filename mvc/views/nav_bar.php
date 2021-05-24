<?php
global $path_project;
?>
<div class="nav_bar">
	<div class="logo">
		<a href=<?php echo "/" . $path_project . "/" ?>><img src="https://i0.wp.com/s1.uphinh.org/2021/04/25/Untitled-Design-3.png" width="125px"></a>
	</div>
	<nav id = "nav">
			<ul id = "menuitem">
				<li><a href=<?php echo "/" . $path_project . "/"?>><span>Trang chủ</span></a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "about" ?>>Về chúng tôi</a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "products" ?>>Sản phẩm</a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "contact" ?>>Liên hệ</a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "login" ?>>Tài khoản</a></li>
			</ul>

	</nav>
	<div class="cart-logo">
		<a href=<?php echo "/" . $path_project . "/" . "cart" ?>><img src=<?php echo "/" . $path_project . "/" . "images/logo/cart.png" ?> width="30px"> &nbsp;</a>
		<a href=<?php echo "/" . $path_project . "/" . "search" ?>><img src="https://icon-library.com/images/search-box-icon-png/search-box-icon-png-1.jpg" width="30px"></a>
		<!-- <div class="menu"> -->
		<img src=<?php echo "/" . $path_project . "/" . "images/logo/menu.png" ?> alt="" class = "menu" onclick="menuToggle()">
		<!-- </div> -->
	</div>
</div>
<script>
	var menuItems = document.getElementById('menuitem');
	menuItems.style.maxHeight = "0px";
	// var nav_bar = document.getElementById
	function menuToggle() {
		if (menuItems.style.maxHeight == "0px") {
			menuItems.style.maxHeight = "220px";
			document.getElementById("nav").style.zIndex = "2";
		}
		else {
			menuItems.style.maxHeight = "0px";
		}
	}
</script>
