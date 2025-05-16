<?php
session_start();
require_once '../../config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM pegawai WHERE username = ? LIMIT 1";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $pegawai = $result->fetch_assoc();

    if (password_verify($password, $pegawai['password'])) {
        $_SESSION['pegawai_id'] = $pegawai['id_pegawai'];
        $_SESSION['pegawai_username'] = $pegawai['username'];
        $_SESSION['success'] = "Login berhasil!";
        header("Location: ../../admin/dashboard.php");
        exit;
    }
}

$_SESSION['error'] = "Username atau password salah!";
header("Location: ../../login.php");
exit;
