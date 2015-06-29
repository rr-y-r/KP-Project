-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 29 Jun 2015 pada 00.27
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
('72d2e8240ff2190bc607ec2671764d03', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36', 1435561935, 'a:7:{s:9:"user_data";s:0:"";s:8:"username";s:14:"manajer_hmc123";s:2:"id";s:2:"17";s:12:"is_logged_in";b:1;s:4:"tipe";s:7:"Manajer";s:3:"nik";s:5:"61660";s:5:"group";s:3:"HMC";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komite_karir`
--

CREATE TABLE IF NOT EXISTS `komite_karir` (
`id` int(30) NOT NULL,
  `group` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `cat_karir` varchar(25) NOT NULL,
  `hats` varchar(25) NOT NULL,
  `ket_hats` varchar(180) NOT NULL,
  `hasil` varchar(180) NOT NULL,
  `jalur_karir` varchar(55) NOT NULL,
  `posisi` varchar(25) NOT NULL,
  `alasan` varchar(180) NOT NULL,
  `rekomendasi` varchar(185) NOT NULL,
  `status` varchar(25) NOT NULL,
  `nik_kontributor` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komite_karir`
--

INSERT INTO `komite_karir` (`id`, `group`, `tanggal`, `nik`, `nama`, `cat_karir`, `hats`, `ket_hats`, `hasil`, `jalur_karir`, `posisi`, `alasan`, `rekomendasi`, `status`, `nik_kontributor`) VALUES
(1, '', '', 1, 'tess', 'awdad', 'awda', 'awdawd', 'awdawd', 'awdad', 'awdad', '', 'zxczcx', 'diterima', 0),
(2, '', '', 0, '00', '00', '00', '00', '00', '00', '00', '00', '00', '', 0),
(3, '', '', 11, '111', '11', '11', '11', '11', '11', '11', '11', '11', '', 0),
(4, '', '', 12312, 'ijwij', 'ijijwii', 'jiji', 'jij', 'iji', 'jij', 'ij', 'ijij', 'ij', '', 0),
(5, '', '', 11, '11', '11', '11', '11', '11', '11', '11', '11', '11', '', 0),
(6, '', '', 123456, 'tes', 'test', 'tes', 'tes', 'tes', 'tes', 'tes', '', 'tes', 'sudah', 76219),
(7, '', '', 123, '123', '123', '123', '123', '123', '123', '123', '123', '123', '', 1234),
(8, '', '', 11030, '654', '654', '654', '654', '654', '654', '654', '654', '654', '', 61660),
(9, '', '', 12345, 'nama', 'kategory', 'hats', 'keterangan hats', 'hasil', 'jalur', 'posisi', 'alasan', 'rekomenfasi', '', 61660),
(10, '', '', 123, '12344', '44', '44', '44', '44', '44', '44', '44', '44', '', 12344),
(11, 'Area_pamasuka', '2015-05-13', 0, 'tes', 'Successor', 'Strongly_Recommended', 'tes', 'Promosi', 'Struktural', 'tes', '', 'tes', 'Submit_BA_KOMKAR', 76219),
(12, '', '', 111, '11', 'Successor', 'Recommended', '111', 'Promosi', 'Fungsional', '11', '11', '11', '', 61660);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpejabat`
--

CREATE TABLE IF NOT EXISTS `tpejabat` (
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tpejabat`
--

INSERT INTO `tpejabat` (`nama`, `jabatan`) VALUES
('pejabat1', 'jabatan1'),
('pejabat2', 'jabatan2'),
('pejabat3', 'jabatan3'),
('pejabat4', 'jabatan4');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tipe`, `nik`, `nama`, `title`, `tanggal_masuk`, `employee_category`, `organization`, `job`, `band_posisi`, `band_individu`, `location`, `kota`, `no_hp`, `email`, `gender`, `status_pernikahan`, `agama`, `tanggal_lahir`, `start_date_assignment`, `admins`, `nik_atasan`, `nama_atasan`, `medical_admin`, `edu_lvl`, `edu_institution`, `edu_faculty`, `position_id`, `section`, `department`, `division`, `group`, `egroup`, `directorate`, `area`, `tgl_masuk`, `status`) VALUES
(1, 'user1', 'user1', 'user1', 76219, 'Robertho L.R.', 'Manager Network Service Makassar', '1996-11-04', 'PERMANENT', 'Network Service Makassar Department', 'Dep Head Network Service', '3.2', '3.3', 'Branch Makassar', 'MAKASSAR', '62811430022', 'Robertho_L_R@telkomsel.co.id', 'M', 'M', 'PROTESTAN', '1976-03-28', '2015-05-08', 'SULMALIRJA SALES CS', '67002', 'Noviandri', 'AREA4', 'S1', 'STIE Ebenhaezar', 'Management', '112682', '', 'Network Service Makassar Department', 'ICT Operation Region Sulawesi Division', 'ICT Network Management Area Pamasuka Group', '', 'Sales Directorate', 'AREA 4', '1996-11-04', 'AKTIF'),
(2, 'user2', 'user2', 'user2', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '666', '666', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'test2', 'test2', 'test', 666, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'anggota_HMC1', '1234', 'Anggota', 12344, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HMC', '', '', '', '', '', '', ''),
(6, 'anggota_HRD1', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HRD', '', '', '', '', '', '', ''),
(7, 'manajer_hmc', '1234', 'Manajer', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HMC', '', '', '', '', '', '', ''),
(8, 'manajer_hrd', '1234', 'Manajer', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HRD', '', '', '', '', '', '', ''),
(9, 'anggota_hmc2', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HMC', '', '', '', '', '', '', ''),
(10, 'anggota_hmc3', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HMC', '', '', '', '', '', '', ''),
(11, 'anggota_hmc4', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HMC', '', '', '', '', '', '', ''),
(12, 'anggota_hmc5', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HMC', '', '', '', '', '', '', ''),
(13, 'anggota_hrd2', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HRD', '', '', '', '', '', '', ''),
(14, 'anggota_hrd3', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HRD', '', '', '', '', '', '', ''),
(15, 'anggota_hrd4', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HRD', '', '', '', '', '', '', ''),
(16, 'anggota_hrd5', '1234', 'Anggota', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HRD', '', '', '', '', '', '', ''),
(17, 'manajer_hmc123', 'manajer_hmc123', 'Manajer', 61660, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HMC', '', '', '', '', '', '', '');

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
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
