-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Nov 2022 pada 05.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `id_barang`, `id_penerima`, `jumlah`, `harga`) VALUES
(7, 2, 3, 4, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `id_suplayer` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `id_suplayer`, `nama_barang`, `jenis_barang`, `stok_barang`, `harga`) VALUES
(2, 3, 'Beras Putih', 'Beras Putih', 31, 25);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `barang_masuk_barang_keluar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `barang_masuk_barang_keluar` (
`id` int(11)
,`nama_barang` varchar(50)
,`id_penerima` int(11)
,`jumlah` int(11)
,`harga` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_barang_keluar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_barang_keluar` (
`id` int(11)
,`nama_barang` varchar(50)
,`nama_penerima` varchar(50)
,`jumlah` int(11)
,`harga` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_barang_masuk`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_barang_masuk` (
`id` int(11)
,`nama_suplayer` varchar(50)
,`nama_barang` varchar(50)
,`jenis_barang` varchar(50)
,`stok_barang` int(11)
,`harga` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$2AYpl1Rgx9U.4hlzYrJJJe0cd4MyjRUO2roknK6peJa9HRmufDL0m');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima`
--

CREATE TABLE `penerima` (
  `id` int(11) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `alamat_penerima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerima`
--

INSERT INTO `penerima` (`id`, `nama_penerima`, `alamat_penerima`) VALUES
(3, 'Suriono', 'setanggor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplayer`
--

CREATE TABLE `suplayer` (
  `id_suplayer` int(11) NOT NULL,
  `nama_suplayer` varchar(50) NOT NULL,
  `alamat_suplayer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suplayer`
--

INSERT INTO `suplayer` (`id_suplayer`, `nama_suplayer`, `alamat_suplayer`) VALUES
(3, 'abdu', 'tot');

-- --------------------------------------------------------

--
-- Struktur untuk view `barang_masuk_barang_keluar`
--
DROP TABLE IF EXISTS `barang_masuk_barang_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `barang_masuk_barang_keluar`  AS   (select `barang_keluar`.`id` AS `id`,`barang_masuk`.`nama_barang` AS `nama_barang`,`barang_keluar`.`id_penerima` AS `id_penerima`,`barang_keluar`.`jumlah` AS `jumlah`,`barang_keluar`.`harga` AS `harga` from (`barang_keluar` join `barang_masuk`) where `barang_keluar`.`id_barang` = `barang_masuk`.`id`)  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_barang_keluar`
--
DROP TABLE IF EXISTS `detail_barang_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_barang_keluar`  AS   (select `barang_masuk_barang_keluar`.`id` AS `id`,`barang_masuk_barang_keluar`.`nama_barang` AS `nama_barang`,`penerima`.`nama_penerima` AS `nama_penerima`,`barang_masuk_barang_keluar`.`jumlah` AS `jumlah`,`barang_masuk_barang_keluar`.`harga` AS `harga` from (`barang_masuk_barang_keluar` join `penerima`) where `barang_masuk_barang_keluar`.`id_penerima` = `penerima`.`id`)  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_barang_masuk`
--
DROP TABLE IF EXISTS `detail_barang_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_barang_masuk`  AS   (select `barang_masuk`.`id` AS `id`,`suplayer`.`nama_suplayer` AS `nama_suplayer`,`barang_masuk`.`nama_barang` AS `nama_barang`,`barang_masuk`.`jenis_barang` AS `jenis_barang`,`barang_masuk`.`stok_barang` AS `stok_barang`,`barang_masuk`.`harga` AS `harga` from (`barang_masuk` join `suplayer`) where `barang_masuk`.`id_suplayer` = `suplayer`.`id_suplayer`)  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_penerima` (`id_penerima`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suplayer`
--
ALTER TABLE `suplayer`
  ADD PRIMARY KEY (`id_suplayer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `suplayer`
--
ALTER TABLE `suplayer`
  MODIFY `id_suplayer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang_masuk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_keluar_ibfk_2` FOREIGN KEY (`id_penerima`) REFERENCES `penerima` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
