<?php
$shipping_time = "";
foreach($_GET['ship'] as $time) {
	$shipping_time= $shipping_time.$time;
}
 ?>
<html>
<body>

<h2>Your order has been proceeded</h2>
<p>Make sure all the in4 below is correct</p>
<p>Your full name is: <?php echo $_GET['name']; ?></p>
<p>Your phone number is: <?php echo $_GET['phone']; ?></p>
<p>Your email is: <?php echo $_GET['email']; ?></p>
<p>Your address is: <?php echo $_GET['address']; ?></p>
<p>Date of shipping: <?php echo $_GET['date']; ?></p>
<p>Payment code: <?php echo $_GET['code']; ?></p>
<p>Company: <?php echo $_GET['company']; ?></p>
<p>Time of shipping: <?php $name = $_GET['ship'];
foreach ($name as $shipping){
    echo "<br/>".$shipping;
}
 ?></p>
 <h3><strong>Subtotal: 300000đ</strong></h3>
</body>
</html>