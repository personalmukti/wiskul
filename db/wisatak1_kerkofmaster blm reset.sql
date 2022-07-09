-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Jul 2022 pada 20.24
-- Versi server: 8.0.29
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


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

--
-- Dumping data untuk tabel `stand`
--

INSERT INTO `stand` (`id`, `nama_slot`, `blok`, `posisi`, `pemilik`, `slogan`, `foto`, `status`, `tgl_perubahan`) VALUES
(1, 'LUMPIA BASAH ', 'A', 1, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(2, 'WARUNG ZB', 'A', 2, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(3, 'WARUNG ZB 2', 'A', 3, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(4, 'PENTOL MACAN', 'A', 4, 'BU TITA', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(5, 'JAGUNG MOULOR & MR CRAVES', 'A', 5, 'icha rf', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-10'),
(6, 'JAGUNG MOULOR 2', 'A', 6, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(7, 'NASI GORENG MAFIA', 'A', 7, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(8, 'EAZY', 'A', 8, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(9, 'BURJO TIME ', 'A', 9, 'chen chen', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-10'),
(10, 'TORNADO POTATO', 'A', 10, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(11, 'CIGOR SULTAN', 'A', 11, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(12, 'REZA DRINK', 'A', 12, 'SANDY', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(13, 'TELUR GULUNG LINGLING', 'A', 13, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(14, 'WARUNG AMBU BU UGIE', 'A', 14, 'BU UGIE', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(15, 'LUMPIA BEEF', 'A', 15, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(16, 'AYAM GOROWOK', 'A', 16, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(17, 'DIMSUM', 'A', 17, 'YUSI', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-07'),
(18, 'ES GANTUNG', 'A', 18, 'YUSI', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-07'),
(19, 'SOUFFLE TIME & BERLIN STREET', 'A', 19, 'YUSI', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-08'),
(20, 'CROFFELOKA & KIMOCHI', 'A', 20, 'YUSI', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-08'),
(21, 'KEDAI FRESH MILK DELICIEUX', 'A', 21, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(22, 'Stand 22', 'A', 0, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-05-11'),
(23, 'WEDANG PAK AWIS', 'A', 23, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(24, 'KOSONG', 'A', 24, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(25, 'KEDAI KOPLING', 'A', 25, 'ANDRI', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-20'),
(26, 'BABY CRAB', 'A', 26, 'YUSI', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-07'),
(27, 'KEDAI SULE', 'B', 1, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(28, 'ORION DEEF', 'B', 2, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(29, 'UDAI KEBAB', 'B', 3, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(30, 'TEMAN BOBA', 'B', 4, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(31, 'BOLA OBI GARDUJATI', 'B', 5, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-13'),
(32, 'NGEFRY', 'B', 6, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(33, 'JAJANAN ZAMAN NOW', 'B', 7, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(34, 'SATE TAICHAN K\'MEY', 'B', 8, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(35, 'ES PERMEN KARET', 'B', 9, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(36, 'NATURE JUICE', 'C', 1, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(37, 'KEDAI YASMIN', 'C', 2, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(38, 'TEH POCI', 'C', 3, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(39, 'NYOKLAT', 'C', 4, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(40, 'CORNDOG', 'C', 5, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(41, 'KEDAI BUNSAI', 'C', 6, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-06'),
(42, 'BASO ACI ANI', 'D', 1, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(43, 'KEDAI SEIKO', 'D', 2, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(44, 'YUMIA ID', 'D', 3, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(45, 'AYAM LALAPAN', 'D', 4, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-06'),
(46, 'CHIKEN CORNER', 'D', 5, 'NURHASANAH', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-10'),
(47, 'TAKOYAKI', 'D', 6, 'SINTA APRIANA', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-10'),
(48, 'CIKBUL (CIKI NGEBUL)', 'D', 7, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-10'),
(49, 'MAMAIWA', 'D', 8, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-10'),
(50, 'BATAGOR', 'D', 9, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-10'),
(51, 'ESKRIM SWEETPEDIA', 'D', 10, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-10'),
(52, 'MINUM MINUM', 'D', 11, 'TOMY', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-10'),
(53, 'MY MIEBOX', 'D', 12, 'DEWI SRI REJEKI', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-10'),
(54, 'BANDROS ABAH', 'D', 13, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-10'),
(55, 'NYEKER', 'D', 14, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 1, '2022-04-10'),
(56, 'KOSONG', 'D', 15, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-04-10'),
(57, 'Stand-57', 'X', 0, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-03-29'),
(58, 'Stand-58', 'X', 0, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-03-29'),
(59, 'Stand-59', 'X', 0, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-03-29'),
(60, 'Stand-60', 'X', 0, 'Wiskul Kerkof', 'Pusat Jajanan Kerkof', 'default.png', 0, '2022-03-29');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
