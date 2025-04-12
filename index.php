<?php
require 'db.php';
$listings = $conn->query("SELECT * FROM listings ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elanlar</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <nav>
      <h1>OmurCars</h1>
      <a href="add_listing.php" class="add-btn">Elan yerləşdir</a>
    </nav>
  </header>
  <main>
    <div class="listing-grid">
      <?php while($row = $listings->fetch_assoc()): ?>
      <div class="card">
        <img src="uploads/<?php echo $row['image1']; ?>" alt="Elan şəkli">
        <div class="card-body">
          <h3><?php echo $row['title']; ?></h3>
          <p><?php echo $row['description']; ?></p>
          <p><strong>Qiymət:</strong> <?php echo $row['price']; ?> AZN</p>
          <p><strong>Əlaqə:</strong> <?php echo $row['phone']; ?></p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </main>
</body>
</html>
