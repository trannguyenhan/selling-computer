<?php
ob_start();
session_start();

if(array_key_exists("username", $_SESSION)){
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header("Location: ../login");

    return;
}

if(array_key_exists("admin_username", $_SESSION)){
    unset($_SESSION['admin_username']);
    unset($_SESSION['admin_password']);
    header("Location: ../login-admin");
}

?>
