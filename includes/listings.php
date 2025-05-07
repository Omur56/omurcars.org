<?php
include 'db.php';

$sql = "SELECT * FROM elanlar ORDER BY id DESC";
$result = $conn->query($sql);

echo "<div class='grid-container'>";
while ($row = $result->fetch_assoc()) {
  echo "<div class='card'>";
  echo "<h3>" . htmlspecialchars($row['kategoriya']) . "</h3>";
  echo "<p><strong>Ad:</strong> " . htmlspecialchars($row['ad']) . " " . htmlspecialchars($row['soyad']) . "</p>";
  echo "<p><strong>Əlaqə:</strong> " . htmlspecialchars($row['elaqe']) . "</p>";
  echo "<p><strong>Qiymət:</strong> " . htmlspecialchars($row['qiymet']) . "</p>";
  echo "<p><strong>Məlumat:</strong> " . htmlspecialchars($row['melumat']) . "</p>";
  echo "<div class='images'>";
  $images = json_decode($row['sekiller'], true);
  foreach ($images as $img) {
    echo "<img src='uploads/" . htmlspecialchars($img) . "' alt='Şəkil'>";
  }
  echo "</div>";
  echo "</div>";
}
echo "</div>";
?>
