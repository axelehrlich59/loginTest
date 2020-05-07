<?php

if(isset($_POST['login-submit'])) {

require '../db_connect/config.php';


$mailuid = $_POST['mailuid'];
$password = $_POST['password'];

if(empty($mailuid) || empty($password)) {
    header("Location: login.php");
          exit();
}
}

else {
    header("Location: login.php");
          exit();
}