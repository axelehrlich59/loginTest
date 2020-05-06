<?php

$servername="localhost";
$dBUsername= "root";
$dBpassword = "";
$dBName = "logintest";

$db = mysqli_connect($servername, $dBUsername, $dBpassword, $dBName);

if(!$db) {
    die("connexion failed :".my_sqli_connect_error());
}
