<?php
//$namavarible---tidak perlu db tetapi db adalah singkatan dari database
$db_host = "localhost:3306"; //nomor port dari xampp
$db_username = "root";
$db_password = "";
$db_name = "yunus-todolist"; //dipakai untuk jadi nama database

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
