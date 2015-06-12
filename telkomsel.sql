-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 11 Jun 2015 pada 20.28
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
('cc4b0c5f8f401eabb1b9aa86f82e7948', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1434079336, '');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komite_karir`
--

INSERT INTO `komite_karir` (`id`, `nik`, `nama`, `cat_karir`, `hats`, `ket_hats`, `hasil`, `jalur_karir`, `posisi`, `alasan`, `rekomendasi`) VALUES
(1, 1, 'tess', 'awdad', 'awda', 'awdawd', 'awdawd', 'awdad', 'awdad', 'tess', 'zxczcx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(4) NOT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `employee_category` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `band_posisi` varchar(255) NOT NULL,
  `band_individu` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status_pernikahan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `start_date_assignment` varchar(255) NOT NULL,
  `admins` varchar(255) NOT NULL,
  `nik_atasan` varchar(255) NOT NULL,
  `nama_atasan` varchar(255) NOT NULL,
  `medical_admin` varchar(255) NOT NULL,
  `edu_lvl` varchar(255) NOT NULL,
  `edu_institution` varchar(255) NOT NULL,
  `edu_faculty` varchar(255) NOT NULL,
  `position_id` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `egroup` varchar(255) NOT NULL,
  `directorate` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `tgl_masuk` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tipe`, `nik`, `nama`, `title`, `tanggal_masuk`, `employee_category`, `organization`, `job`, `band_posisi`, `band_individu`, `location`, `kota`, `no_hp`, `email`, `gender`, `status_pernikahan`, `agama`, `tanggal_lahir`, `start_date_assignment`, `admins`, `nik_atasan`, `nama_atasan`, `medical_admin`, `edu_lvl`, `edu_institution`, `edu_faculty`, `position_id`, `section`, `department`, `division`, `group`, `egroup`, `directorate`, `area`, `tgl_masuk`, `status`) VALUES
(1, 'user1', 'user1', 'user1', 76219, 'Robertho L.R.', 'Manager Network Service Makassar', '1996-11-04', 'PERMANENT', 'Network Service Makassar Department', 'Dep Head Network Service', '3.2', '3.3', 'Branch Makassar', 'MAKASSAR', '62811430022', 'Robertho_L_R@telkomsel.co.id', 'M', 'M', 'PROTESTAN', '1976-03-28', '2015-05-08', 'SULMALIRJA SALES CS', '67002', 'Noviandri', 'AREA4', 'S1', 'STIE Ebenhaezar', 'Management', '112682', '', 'Network Service Makassar Department', 'ICT Operation Region Sulawesi Division', 'ICT Network Management Area Pamasuka Group', '', 'Sales Directorate', 'AREA 4', '1996-11-04', 'AKTIF'),
(2, 'user2', 'user2', 'user2', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
