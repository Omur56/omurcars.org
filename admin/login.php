<?php
session_start();
if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
    $_SESSION['admin'] = true;
    header('Location: dashboard.php');
}
?>
<form method="POST">
  <input type="text" name="username" placeholder="İstifadəçi adı" required>
  <input type="password" name="password" placeholder="Şifrə" required>
  <button type="submit">Daxil ol</button>
</form>
