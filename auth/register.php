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
  <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert"
      style="top: 1rem; right: 1rem; z-index: 1055; min-width: 300px; position: fixed; opacity: 1; transition: opacity 0.5s ease;">
      <?= $_SESSION['success']; unset($_SESSION['success']); ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php endif; ?>

  <?php if (isset($_SESSION['error'])): ?>
  <div class="alert alert-danger alert-dismissible fade show custom-alert" role="alert"
      style="top: 1rem; right: 1rem; z-index: 1055; min-width: 300px; position: fixed; opacity: 1; transition: opacity 0.5s ease;">
      <?= $_SESSION['error']; unset($_SESSION['error']); ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php endif; ?>

<div class="login-box">
  <img src="../assets/img/bksda-klhk-600x600.png" alt="Logo">
  <h3>BBKSDA PAPUA</h3>
  <form action="proses/proses_register.php" method="POST">
    <input type="text" name="username" placeholder="user name" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="password" name="confirm_password" placeholder="confirm password" required>
    <button type="submit">Register</button>
  </form>
</div>

</body>
</html>
