<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "omurcars_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Bağlantı xətası: " . $conn->connect_error);
}
?>