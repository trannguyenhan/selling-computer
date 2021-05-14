<?php

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/account.css" >
	<link rel="stylesheet" href="public/css/nav_bar.css" type="text/css">
	<link rel="stylesheet" href="public/css/footer_container.css" type="text/css">
	<title>Home | MTHH</title>
</head>
<body>
	<!-- includes nav bar -->
	<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>

	<div class="container">
		<form id = "form1">
			<h3>CREATE ACCOUNT</h3>
			<input type="text" name="" placeholder="Email" required>
			<input type="password" name="" placeholder="Password" required>
			<input type="password" name="" placeholder="Confirm Password" required>
			<div class="btn-box">
				<button type = "button" id = "next1">Next</button>
			</div>
		</form>
		<form id = "form2">
			<h3>SOCIAL LINKS</h3>
			<input type="text" name="" placeholder="GoogleDrive">
			<input type="text" name="" placeholder="Github">
			<input type="text" name="" placeholder="Linkedin">
			<div class="btn-box">
				<button type = "button" id = "back1">Back</button>
				<button type = "button" id = "next2">Next</button>
			</div>
		</form>
		<form id = "form3">
			<h3>PERSONAL INFO</h3>
			<input type="text" name="" placeholder="First Name">
			<input type="text" name="" placeholder="Last Name">
			<input type="text" name="" placeholder="Moblie No.">
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
		Next1.onclick= function () {
			Form1.style.left = "-450px";
			Form2.style.left = "40px";
			Progress.style.width = "240px";
		}
		Back1.onclick= function () {
			Form1.style.left = "40px";
			Form2.style.left = "450px";
			Progress.style.width = "120px";
		}
		Next2.onclick= function () {
			Form2.style.left = "-450px";
			Form3.style.left = "40px";
			Progress.style.width = "360px";
		}
		Back2.onclick= function () {
			Form2.style.left = "40px";
			Form3.style.left = "450px";
			Progress.style.width = "240px";
		}
	</script>
	<?php //require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>
