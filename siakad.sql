-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2024 pada 09.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `nid` varchar(11) NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama_dosen`, `nid`, `gelar`, `email`, `no_telp`, `alamat`, `prodi`, `jurusan`, `created_at`, `update_at`) VALUES
(1, 'Pak Rasiban', '123654789', 'M.Kom', 'rasiban@gmail.com', '20258863658', 'Duren Sawit Jakarta Timur', 'Fakultas Teknik', 'Sistem Informasi', '2024-11-26 08:16:28', '2024-11-26 08:16:28'),
(2, 'Muhammad Hapidz', '456456456', 'M. Kom', 'tri@gmail.com', '454662514454', 'Cianjur', 'Fakultas Teknik', 'Teknik Informatika', '2024-11-21 07:31:44', '2024-11-21 07:31:44'),
(3, 'Endang Amien', '445789123', 'M. Pd', 'endang@gmail.com', '0258963147', 'Duren Sawit', 'Fakultas Teknik', 'Kewarganegaraan', '2024-11-21 07:31:44', '2024-11-21 07:31:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `kepala_jurusan` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `nama_jurusan`, `kepala_jurusan`, `created_at`, `update_at`) VALUES
(1, 'Sistem Informatika', 'Dadang Iskandar Mulyana', '2024-11-21 10:05:50', '2024-11-21 10:05:50'),
(2, 'Teknik Informatika', 'Ferri', '2024-11-21 10:06:04', '2024-11-21 10:06:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nim` int(8) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `no_telp`, `foto`, `created_at`, `update_at`) VALUES
(1, 'Arif Saadilah ', 12345678, '2024-11-14', 'Teknik Informatika', 'Brebes', 'arif@gmail.com', '65465465445', '0', '2024-11-21 07:32:41', '2024-11-21 07:32:41'),
(2, 'Hartono Murti', 98765412, '2024-11-13', 'Sistem Informatika', 'Jakarta Timur', 'tono@gmail.com', '789456123', '0', '2024-11-21 07:32:41', '2024-11-21 07:32:41'),
(3, 'Tiara', 46456456, '2024-11-13', 'Junior Web Programming', 'Pondok Kelapa Raya', 'tiara@gmail.com', '564789321', '0', '2024-11-21 07:32:41', '2024-11-21 07:32:41'),
(9, 'Jindan Khilafah', 546897231, '2024-11-03', 'Tata Boga', 'Cilacap', 'jindan@gmail.com', '2825252525', '0', '2024-11-21 07:32:41', '2024-11-21 07:32:41'),
(11, 'Naomi Nakata', 45678912, '2024-11-06', 'Digital Marketing', 'Jepang', 'naomi@gmail.com', '456123789789', '0', '2024-11-21 07:32:41', '2024-11-21 07:32:41'),
(20, 'Regiyanto', 456321852, '2024-11-25', 'Teknik Informatika', 'Bina Karya', 'regiyanto@gmail.com', '0258963147', '36b21c5b649bbaa1d3f62f81209d8812.jpg', '2024-11-25 10:11:17', '2024-11-25 10:11:17'),
(21, 'Abdul Haikal', 456321987, '2024-11-12', 'Ilmu Sosial', 'Pondok Kelapa', 'haikal@gmail.com', '456456456', 'WIN_20241117_13_53_54_Pro.jpg', '2024-11-25 08:18:10', '2024-11-25 08:18:10'),
(23, 'Nisa', 456456456, '2024-10-27', 'Digital Marketing', 'fghfgh', 'pic@gmail.com', '00202020202', '9c5d084a2423de66b80ad291b84b149f.jpg', '2024-11-25 09:45:17', '2024-11-25 09:45:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', '12345678', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
