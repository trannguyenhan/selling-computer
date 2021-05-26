<?php
global $path_project;
?>
<div class="nav_bar">
	<div class="logo">
		<a href=<?php echo "/" . $path_project . "/" ?>><img src=<?php echo "/" . $path_project . "/" . "images/logo/logo.png" ?> width="125px"></a>
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
		<a href=<?php echo "/" . $path_project . "/" . "search" ?>><img src=<?php echo "/" . $path_project . "/" . "images/logo/searchbox.jpg" ?> width="30px"></a>
		<!-- <div class="menu"> -->
		<img src=<?php echo "/" . $path_project . "/" . "images/logo/menu.png" ?> alt="" class = "menu" onclick="menuToggle()" />
		<!-- </div> -->
	</div>
</div>
<script type="text/javascript" src = <?php echo "/" . $path_project . "/" . "public/javascript/nav_bar.js" ?>></script>
