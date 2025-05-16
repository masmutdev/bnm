<?php
session_start();
require_once '../../config/koneksi.php';

$id                  = $_POST['id'];
$id_hama_penyakit    = $_POST['id_hama_penyakit'];
$kode_gejala         = $_POST['kode_gejala'];
$gejala  = $_POST['gejala'];
$bobot_gejala        = $_POST['bobot_gejala'];

$stmt = $koneksi->prepare("UPDATE gejala_user SET id_hama_penyakit = ?, kode_gejala = ?, gejala = ?, bobot_gejala = ? WHERE id = ?");
if ($stmt && $stmt->bind_param("issii", $id_hama_penyakit, $kode_gejala, $gejala, $bobot_gejala, $id) && $stmt->execute()) {
    $_SESSION['success'] = "Data gejala berhasil diperbarui.";
} else {
    $_SESSION['error'] = "Gagal mengedit data gejala.";
}

header("Location: ../data-gejala.php");
exit;
