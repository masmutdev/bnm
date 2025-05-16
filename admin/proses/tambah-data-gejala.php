<?php
session_start();
require_once '../../config/koneksi.php';

$id_hama_penyakit     = $_POST['id_hama_penyakit'];
$kode_gejala          = $_POST['kode_gejala'];
$gejala   = $_POST['gejala'];
$bobot_gejala         = $_POST['bobot_gejala'];

$stmt = $koneksi->prepare("INSERT INTO gejala_user (id_hama_penyakit, kode_gejala, gejala, bobot_gejala) VALUES (?, ?, ?, ?)");
if ($stmt && $stmt->bind_param("issi", $id_hama_penyakit, $kode_gejala, $gejala, $bobot_gejala) && $stmt->execute()) {
    $_SESSION['success'] = "Data gejala berhasil ditambahkan.";
} else {
    $_SESSION['error'] = "Gagal menambahkan data gejala.";
}

header("Location: ../data-gejala.php");
exit;
