<?php
require 'config/koneksi.php';

if (isset($_SESSION['pegawai_id'])) {
  header("Location: admin/dashboard.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SIPIMNEG - Sistem Peminjaman</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }
    body, html {
      height: 100%;
    }
    body {
      position: relative;
      background: url("assets/img/bg-auth.jpeg") no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      z-index: 0;
    }

    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3); /* atur opacity di sini */
      z-index: -1;
    }
    .auth-box {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      text-align: center;
      width: 300px;
    }
    .auth-box h2 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 10px;
    }
    .auth-box p {
      font-size: 13px;
      margin-bottom: 25px;
    }
    .auth-box a {
      display: block;
      background: #4caf50;
      color: white;
      text-decoration: none;
      margin: 10px 0;
      padding: 10px;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .auth-box a:hover {
      background: #45a049;
    }
  </style>
</head>
<body>

<div class="auth-box">
  <h2><b>SIPIMNEG</b></h2>
  <p>SITEM PEMINJAMAN MILIK NEGARA</p>
  <a href="auth/login.php">Log In</a>
  <a href="auth/register.php">Register</a>
</div>

</body>
</html>
