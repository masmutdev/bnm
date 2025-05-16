<?php
session_start();
require_once '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $koneksi->prepare("DELETE FROM basis_kasus WHERE id = ?");
    if ($stmt && $stmt->bind_param("i", $id) && $stmt->execute()) {
        $_SESSION['success'] = "Data basis kasus berhasil dihapus.";
    } else {
        $_SESSION['error'] = "Gagal menghapus data basis kasus.";
    }
}

header("Location: ../data-basis-kasus.php");
exit;
