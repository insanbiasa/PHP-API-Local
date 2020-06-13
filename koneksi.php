<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "kampus";

$connect = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke Mysql : " . mysqli_connect_error(); die();
} else {
    // echo "Berhasil terhubung ke  Mysql";
}

?>