<?php
session_start();
require_once '../../config/koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode_penyakit'];
$nama = $_POST['nama_penyakit'];
$solusi = $_POST['solusi'];

$stmt = $koneksi->prepare("UPDATE hama_penyakit SET kode_penyakit = ?, nama_penyakit = ?, solusi = ? WHERE id = ?");
if ($stmt && $stmt->bind_param("sssi", $kode, $nama, $solusi, $id) && $stmt->execute()) {
    $_SESSION['success'] = "Data penyakit berhasil diperbarui.";
} else {
    $_SESSION['error'] = "Gagal mengedit data penyakit.";
}

header("Location: ../data-penyakit.php");
exit;
