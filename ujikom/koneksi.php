<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "ahmdtfk";

$coon = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo"gagal koneksi :" .mysqli_connect_errno();
}