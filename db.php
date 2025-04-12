<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'omurcars_db';
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die('Bağlantı xətası: ' . $conn->connect_error);
}
?>