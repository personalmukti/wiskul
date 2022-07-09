-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Jul 2022 pada 20.44
-- Versi server: 8.0.29
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatak1_kerkofmaster`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `stand_id` int NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga_menu` int NOT NULL,
  `deskripsi_menu` text NOT NULL,
  `gbr_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `qrlist`
--

CREATE TABLE `qrlist` (
  `id` int NOT NULL,
  `stand_id` int NOT NULL,
  `qrcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `qrlist`
--

INSERT INTO `qrlist` (`id`, `stand_id`, `qrcode`) VALUES
(1, 0, 'QR-Utama.png'),
(2, 1, 'QR-Stand-1.png'),
(3, 2, 'QR-Stand-2.png'),
(4, 3, 'QR-Stand-3.png'),
(5, 4, 'QR-Stand-4.png'),
(6, 5, 'QR-Stand-5.png'),
(7, 6, 'QR-Stand-6.png'),
(8, 7, 'QR-Stand-7.png'),
(9, 8, 'QR-Stand-8.png'),
(10, 9, 'QR-Stand-9.png'),
(11, 10, 'QR-Stand-10.png'),
(12, 11, 'QR-Stand-11.png'),
(13, 12, 'QR-Stand-12.png'),
(14, 13, 'QR-Stand-13.png'),
(15, 14, 'QR-Stand-14.png'),
(16, 15, 'QR-Stand-15.png'),
(17, 16, 'QR-Stand-16.png'),
(18, 17, 'QR-Stand-17.png'),
(19, 18, 'QR-Stand-18.png'),
(20, 19, 'QR-Stand-19.png'),
(21, 20, 'QR-Stand-20.png'),
(22, 21, 'QR-Stand-21.png'),
(23, 22, 'QR-Stand-22.png'),
(24, 23, 'QR-Stand-23.png'),
(25, 24, 'QR-Stand-24.png'),
(26, 25, 'QR-Stand-25.png'),
(27, 26, 'QR-Stand-26.png'),
(28, 27, 'QR-Stand-27.png'),
(29, 28, 'QR-Stand-28.png'),
(30, 29, 'QR-Stand-29.png'),
(31, 30, 'QR-Stand-30.png'),
(32, 31, 'QR-Stand-31.png'),
(33, 32, 'QR-Stand-32.png'),
(34, 33, 'QR-Stand-33.png'),
(35, 34, 'QR-Stand-34.png'),
(36, 35, 'QR-Stand-35.png'),
(37, 36, 'QR-Stand-36.png'),
(38, 37, 'QR-Stand-37.png'),
(39, 38, 'QR-Stand-38.png'),
(40, 39, 'QR-Stand-39.png'),
(41, 40, 'QR-Stand-40.png'),
(42, 41, 'QR-Stand-41.png'),
(43, 42, 'QR-Stand-42.png'),
(44, 43, 'QR-Stand-43.png'),
(45, 44, 'QR-Stand-44.png'),
(46, 45, 'QR-Stand-45.png'),
(47, 46, 'QR-Stand-46.png'),
(48, 47, 'QR-Stand-47.png'),
(49, 48, 'QR-Stand-48.png'),
(50, 49, 'QR-Stand-49.png'),
(51, 50, 'QR-Stand-50.png'),
(52, 51, 'QR-Stand-51.png'),
(53, 52, 'QR-Stand-52.png'),
(54, 53, 'QR-Stand-53.png'),
(55, 54, 'QR-Stand-54.png'),
(56, 55, 'QR-Stand-55.png'),
(57, 56, 'QR-Stand-56.png'),
(58, 57, 'QR-Stand-57.png'),
(59, 58, 'QR-Stand-58.png'),
(60, 59, 'QR-Stand-59.png'),
(61, 60, 'QR-Stand-60.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stand`
--

CREATE TABLE `stand` (
  `id` int NOT NULL,
  `nama_slot` varchar(200) NOT NULL,
  `blok` varchar(1) NOT NULL,
  `posisi` int NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `slogan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int NOT NULL,
  `tgl_perubahan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `tagline1` varchar(200) NOT NULL,
  `tagline2` varchar(200) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `gbr1` varchar(100) NOT NULL,
  `gbr2` varchar(100) NOT NULL,
  `gbr3` varchar(100) NOT NULL,
  `gbr4` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `metatext` varchar(225) NOT NULL,
  `about` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_website`, `tagline1`, `tagline2`, `logo`, `favicon`, `gbr1`, `gbr2`, `gbr3`, `gbr4`, `email`, `no_telp`, `alamat`, `instagram`, `keywords`, `metatext`, `about`) VALUES
(1, 'Wisata Kuliner Kerkof', '', '', 'user.png', 'user.png', '', '', '', '', 'wisatakulinerkerkof@gmail.com', '083839450068', 'Jl. Merdeka, Haurpanggung, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151', '@wisatakulinerkerkof', 'wisatakulinerkerkof, wisata, kuliner, kerkof, wisata kuliner garut, jajanan kerkof', 'Pusat Jajanan Kuliner Kerkof. Nikmati berbagai pilihan kuliner ditemani alunan musik asyik.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Administrator adalah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int NOT NULL,
  `id_role` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `profile_pict` varchar(150) NOT NULL,
  `active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `profile_pict`, `active`) VALUES
(1, 1, 'Administrator', '$2y$05$9koc9kdWBreCV8QSGCBWa.JUO9u5Emx.FVoMLDjrlEOAQ99mgQxO.', 'Admin', 'Wiskul', 'wisatakulinerkerkof@gmail.com', '089627792753', 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stand_id` (`stand_id`);

--
-- Indeks untuk tabel `qrlist`
--
ALTER TABLE `qrlist`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stand`
--
ALTER TABLE `stand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blok` (`blok`);

--
-- Indeks untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `qrlist`
--
ALTER TABLE `qrlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `stand`
--
ALTER TABLE `stand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
