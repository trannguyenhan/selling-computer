<?php
    // check session
    ob_start();
    session_start();

    if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
    		header("Location: login");
    }

    require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
    $service = new GuestServices();
    $username = $_SESSION['username'];

    $person = $service->get($username);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/profile.css">
  <link rel="stylesheet" href="public/css/footer_container.css" type="text/css">
	<link rel="stylesheet" href="public/css/nav_bar.css">
	<title>Profile | MTHH</title>
</head>
<!-- includes nav bar -->
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
<section>
	<div class="account_container">
		<div class="left_side_bar">
			<h1>My account</h1>
			<ul>
				<li><a href="#profile"><i class="fa fa-user" aria-hidden="true"></i>Quản lý tài khoản</a></li>
				<li><a href="#order"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Lịch sử</a></li>
				<!-- <li><a href="#address"><i class="fa fa-truck" aria-hidden="true"></i>Địa chỉ giao hàng</a></li> -->
				<li><a href="#payment"><i class="fa fa-credit-card" aria-hidden="true"></i>Phương thức thanh toán</a></li>
				<li><a href="#pwd"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Quản lý mật khẩu</a></li>
			</ul>
		</div>
		<div class="main_content">
			<div class="user" id ="profile">
				<div class="row">
					<div class="user-title">
						<h1>Thông tin cá nhân</h1>
						<p>Giữ cho tài khoản của bạn được an toàn hơn</p>
						<hr>
					</div>
					<div class="user-content">
						<div class="label">
							<label for="sign_name">Tên đăng nhập</label>
							<label for="name">Tên</label>
							<!-- <label for="useremail">Email</label> -->
							<label for="phone">Số điện thoại</label>
              <label for="address">Địa chỉ</label>
							<!-- <label for="sex">Giới tính</label> -->
							<!-- <label for="birthday">Sinh nhật:</label> -->
						</div>
						<div class="input">
              <form action="library/refresh_profile.php" method="POST">
  							<div class="input_text">
  								<p><input type="text" name="username" class="sign_name" value = "<?php echo $person->getUsername(); ?>" readonly="readonly">
  								<!-- <a href="">Change</a></p> -->
  								<p><input type="text" name="name" class = "name" value = "<?php echo $person->getName(); ?>">
  								<!-- <a href="">Change</a></p> -->
  								<!-- <p><input type="email" class="useremail" value = "buiviethoang12062000@gmail.com">
  								<a href="">Change</a></p> -->
  								<p><input type="text" name="telephone" class="phone" value="<?php echo $person->getTelephone(); ?>">
                  <p><input type="text" name="address" class="phone" value="<?php echo $person->getAddress(); ?>">
  								<!-- <a href="">Change</a></p> -->
  							</div>
  							<!-- <div class="radio">
  								<p>Nam</p><input type="radio" id="male" name="gender" value="male">

  								<p>Nu</p><input type="radio" id="female" name="gender" value="female">

  								<p>BD</p><input type="radio" id="other" name="gender" value="other">
  							</div> -->
  							<!-- <input type="date" id="birthday" name="birthday"> -->
                <br />
  							<button type="submit">Save</button>
              </form>
						</div>




					</div>
					<div class="extra-content">
						<img src="https://i0.wp.com/s1.uphinh.org/2021/04/25/Untitled-Design-3.png" alt="" width=""><br>
						<!-- <button>Choose image</button> -->
						<br>
						<!-- <p>File size <= 10MB, style: PNG, JPG,...</p> -->
					</div>
				</div>
			</div>

			<div class="order_content" id="order">
				<div class="row">
					<div class="status">
						<ul>
							<li><a href="">Tất cả</a></li>
							<li><a href="">Đang xác nhận</a></li>
							<li><a href="">Đang giao hàng</a></li>
							<li><a href="">Đã giao hàng</a></li>
							<li><a href="">Đã hủy</a></li>
						</ul>
					</div>
					<div class="search">
            <br /><!-- Chức năng tìm kiếm, phát triển sau -->
						<!-- <p><i class="fa fa-search" aria-hidden="true"></i><input type="text" placeholder="Tim kiem theo ten shop, ten sp"></p> -->
					</div>
					<div class="main_order">
            <?php
                $service = new GuestServices();
                $listProductsBill = $service->getListProductsBill($username);
                $sum = 0;
                require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
                require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
                require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
                require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
                require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';
                foreach ($listProductsBill as $bill) {

                    $product;
                    $type = TypeProductsServices::checkType($bill->getProductID());
                    if($type == Type::PC){
                        $service = new PCServices();
                        $product = $service->get($bill->getProductID());
                    } else if ($type == Type::LAPTOP){
                        $service = new LaptopServices();
                        $product = $service->get($bill->getProductID());
                    } else if ($type == Type::MOUSE){
                        $service = new ComputerMouseProductsServices();
                        $product = $serive->get($bill->getProductID());
                    }
                    $sum += intval($product->getPrice()) * intval($bill->getQuantity());

            ?>
  						<!-- <div class="service">
  							<ul>
  								<li><a href=""><img src="https://thietkeweb9999.com/data/upload/blog/logo/tong-hop-30-mau-logo-dep-hinh-con-dai-bang-06.jpg" alt=""><span>Hoang's shop</span></a></li>
  								<li><a href=""><i class="fa fa-comments-o" aria-hidden="true"></i>chat</a></li>
  								<li><a href=""><i class="fa fa-eye" aria-hidden="true"></i>
  								xem shop</a></li>
  								<li ><a href="" id = 'ship' ><i class="fa fa-truck" aria-hidden="true"></i>giao hang thanh cong</a></li>
  							</ul>
  							<hr>
  						</div> -->
  						<div class="detail">
  							<div class="col-1">
  								<img src="<?php echo $product->getImage() ?>" alt="">
  							</div>
  							<div class="col-2">
  								<p id = 'deal'><?php echo $bill->getDateBill() ?></p>
  								<p><?php echo $product->getModel() ?></p>
  								<p id = 'quantity'>x<?php echo $bill->getQuantity() ?></p>
  							</div>
  							<div class="col-3">
  								<p><!--<del>1293$</del>--><?php echo intval($product->getPrice())*intval($bill->getQuantity()) ?></p>
  							</div>
  							<hr>
  						</div>
            <?php } ?>
						<div class="result">
							<p><i class="fa fa-shield" aria-hidden="true"></i>Tổng :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span><?php echo $sum ?> VNĐ</span> </p>
							<hr>
							<!-- <div class="action">
								<button>Mua lan nua</button>
								<button>Xem chi tiet don hang</button>
								<select name="Them" id="">
									<option value="">Xem danh gia shop</option>
									<option value="">Xem danh gia nguoi mua</option>
								</select>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="address_content" id = 'address'>
				<div class="row">
					<div class="address_title">
						<h1>Địa chỉ</h1>
						<p id = 'add'><i class="fa fa-plus" aria-hidden="true"></i>Thay đổi địa chỉ</p>
						<hr>
					</div>
					<div class="main_address">
						<div class="label">
							<p>Tên:</p>
							<p>Điện thoại:</p>
							<p>Địa chỉ: </p>
						</div>
						<div class="info">
							<p><?php //echo $person->getName() ?><span id='default'><i class="fa fa-check" aria-hidden="true"></i>Mac dinh</span></p>
							<p><?php //echo $person->getTelephone() ?></p>
							<p><?php //echo $person->getAddress()?></p>

						</div>
						<button>Chinh sua</button>
						<button>Xoa</button>
					</div>
				</div>
			</div> -->
			<div class="payment_content" id='payment'>
				<div class="row">
					<div class="cards">
						<h1>Phương thức thanh toán</h1>
						<p id = 'add'><i class="fa fa-plus" aria-hidden="true"></i>Thay đổi phương thức thanh toán</p>
						<hr>
						<div class="content">
							<h2>Hiện cửa hàng chỉ cung cấp thanh toán bằng tiền mặt khi nhận hàng</h2>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="bank_title">
						<h1>Tai khoan ngan hang</h1>
						<p id = 'add'><i class="fa fa-plus" aria-hidden="true"></i>Them tai khoan ngan hang</p>
						<hr>
					</div>
					<div class="bank">
						<div class="b-col-1">
							<img src="https://i.pinimg.com/474x/7a/74/cf/7a74cffd6c177f5d9c86d62438b1d6ce.jpg" alt="">
						</div>
						<div class="b-col-2">
							<p>Viettinbank<span id = 'check'>Da kiem tra</span><span id='default'><i class="fa fa-check" aria-hidden="true"></i>Mac dinh</span></p>
							<p>Ho va ten: Bui Viet Hoang</p>
							<p><span id = 'blur'>Khu vuc:</span> Ha Noi</p>
							<p><span id = 'blur'>Chi nhanh:</span> Hai Ba Trung</p>
						</div>
						<div class="b-col-3">
							<button>Xoa</button>
							<p id = 'check'>Thiet lap mac dinh</p>
						</div>
					</div>
				</div> -->
			</div>
			<div class="password" id='pwd'>
				<div class="row">
					<div class="pwd_title">
						<h1>Bảo mật</h1>
						<p>Thay đổi mật khẩu 6 tháng 1 lần để bảo vệ tài khoản của bạn</p>
						<hr>
					</div>
					<div class="label">
						<label for="new_pwd">Mật khẩu hiện tại</label>
						<label for="new_pwd_verify">Mật khẩu mới</label>
						<label for="validation">Xác nhận mật khẩu mới</label>
					</div>
          <form action="library/refresh_password.php" method="POST">
  					<div class="input">
  						<input type="password" name="old_password">
  						<br>
  						<input type="password" name="new_password">
  						<br>
  						<input type="password" name="re_new_password"><!--<span>Gui ma xac minh</span>-->
  						<br>
  						<button type="submit">Xác nhận</button>
  					</div>
          </form>
				</div>
			</div>
        <a href="library/refresh_session.php"><button type="submit">Đăng xuất</button></a>
		</div>

				<!-- <div class="right_side_bar">
					<a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
				</div> -->
  </div>
</section>
