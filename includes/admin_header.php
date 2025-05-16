<?php 
require '../config/koneksi.php';

// Cek apakah session admin_id sudah ada
if (!isset($_SESSION['pegawai_id'])) {
    // Tambahkan session error
    $_SESSION['error'] = "Silahkan login dulu";
    
    // Jika tidak ada, redirect ke halaman login
    header("Location: ../auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?? 'ADMIN LTE' ?></title>

    <!-- REQUIRED CSS -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css">

    <!-- CUSTOM CSS -->
    <!-- Custom style -->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <?php echo $customCss ?? '' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

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


        <?php include 'admin_navbar.php' ?>
        <?php include 'admin_sidebar.php' ?>