<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "forum";

$koneksi = new mysqli($hostname, $username, $password, $database);
if ($koneksi->connect_error){
    die("koneksi gagal: ".$connect->connect_error);
}
?>
