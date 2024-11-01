<?php
// db.php
$server = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty
$dbname1 = "shopease_db";
$dbname2="credentials";
$shop_conn = new mysqli($server, $username, $password, $dbname1);

if ($shop_conn->connect_error) {
    die("Connection failed: " . $shop_conn->connect_error);
}

$cred_conn = new mysqli($server, $username, $password, $dbname2);

if ($cred_conn->connect_error) {
    die("Connection failed: " . $cred_conn->connect_error);
}
?>
