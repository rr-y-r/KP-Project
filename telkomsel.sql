-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 08 Jun 2015 pada 21.04
-- Versi Server: 5.5.40
-- PHP Version: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `telkomsel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('7dcb62fa9714626bd7430beb25931abc', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433822471, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komite_karir`
--

CREATE TABLE IF NOT EXISTS `komite_karir` (
`id` int(30) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `cat_karir` varchar(25) NOT NULL,
  `hats` varchar(25) NOT NULL,
  `ket_hats` varchar(180) NOT NULL,
  `hasil` varchar(180) NOT NULL,
  `jalur_karir` varchar(55) NOT NULL,
  `posisi` varchar(25) NOT NULL,
  `alasan` varchar(180) NOT NULL,
  `rekomendasi` varchar(185) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komite_karir`
--

INSERT INTO `komite_karir` (`id`, `nik`, `nama`, `cat_karir`, `hats`, `ket_hats`, `hasil`, `jalur_karir`, `posisi`, `alasan`, `rekomendasi`) VALUES
(1, 1, 'awdad', 'awdad', 'awda', 'awdawd', 'awdawd', 'awdad', 'awdad', 'awdawd', 'zxczcx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(4) NOT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL,
  `tipe` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tipe`) VALUES
(1, 'user1', 'user1', 'user1'),
(2, 'user2', 'user2', 'user2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `komite_karir`
--
ALTER TABLE `komite_karir`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komite_karir`
--
ALTER TABLE `komite_karir`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
