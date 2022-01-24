<?php
 
 // file koneksi ke database

$server = "10.0.0.200"; // nama server yang temen-temen gunain. Ini default value kalau pake XAMPP.
$username = "admin";
$password = "Medan12agustus_"; // sesuaikan dengan pasaword temen-temen :)
$database = "db_crud"; // nama database yang digunakan.

// koneksi ke database
@$db = mysqli_connect($server, $username, $password, $database);

// terkoneksi atau belum ?
if (!$db) {
	die("Gagal koneksi ke database : ".mysqli_connect_error());
}

?>