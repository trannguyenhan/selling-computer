<?php
		if(array_key_exists("username", $_POST)){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$address = $_POST['address'];
				$name_1 = $_POST['name_1'];
				$name_2 = $_POST['name_2'];
				$name = $name_1 . " " . $name_2;
				$telephone = $_POST['telephone'];
				require_once ROOT . DS .'services' . DS . 'GuestServices.php';
				require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Guest.php';
				$guest = new Guest($username, $password, $name, $address, $telephone);
				$service = new GuestServices();

				$listGuests = $service->getAll();
				$tmpGuest = $service->get($username);

				if(!in_array($tmpGuest, $listGuests)){
						$service->insert($guest);
						header("Location: login");
				} else {
						echo "<script>Tài khoản bị trùng</script>";
				}
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/account.css">
		<link rel="stylesheet" href="public/css/nav_bar.css" type="text/css">
		<link rel="stylesheet" href="public/css/footer_container.css" type="text/css">
		<title>Home | MTHH</title>
	</head>
	<body>
		<!-- includes nav bar -->
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<div class="container">
			<form id = "form1">
				<h3>TẠO TÀI KHOẢN</h3>
				<input type="text" name="username" placeholder="Username" id="username" title="usename không quá 50 kí tự và không được để trống" required>
				<input type="password" name="password" placeholder="Password" title="password không quá 50 kí tự và không được để trống" id="password" required>
				<input type="password" name="check_password" placeholder="Confirm Password" id="check_password" required>
				<div class="btn-box">
					<button type = "button" id = "next1">Next</button>
				</div>
			</form>
			<form id = "form2">
				<h3>ĐỊA CHỈ</h3>
				<input type="text" name="add_1" id="add_1" placeholder="Tỉnh">
				<input type="text" name="add_2" id="add_2" placeholder="Huyện">
				<input type="text" name="add_3" id="add_3" placeholder="Xã">
				<div class="btn-box">
					<button type = "button" id = "back1">Back</button>
					<button type = "button" id = "next2">Next</button>
				</div>
			</form>
			<form id = "form3" action="" method="POST">
				<h3>THÔNG TIN CÁ NHÂN</h3>
				<input type="text" name="username" id="user_name" style="display: none">
				<input type="password" name="password" id="your_password" style="display:none">
				<input type="text" name="address" id="address" style="display:none">
				<input type="text" name="name_1" placeholder="Tên">
				<input type="text" name="name_2" placeholder="Họ và tên đệm">
				<input type="text" name="telephone" placeholder="SĐT">
				<div class="btn-box">
					<button type = "button" id = "back2">Back</button>
					<button type = "submit">Submit</button>
				</div>
			</form>
			<div class="step-row">
				<div id="progress"></div>
				<div class="step-col">
					<small>Step 1</small>
				</div>
				<div class="step-col">
					<small>Step 2</small>
				</div>
				<div class="step-col">
					<small>Step 3</small>
				</div>
			</div>
		</div>
		<script type="text/javascript">
				var Form1 = document.getElementById('form1');
				var Form2 = document.getElementById('form2');
				var Form3 = document.getElementById('form3');
				var Next1 = document.getElementById('next1');
				var Next2 = document.getElementById('next2');
				var Back1 = document.getElementById('back1');
				var Back2 = document.getElementById('back2');
				var Progress = document.getElementById('progress');
				// form 1
				Next1.onclick= function () {
					// get username, password, re-password
					let password = document.getElementById("password").value;
					let check_password = document.getElementById("check_password").value;
					let username = document.getElementById("username").value;
					// check username have length character between 0 and 50
					if(username === "" || username.length > 50){
							document.getElementById("username").style.border = "1px solid red"; // set border color to red
							return;
					}
					// check password have length character between 0 and 50
					if(password === "" || password.length > 50){
							document.getElementById("username").style.border = "";
							document.getElementById("password").style.border = "1px solid red";
							return;
					}
					// check re-password same with password
					if(password === check_password){
							Form1.style.left = "-450px";
							Form2.style.left = "40px";
							Progress.style.width = "240px";
							document.getElementById("username").style.border = "";
							document.getElementById("password").style.border = "";
							document.getElementById("check_password").style.border = "";
					} else {
							document.getElementById("password").style.border = "1px solid red";
							document.getElementById("check_password").style.border = "1px solid red";
					}
				}
				Back1.onclick= function () {
					Form1.style.left = "40px";
					Form2.style.left = "450px";
					Progress.style.width = "120px";
				}
				// form 2
				Next2.onclick= function () {
					let add_1 = document.getElementById("add_1").value;
					let add_2 = document.getElementById("add_2").value;
					let add_3 = document.getElementById("add_3").value;
					let add = add_1 + " " + add_2 + " " + add_3;
					if(add_1 === "" && add_2 === "" && add_3 ===""){ // check input of address
							document.getElementById("add_1").style.border = "1px solid red";
							document.getElementById("add_2").style.border = "1px solid red";
							document.getElementById("add_3").style.border = "1px solid red";
							return;
					}
					let password = document.getElementById("password").value;
					let username = document.getElementById("username").value;
					let address = add;
					document.getElementById("user_name").value = username;
					document.getElementById("your_password").value = password;
					document.getElementById("address").value = address;
					Form2.style.left = "-450px";
					Form3.style.left = "40px";
					Progress.style.width = "360px";
					// return color for input tag if input true
					document.getElementById("add_1").style.border = "";
					document.getElementById("add_2").style.border = "";
					document.getElementById("add_3").style.border = "";
				}
				Back2.onclick= function () {
					Form2.style.left = "40px";
					Form3.style.left = "450px";
					Progress.style.width = "240px";
				}
		</script>
