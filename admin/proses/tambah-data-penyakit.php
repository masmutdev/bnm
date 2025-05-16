<?php
session_start();
require_once '../../config/koneksi.php';

$kode = $_POST['kode_penyakit'];
$nama = $_POST['nama_penyakit'];
$solusi = $_POST['solusi'];

$stmt = $koneksi->prepare("INSERT INTO hama_penyakit (kode_penyakit, nama_penyakit, solusi) VALUES (?, ?, ?)");
if ($stmt && $stmt->bind_param("sss", $kode, $nama, $solusi) && $stmt->execute()) {
    $_SESSION['success'] = "Data penyakit berhasil ditambahkan.";
} else {
    $_SESSION['error'] = "Gagal menambahkan data penyakit.";
}

header("Location: ../data-penyakit.php");
exit;
