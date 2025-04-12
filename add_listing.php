<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $image = $_FILES['image1']['name'];
    move_uploaded_file($_FILES['image1']['tmp_name'], "uploads/" . $image);
    $stmt = $conn->prepare("INSERT INTO listings (title, description, price, phone, category, image1) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdss", $title, $description, $price, $phone, $category, $image);
    $stmt->execute();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yeni Elan</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data" class="form-container">
    <h2>Yeni Elan Yerləşdir</h2>
    <input type="text" name="title" placeholder="Başlıq" required>
    <textarea name="description" placeholder="Elan haqqında" required></textarea>
    <input type="number" name="price" placeholder="Qiymət" required>
    <input type="text" name="phone" placeholder="Əlaqə nömrəsi" required>
    <select name="category">
      <option value="nəqliyyat">Nəqliyyat</option>
      <option value="elektronika">Elektronika</option>
      <option value="mebel">Mebel</option>
    </select>
    <input type="file" name="image1" required>
    <button type="submit">Elanı Yerləşdir</button>
  </form>
</body>
</html>
