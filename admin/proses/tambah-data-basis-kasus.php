<?php
session_start();
require_once '../../config/koneksi.php';

$id_hama_penyakit     = $_POST['id_hama_penyakit'];
$gejala_basis_kasus   = $_POST['gejala_basis_kasus'];
$bobot_gejala         = $_POST['bobot_gejala'];

$stmt = $koneksi->prepare("INSERT INTO basis_kasus (id_hama_penyakit, gejala_basis_kasus, bobot_gejala) VALUES (?, ?, ?)");
if ($stmt && $stmt->bind_param("isi", $id_hama_penyakit, $gejala_basis_kasus, $bobot_gejala) && $stmt->execute()) {
    $_SESSION['success'] = "Data basis kasus berhasil ditambahkan.";
} else {
    $_SESSION['error'] = "Gagal menambahkan data basis kasus.";
}

header("Location: ../data-basis-kasus.php");
exit;
