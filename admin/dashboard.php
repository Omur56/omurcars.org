<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
require '../db.php';
$listings = $conn->query("SELECT * FROM listings");
?>
<h2>Admin Panel</h2>
<a href="logout.php">Çıxış</a>
<table>
<tr><th>Başlıq</th><th>Əlaqə</th><th>Əməliyyat</th></tr>
<?php while($row = $listings->fetch_assoc()): ?>
<tr>
  <td><?php echo $row['title']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td>
    <a href="delete.php?id=<?php echo $row['id']; ?>">Sil</a>
  </td>
</tr>
<?php endwhile; ?>
</table>
