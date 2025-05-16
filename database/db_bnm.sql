-- Buat database jika belum ada
CREATE DATABASE IF NOT EXISTS db_bnm;
USE db_bnm;

-- Tabel pegawai
CREATE TABLE IF NOT EXISTS pegawai (
    id_pegawai INT AUTO_INCREMENT PRIMARY KEY,
    nip VARCHAR(50) UNIQUE,
    username VARCHAR(50),
    email VARCHAR(50),
    nama VARCHAR(100),
    jabatan VARCHAR(100),
    foto TEXT,
    password VARCHAR(255),
    level VARCHAR(50)
);

-- Tabel barang
CREATE TABLE IF NOT EXISTS barang (
    kode_barang VARCHAR(50) PRIMARY KEY,
    kode_aset VARCHAR(50),
    nama_barang VARCHAR(100),
    nip VARCHAR(50),
    foto TEXT,
    keterangan TEXT,
    status VARCHAR(50),
    aset VARCHAR(50),
    FOREIGN KEY (nip) REFERENCES pegawai(nip)
);

-- Tabel peminjaman
CREATE TABLE IF NOT EXISTS peminjaman (
    id_peminjaman INT AUTO_INCREMENT PRIMARY KEY,
    kode_barang VARCHAR(50),
    nama VARCHAR(100),
    nip VARCHAR(50),
    jabatan VARCHAR(100),
    no_hp VARCHAR(20),
    tujuan TEXT,
    surat_tugas TEXT,
    tempat VARCHAR(100),
    tgl_pinjam DATE,
    tgl_harus_kembali DATE,
    status VARCHAR(50),
    FOREIGN KEY (nip) REFERENCES pegawai(nip),
    FOREIGN KEY (kode_barang) REFERENCES barang(kode_barang)
);

-- Tabel pengembalian
CREATE TABLE IF NOT EXISTS pengembalian (
    id_pengembalian INT AUTO_INCREMENT PRIMARY KEY,
    id_peminjaman INT,
    nip VARCHAR(50),
    tgl_pinjam DATE,
    tgl_harus_kembali DATE,
    tgl_kembali DATE,
    kondisi TEXT,
    FOREIGN KEY (id_peminjaman) REFERENCES peminjaman(id_peminjaman),
    FOREIGN KEY (nip) REFERENCES pegawai(nip)
);
