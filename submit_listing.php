<?php
include 'includes/db.php';

$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$elaqe = $_POST['elaqe'];
$kategoriya = $_POST['kategoriya'];
$qiymet = $_POST['qiymet'];
$melumat = $_POST['melumat'];

$sekiller = [];
foreach ($_FILES['sekiller']['tmp_name'] as $key => $tmp_name) {
  $filename = time() . "_" . basename($_FILES['sekiller']['name'][$key]);
  move_uploaded_file($tmp_name, "uploads/" . $filename);
  $sekiller[] = $filename;
}

$sekiller_json = json_encode($sekiller);

$sql = "INSERT INTO elanlar (ad, soyad, elaqe, kategoriya, qiymet, melumat, sekiller) 
        VALUES ('$ad', '$soyad', '$elaqe', '$kategoriya', '$qiymet', '$melumat', '$sekiller_json')";

if ($conn->query($sql)) {
  header("Location: index.php");
} else {
  echo "Xəta: " . $conn->error;
}
?>
