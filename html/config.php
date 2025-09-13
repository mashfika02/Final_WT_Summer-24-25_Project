<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'school_management';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die('Connection Fail: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');
?>
