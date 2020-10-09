-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2020 pada 14.29
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikan_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(8, 'Udang Pencet', '30 - 40 pcs', 'Udang', 155000, 29, 'IMG_20200615_013508.jpg'),
(9, 'Udang Vaname', '50 - 60 pcs', 'Udang', 120000, 97, 'IMG_20200615_013442.jpg'),
(10, 'Udang Peci Kupas', '45 - 55 pcs', 'Udang', 125000, 99, 'IMG_20200615_013412.jpg'),
(11, 'Udang Jerebung', '30 - 40 pcs', 'Udang', 140000, 100, 'IMG_20200615_013547.jpg'),
(15, 'Ikan Bandeng Super', '3 - 4 ekor', 'Ikan Tawar', 60000, 28, 'IMG_20200615_013739.jpg'),
(16, 'Ikan Bawal Hitam', '1 - 2 ekor', 'Ikan Laut', 90000, 42, 'IMG_20200615_014939.jpg'),
(17, 'Ikan Bawal Merah', '4 - 6 ekor', 'Ikan Tawar', 50000, 37, 'IMG_20200615_013758.jpg'),
(18, 'Ikan Mas', '5 - 6 ekor', 'Ikan Laut', 60000, 12, 'IMG_20200615_014009.jpg'),
(19, 'Ikan Nila Merah', '4 - 6 ekor', 'Ikan Tawar', 57000, 98, 'IMG_20200615_014027.jpg'),
(20, 'Ikan Patin Hitam', '2 - 3 ekor', 'Ikan Tawar', 50000, 12, 'IMG_20200615_014114.jpg'),
(22, 'Ikan Baronang', '5 - 6 ekor', 'Ikan Laut', 100000, 100, 'IMG_20200615_014838.jpg'),
(25, 'Ikan Bentrong', '5 - 8 ekor', 'Ikan Laut', 55000, 42, 'IMG_20200615_014411.jpg'),
(26, 'Kepiting', '2 - 3 ekor', 'Kepiting', 75000, 10, 'IMG_20200615_014710.jpg'),
(27, 'Ikan Kuwe Cepa', '2 - 4 ekor', 'Ikan Laut', 85000, 43, 'IMG_20200615_014858.jpg'),
(28, 'Ikan Ekor Kuning', '10 - 15 ekor', 'Ikan Tawar', 80000, 100, 'IMG_20200615_013652.jpg'),
(29, 'Ikan Pari', '1 - 2 ekor', 'Ikan Laut', 70000, 12, 'IMG_20200615_015003.jpg'),
(30, 'Ikan Gurame', '2 - 4 ekor', 'Ikan Tawar', 60000, 20, 'IMG_20200615_013816.jpg'),
(32, 'Ikan Teri Basah', '500 - 600 ekor', 'Ikan Tawar', 60000, 10, 'IMG_20200615_013715.jpg'),
(33, 'Cumi Size Sedang', '10 - 20 pcs', 'Cumi-cumi', 110000, 23, 'IMG_20200614_0013031.jpg'),
(34, 'Cumi Kupas Tube', '4 - 6 ekor', 'Cumi-cumi', 90000, 44, 'IMG_20200615_0145531.jpg'),
(35, 'Ikan Lele', '5 - 7 ekor', 'Ikan Tawar', 55000, 13, 'IMG_20200615_013633.jpg'),
(36, 'Ikan Mujahir', '4 - 6 ekor', 'Ikan Tawar', 60000, 110, 'IMG_20200615_013927.jpg'),
(37, 'Ikan Selar', '30 - 40 ekor', 'Ikan Tawar', 55000, 11, 'IMG_20200615_013905.jpg'),
(38, 'Ikan Pisang-Pisang', '8 - 10 ekor', 'Ikan Tawar', 80000, 11, 'IMG_20200615_014053.jpg'),
(39, 'Ikan Tongkol', '1 - 2 ekor', 'Ikan Laut', 57000, 34, 'IMG_20200615_014155.jpg'),
(40, 'Ikan Kembung Banjar', '5 - 7 ekor', 'Ikan Laut', 52000, 21, 'IMG_20200615_0141351.jpg'),
(41, 'Ikan Aji Aji', '1 - 2 ekor', 'Ikan Laut', 75000, 21, 'IMG_20200615_014333.jpg'),
(42, 'Sotong', '20 - 30 pcs', 'Cumi-cumi', 80000, 22, 'IMG_20200615_0144481.jpg'),
(43, 'Cumi Size Besar', '5 - 10 ekor', 'Cumi-cumi', 120000, 24, 'IMG_20200615_014533.jpg'),
(44, 'Ikan Pasan', '12 ekor', 'Ikan Asin', 160000, 54, 'IMG_20200615_014639.jpg'),
(45, 'Ikan Teri Jengki', '600 - 700 ekor', 'Ikan Asin', 142000, 89, 'IMG_20200615_014617.jpg'),
(46, 'Ikan Sebelah', '2 - 3 ekor', 'Ikan Tawar', 70000, 45, 'IMG_20200615_014739.jpg'),
(47, 'Ikan Bebel', '1 - 2 ekor', 'Ikan Tawar', 65000, 21, 'IMG_20200615_014757.jpg'),
(48, 'Ikan Bawal Putih', '3 - 5 ekor', 'Ikan Laut', 170000, 48, 'IMG_20200615_015110.jpg'),
(49, 'Ikan Tenggiri Bulat', '1 - 3 ekor', 'Ikan Laut', 95000, 25, 'IMG_20200615_014911.jpg'),
(50, 'Ikan Kuwe Lilin', '2 - 4 ekor', 'Ikan Laut', 85000, 34, 'IMG_20200615_015024.jpg'),
(51, 'Ikan Kambing Kambing', '2 - 3 ekor', 'Ikan Laut', 70000, 38, 'IMG_20200615_015051.jpg'),
(54, 'Ikan Kakap Putih', '2 - 3 ekor', 'Ikan Laut', 85000, 12, 'ikan_kakap_putih.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faktur`
--

CREATE TABLE `tb_faktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `no_telp` text NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `namarek` varchar(25) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_faktur`
--

INSERT INTO `tb_faktur` (`id`, `nama`, `no_telp`, `alamat`, `namarek`, `tgl_pesan`, `batas_bayar`) VALUES
(96, 'Midya Lestari Dewi', '081982736475', 'Jakarta Pusat - Bendungan Hilir', 'Lista Novia', '2020-08-24 21:00:19', '2020-08-25 21:00:19'),
(98, 'Oma', '081533839153', 'Simpang Empat', 'Mersyta Vania D', '2020-08-24 22:21:51', '2020-08-25 22:21:51'),
(99, 'Hesta', '085766666666', 'Jakarta Pusat - Bendungan Hilir', 'Mersyta Vania D', '2020-08-24 22:22:18', '2020-08-25 22:22:18'),
(100, 'Ratih Wahyuni', '081982736555', 'Sulit Air, Solok', 'Ratih Wahyuni Islami', '2020-08-26 20:28:23', '2020-08-27 20:28:23'),
(101, 'Astrivo Sevella', '085766554445', 'Air Tawar, Padang', 'Astrivo Sevella Dewi', '2020-08-26 20:29:54', '2020-08-27 20:29:54'),
(109, 'Hesta Lestari', '087653726625', 'Jakarta Pusat - Bendungan Hilir', 'Hesta Lestari', '2020-09-12 17:49:05', '2020-09-13 17:49:05'),
(110, 'Lina Wahyuni', '089765432345', 'Pasar Ambacang', 'Lina Wahyuni', '2020-09-13 17:58:59', '2020-09-14 17:58:59'),
(113, 'Prima Tri Dewi', '085643565433', 'Pasar Ambacang, UNAND', 'Lista Novia', '2020-09-23 00:41:44', '2020-09-24 00:41:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_faktur` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_faktur`, `id_brg`, `nama_brg`, `jumlah`, `harga`) VALUES
(67, 96, 15, 'Ikan Bandeng Super', 1, 60000),
(69, 98, 33, 'Cumi Size Sedang', 1, 110000),
(70, 99, 8, 'Udang Pencet', 1, 155000),
(71, 99, 9, 'Udang Vaname', 1, 120000),
(72, 100, 44, 'Ikan Pasan', 1, 160000),
(73, 100, 26, 'Kepiting', 1, 75000),
(74, 101, 27, 'Ikan Kuwe Cepa', 1, 85000),
(83, 109, 9, 'Udang Vaname', 1, 120000),
(84, 110, 10, 'Udang Peci Kupas', 1, 125000),
(90, 113, 8, 'Udang Pencet', 1, 155000),
(91, 113, 17, 'Ikan Bawal Merah', 1, 50000),
(92, 113, 19, 'Ikan Nila Merah', 1, 57000);

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-new.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(2, 'user', 'user', 'user123', 2),
(5, 'Admin', 'Admin', 'password', 1),
(14, 'Prima Tri Dewi', 'Primatdw', 'prima123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_faktur`
--
ALTER TABLE `tb_faktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_faktur`
--
ALTER TABLE `tb_faktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
