<?php
session_start();
require_once '../../config/koneksi.php';

$id                  = $_POST['id'];
$id_hama_penyakit    = $_POST['id_hama_penyakit'];
$gejala_basis_kasus  = $_POST['gejala_basis_kasus'];
$bobot_gejala        = $_POST['bobot_gejala'];

$stmt = $koneksi->prepare("UPDATE basis_kasus SET id_hama_penyakit = ?, gejala_basis_kasus = ?, bobot_gejala = ? WHERE id = ?");
if ($stmt && $stmt->bind_param("isii", $id_hama_penyakit, $gejala_basis_kasus, $bobot_gejala, $id) && $stmt->execute()) {
    $_SESSION['success'] = "Data basis kasus berhasil diperbarui.";
} else {
    $_SESSION['error'] = "Gagal mengedit data basis kasus.";
}

header("Location: ../data-basis-kasus.php");
exit;
