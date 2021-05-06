<?php
?>
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
		<h1>Why Choose Us ?</h1>
		<q>Every day we work hard to make life of our clients better and happier</q>
	</div>
	<div class="row">
		<div class="col-2">
			<i class="fa fa-star-o" aria-hidden="true"></i>
			<h4>Quick response</h4>
			<p>Emergency response time is one hour or less guaranteed. A live person will answer your call, or you can enter a service ticket yourself.</p>
			<h4>Quality Support</h4>
			<p>We take support one step further by tailoring our replies to suit your knowledge, expectations and personality.</p>
			<h4>Attention to Detail</h4>
			<p>We begin each web development project by gaining a solid understanding of who you are, what you do and why you do it. </p>
			<br><br>
			<img src="https://image.freepik.com/free-photo/girlfriends-going-shopping-concept_53876-86016.jpg">
		</div>
		<div class="col-2">
			<img src="https://image.freepik.com/free-photo/group-young-multiethnic-business-people-working-communicating-together-creative-office_52137-25898.jpg">
			<br>
			<img src="https://image.freepik.com/free-photo/close-up-portrait-good-looking-university-student-sitting-meeting-with-friends-after-study_176420-16814.jpg" id = 'small'>
		</div>
	</div>
</div>
<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php'; ?>