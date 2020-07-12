-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jul 2020 pada 07.02
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_tio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `id` int(100) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`id`, `nama_user`, `email_user`, `pesan`) VALUES
(3, 'setio', 'setio@gmail.com', 'saya ingin bergabung grup fans club!'),
(4, 'aldi', 'aldi@gmail.com', 'bagaimana caranyya gabung fans club?'),
(6, 'jhon', 'jhon@gmail.com', 'saya ingin gabung grup!'),
(7, 'meli', 'meli@gmail.com', 'komunitasnya dari kota mana sasja ya?'),
(8, 'budi', 'budi@gmail.com', 'adakah komunitasnya di bekasi?'),
(9, 'aris', 'aris@gmail.com', 'harga member berapa ya kak?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `password`) VALUES
(3, 'axis', 'axis@gmial.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'zaenal', 'zaenal@vavsha.com', '3e715d6870661a4fe33a3b1f11965995'),
(14, 'diah', 'diah@gmail.com', 'b1980b34d5180cf2051d0fe400cb86e0'),
(15, 'aris', 'aris@gmail.com', '288077f055be4fadc3804a69422dd4f8'),
(16, 'eko', 'eko@gmail.com', 'e5ea9b6d71086dfef3a15f726abcc5bf'),
(17, 'dewi', 'dewi@gmail.com', 'ed1d859c50262701d92e5cbf39652792'),
(18, 'ali', 'ali@gmail.com', '86318e52f5ed4801abe1d13d509443de');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
