<!-- Layihənin index.php faylı -->

<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Satis</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <h1>Auto Satis</h1>
      <ul class="menu">
        <li><a href="#">Ana Səhifə</a></li>
        <li><a href="#">Haqqımızda</a></li>
        <li><a href="#">Əlaqə</a></li>
      </ul>
      <button id="addListingBtn">Elan Yerləşdir</button>
    </nav>
  </header>

  <main>
    <section id="listingForm" class="hidden">
      <form id="listingFormEl" enctype="multipart/form-data" method="POST" action="submit_listing.php">
        <h2>Elan Yerləşdir</h2>
        <input type="text" name="ad" placeholder="Ad" required>
        <input type="text" name="soyad" placeholder="Soyad" required>
        <input type="text" name="elaqe" placeholder="Əlaqə nömrəsi" required>
        <select name="kategoriya" required>
          <option value="Nəqliyyat">Nəqliyyat</option>
          <option value="Elektronika">Elektronika</option>
          <option value="Mebel">Mebel</option>
          <option value="Digər">Digər</option>
        </select>
        <input type="text" name="qiymet" placeholder="Qiymət" required>
        <textarea name="melumat" placeholder="Elan haqqında məlumat" required></textarea>
        <input type="file" name="sekiller[]" multiple accept="image/*" required>
        <button type="submit">Təqdim Et</button>
      </form>
    </section>

    <section id="listings">
      <?php include 'includes/listings.php'; ?>
    </section>
  </main>

  <script src="js/script.js"></script>
  <script>
    document.getElementById('addListingBtn').addEventListener('click', function() {
      document.getElementById('listingForm').classList.toggle('hidden');
    });
  </script>
</body>
</html>

