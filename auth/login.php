<?php
require '../config/koneksi.php';

if (isset($_SESSION['admin_id'])) {
  header("Location: ../admin/dashboard.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SIPIMNEG - Sistem Peminjaman</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
<?php if (isset($_SESSION['success'])): ?>
  <div style="position: fixed; top: 1rem; right: 1rem; z-index: 1055; min-width: 300px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 15px 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
    <button onclick="this.parentElement.style.display='none';" style="float: right; background: none; border: none; font-weight: bold; font-size: 18px; line-height: 1; color: #155724; cursor: pointer;">&times;</button>
  </div>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
  <div style="position: fixed; top: 1rem; right: 1rem; z-index: 1055; min-width: 300px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 15px 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <?= $_SESSION['error']; unset($_SESSION['error']); ?>
    <button onclick="this.parentElement.style.display='none';" style="float: right; background: none; border: none; font-weight: bold; font-size: 18px; line-height: 1; color: #721c24; cursor: pointer;">&times;</button>
  </div>
<?php endif; ?>

<div class="login-box">
  <img src="../assets/img/bksda-klhk-600x600.png" alt="Logo">
  <h3>BBKSDA PAPUA</h3>
  <form action="proses/proses_login.php" method="POST">
    <input type="text" name="username" placeholder="user name" required>
    <input type="password" name="password" placeholder="password" required>
    <button type="submit">Log In</button>
  </form>
</div>

</body>
</html>
