-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Apr 2022 pada 04.20
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `nmwisata` varchar(20) NOT NULL,
  `hgwisata` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `nmwisata`, `hgwisata`) VALUES
(1, 'candi borobudur', '50000'),
(2, 'gunung bromo', '20000'),
(3, 'pantai klayar', '30000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_tiket` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `identitas` varchar(15) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `wisata` varchar(25) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `pdewasa` varchar(11) NOT NULL,
  `panak` varchar(11) NOT NULL,
  `tharga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_tiket`, `nama`, `identitas`, `nohp`, `wisata`, `tgl_kunjungan`, `pdewasa`, `panak`, `tharga`) VALUES
(32, 'daffa', '234214', '313', 'candi borobudur', '2022-04-01', '2', '2', ''),
(33, 'daffa', '234214', '313', 'candi borobudur', '2022-04-01', '24', '2', ''),
(34, 'daffa', '234214', '313', 'pantai klayar', '2022-04-02', '1', '2', '60000'),
(35, 'daffa ariftama hanaris', '234214', '52424', 'candi borobudur', '2022-04-01', '2', '1', ''),
(36, 'daffa ariftama hanaris', '234214', '313', 'gunung bromo', '2022-04-02', '2', '2', '60000'),
(37, 'daffa ariftama hanaris', '089', '0989', 'candi borobudur', '2022-04-08', '2', '2', '150000'),
(38, 'daffa ariftama hanaris', '234214', '313', 'gunung bromo', '2022-04-09', '2', '', '40000'),
(39, 'daffa', '82902809', '313', 'candi borobudur', '2022-04-02', '1', '2', '100000'),
(40, 'uning', '82928282', '833838', 'gunung bromo', '2022-04-03', '2', '2', '60000'),
(41, 'daffa', '234214', '313', 'candi borobudur', '2022-04-02', '2', '2', '150000'),
(42, 'daffa', '234214', '313', 'candi borobudur', '2022-04-02', '1', '1', '75000'),
(43, 'daffa', '234214', '313', 'candi borobudur', '2022-04-09', '2', '2', '150000'),
(44, 'daffa ariftama hanaris', '1233', '089670674442', 'candi borobudur', '2022-04-02', '1', '1', '75000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
