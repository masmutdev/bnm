<?php
session_start();
require_once '../../config/koneksi.php';

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if ($password !== $confirm) {
    $_SESSION['error'] = "Konfirmasi password tidak cocok.";
    header("Location: ../register.php");
    exit;
}

// Cek duplikat username/email
$cek = $koneksi->prepare("SELECT id_pegawai FROM pegawai WHERE username = ? OR email = ?");
$cek->bind_param("ss", $username, $email);
$cek->execute();
$cek->store_result();

if ($cek->num_rows > 0) {
    $_SESSION['error'] = "Username atau email sudah digunakan.";
    header("Location: ../register.php");
    exit;
}

// Hash password dan simpan
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$stmt = $koneksi->prepare("INSERT INTO pegawai (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashedPassword);

if ($stmt->execute()) {
    $_SESSION['success'] = "Registrasi berhasil! Silakan login.";
    header("Location: ../login.php");
} else {
    $_SESSION['error'] = "Terjadi kesalahan saat registrasi.";
    header("Location: ../register.php");
}
exit;
