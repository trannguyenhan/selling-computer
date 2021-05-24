<?php ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="public/css/nav_bar.css" >
		<link rel="stylesheet" href="public/css/footer_container.css" >
		<link rel="stylesheet" type="text/css" href="public/css/contact.css" >
		<title>Contact | MTHH</title>
	</head>
	<body>
		<!-- includes nav bar -->
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<div class="contact_container">
			<div class="row">
				<div class="col-2" id = 'text'>
					<h1>Contact Us</h1>
					<p>Feel free to get in touch with us. We're always open to discussing new products, creative ideas for our products or oppotunities to be part of our team.</p>
					<i class="fa fa-envelope-o"></i>
					<h4>Mail us</h4>
					<p><a href="">mthhinc@gmail.org</a></p>
					<i class="fa fa-phone"></i>
					<h4>Call us</h4>
					<p><a href="">18008888</a></p>
					<button>SUBMIT</button>
				</div>
				<div class="col-2">
					<form>
						<input type="text" name="" placeholder="Enter your name" required>
						<input type="email" name="" placeholder="Enter a valid email address">
						<textarea>Enter your message</textarea>
					</form>
					<div class="rectangle"></div>
					<div class="rectangle"></div>
				</div>
			</div>
		</div>