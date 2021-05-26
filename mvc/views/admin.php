<?php
// check session
ob_start();
session_start();
if(!isset($_SESSION['admin_username'])){
    header("Location: login-admin");
} else {
    if($_SESSION['admin_username'] == ""){
        header("Location: login-admin");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN</title>
        <link rel="stylesheet" href="public/css/admin/admin.css">
    </head>
    <body>
        <div class="logout">
          <a href="library/refresh_session.php">Đăng xuất</a>
        </div>
        <center><img src="public/images/admin/admin.jpg" alt="" width="50%"></center>
        <a href="account-management"><div class="left">
            <p>Account Management</p>
        </div></a>
        <a href="product-management"><div class="right">
            <p>Product Management</p>
        </div>
      </a>
</body>
</html>
