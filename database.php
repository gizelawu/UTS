<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'db_utspweb';

$conn = new mysqli($hostname, $username, $password, $db_name);
if ($conn->connect_error) {
  die('Koneksi gagal:' . $conn->connect_error);
}
