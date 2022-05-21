-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2022 at 11:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interestbk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int(10) NOT NULL,
  `id_jadwal` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensih`
--

CREATE TABLE `tb_absensih` (
  `id_absensih` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensih`
--

INSERT INTO `tb_absensih` (`id_absensih`, `tanggal`, `nis`, `ket`) VALUES
(6, '2016-03-19', '15002', 'S'),
(5, '2016-03-19', '15001', 'H'),
(7, '2016-04-09', '13001', 'H'),
(8, '2016-04-09', '13002', 'H'),
(9, '2016-04-09', '13003', 'S'),
(10, '2016-04-09', '13004', 'H'),
(11, '2016-04-09', '13102001', 'I'),
(12, '2016-04-04', '15001', 'H'),
(13, '2016-04-04', '15002', 'S'),
(14, '2016-04-04', '13001', 'H'),
(15, '2016-04-04', '13002', 'H'),
(16, '2016-04-04', '13003', 'S'),
(17, '2016-04-04', '13004', 'I'),
(18, '2016-04-04', '13102001', 'A'),
(19, '2022-05-09', '15002', 'H'),
(20, '2022-05-10', '121314', 'H'),
(21, '2022-05-10', '123456', 'H'),
(22, '2022-05-11', '121314', 'H'),
(23, '2022-05-11', '123456', 'H'),
(24, '2022-05-11', '131214', 'H'),
(25, '2022-05-11', '13001', 'H'),
(26, '2022-05-11', '13002', 'H'),
(27, '2022-05-11', '13003', 'S'),
(28, '2022-05-11', '13004', 'S'),
(29, '2022-05-11', '13102001', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(3) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(40) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `kode_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`) VALUES
(31, '16020101', 'WINDY, S.PD.', 'WIN', '', 'MEDAN', '0000-00-00', 'MEDAN', 'ISLAM'),
(33, '211402102', 'WILDAN TAUFIK WIBOWO NASUTION, S.PD, S.P', 'WIL', 'LAKI-LAKI', 'MEDAN', '2022-05-01', 'JL. MATAHARI RAYA', 'ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_mengajar` int(4) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_berakhir` varchar(10) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_mengajar`, `hari`, `jam_mulai`, `jam_berakhir`, `id_kelas`) VALUES
(96, 41, 'Kamis', '22:47', '23:47', 14),
(97, 41, 'Kamis', '03:56', '06:56', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_konseling`
--

CREATE TABLE `tb_jadwal_konseling` (
  `id_jadwal_konseling` bigint(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(64) NOT NULL,
  `hari` varchar(64) NOT NULL,
  `tanggal_konseling` date NOT NULL,
  `jam` varchar(64) NOT NULL,
  `jam2` varchar(64) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_konseling`
--

INSERT INTO `tb_jadwal_konseling` (`id_jadwal_konseling`, `nis`, `nama_siswa`, `hari`, `tanggal_konseling`, `jam`, `jam2`, `id_siswa`) VALUES
(3009, '123456', 'WILDAN TAUFIK WIBOWO NASUTION', 'SENIN', '2022-05-16', '07:50', '08:50', 15),
(3011, '131214', 'GOLD D. ROGER', 'RABU', '2022-05-18', '08:52', '10:52', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(12, 'VII'),
(13, 'VIII'),
(14, 'IX'),
(15, 'X'),
(16, 'XI'),
(17, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id_konsultasi` bigint(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(64) NOT NULL,
  `tanggal` date NOT NULL,
  `judul_keluhan` varchar(64) NOT NULL,
  `keluhan` varchar(1500) NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`id_konsultasi`, `nis`, `nama_siswa`, `tanggal`, `judul_keluhan`, `keluhan`, `solusi`, `id_siswa`) VALUES
(2004, '131214', 'GOLD D. ROGER', '2022-05-01', '1', '1                ', 'INI SOLUSI UNTUK KAMU ROGER', 17),
(2005, '121314', 'JENNIE SIMATUPANG', '2022-05-02', '3', '         3       ', '', 16),
(2006, '211402100', 'ANTO CHIBI', '2022-05-20', 'TES', 'TES', '', 20),
(2011, '121314', 'JENNIE SIMATUPANG', '2022-05-21', 'TES', 'TES                ', '', 16),
(2012, '121314', 'JENNIE SIMATUPANG', '2022-05-22', 'TES2', 'TES2                ', 'INI SOLUSI UNTUK KAMU JENNI', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuisioner`
--

CREATE TABLE `tb_kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `kuisioner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kuisioner`
--

INSERT INTO `tb_kuisioner` (`id_kuisioner`, `kuisioner`) VALUES
(3, 'https://kahoot.it/'),
(4, 'https://youtu.be/lHg3hlbBrGQ'),
(5, 'https://youtu.be/7sz-ihbcxho'),
(6, 'https://youtu.be/7Sz-iHBcXHo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(3) NOT NULL,
  `kode_mapel` varchar(5) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `kode_mapel`, `mapel`) VALUES
(8, '01', 'PENDIDIKAN AGAMA ISLAM'),
(9, '02', 'PENDIDIKAN KEWARGANERAAN'),
(10, '03', 'BAHASA INDONESIA'),
(11, '04', 'MATEMATIKA'),
(12, '05', 'ILMU PENGETAHUAN ALAM'),
(13, '06', 'ILMU PENGETAHUAN SOSIAL'),
(14, '07', 'BAHASA INGGRIS'),
(15, '08', 'SENI BUDAYA'),
(16, '09', 'PENDIDIKAN JASMANI DAN KESEHATAN (PENJASKES)'),
(17, '10', 'KETERAMPILAN'),
(19, '12', 'TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)'),
(20, '13', 'BIMBINGAN DAN KONSELING'),
(21, '14', 'AQIDAH AKHLAK'),
(22, '15', 'AL-QURAN DAN HADIST'),
(23, '16', 'FIQIH'),
(24, '17', 'SARANA KEROHANIAN ISLAM'),
(25, '18', 'BAHASA ARAB'),
(26, '19', 'INSYA BAHASA INGGRIS'),
(27, '20', 'NAHWU SOROF'),
(28, '21', 'MAHFUDOH, INSYA BAHASA ARAB'),
(31, '22', 'BBB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mengajar`
--

CREATE TABLE `tb_mengajar` (
  `id_mengajar` int(3) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_mapel` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mengajar`
--

INSERT INTO `tb_mengajar` (`id_mengajar`, `kode_guru`, `kode_mapel`) VALUES
(41, 'WIL', '13'),
(43, 'WIN', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `pass`, `status`) VALUES
(4, '16102001', 'asep.guru', 'guru'),
(26, 'admin', 'admin', 'admin'),
(27, 'tatausaha', 'tatausaha', 'tatausaha'),
(34, '16020101', 'windy', 'guru'),
(43, '123456', 'wildan', 'siswa'),
(44, '121314', 'wildan1', 'siswa'),
(45, '131214', 'roger', 'siswa'),
(49, '211402102', 'wildan123', 'guru'),
(53, '211402100', 'anto', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(3) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nama_ortu` varchar(40) NOT NULL,
  `no_ortu` varchar(15) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `nama_ortu`, `no_ortu`, `id_kelas`) VALUES
(16, '121314', 'JENNIE SIMATUPANG', 'PEREMPUAN', 'SEOUL', '2022-05-01', 'SEOUL, GG. INDAH ABADI', 'KONGHUCU', 'PUKIMAN', '08123456', 17),
(15, '123456', 'WILDAN TAUFIK WIBOWO NASUTION', 'LAKI-LAKI', 'MEDAN', '2003-06-01', 'JL. PEMBANGUNAN RAYA', 'ISLAM', 'KAISAR HIROHITO', '081234567891', 17),
(1, '13001', 'ANDI MUH RIFQI', 'LAKI-LAKI', 'MAKASSAR', '2003-12-04', 'TASIKMALAYA', 'ISLAM', 'MUSKAR', '08123456789', 14),
(3, '13002', 'DZULFAQQOR AMIN', 'LAKI-LAKI', 'JAKARTA', '2004-12-22', 'TASIKMALAYA', 'ISLAM', 'ARPEN', '08345678901', 14),
(4, '13003', 'MUH. AMMAR', 'LAKI-LAKI', 'MAKASSAR', '2004-10-16', 'TASIKMALAYA', 'ISLAM', 'RUSYDAH', '+628123456789', 14),
(11, '13004', 'RAVI SOFYAN', 'LAKI-LAKI', 'TASIKMALAYA', '2016-02-29', 'TASIKMALAYA', 'ISLAM', 'MR', '3653786428', 14),
(12, '13102001', 'ADITYA WIBOWO', 'PEREMPUAN', 'CILACAP', '2016-03-31', 'JALAN KENANGAN', 'ISLAM', 'MUCHLIS', '085434567281', 14),
(17, '131214', 'GOLD D. ROGER', 'LAKI-LAKI', 'WANO', '2003-01-10', 'LAUTAN ONE PIECE', 'BUDDHA', 'RAJA LAUTAN', '08123455544', 17),
(2, '14001', 'PRADIKA DESTARINI', 'PEREMPUAN', 'PURBALINGGA', '2004-12-11', 'TASIKMALAYA', 'ISLAM', 'RINI', '08234567890', 13),
(7, '14002', 'CALVIN SUTOYO', 'LAKI-LAKI', 'PADANG, SUMATERA BAR', '2005-01-05', 'TASIKMALAYA', 'ISLAM', 'SUTOYO HADININGRAT', '+6254447474', 13),
(5, '15001', 'HARUN AR-RASYID', 'LAKI-LAKI', 'MANILA', '0000-00-00', 'TASIKMALAYA', 'ISLAM', 'RASYID AL-HIKMAH', '+624545657778', 13),
(6, '15002', 'JUNETY', 'PEREMPUAN', 'JAKARTA', '2022-05-01', 'TASIKMALAYA', 'ISLAM', 'MOH.SAIPUDINN', '+6251514578', 13),
(20, '211402100', 'ANTO CHIBI', 'LAKI-LAKI', 'MEDAN', '2022-05-01', 'MEDAN', 'ISLAM', 'BRODI', '081234214567', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `tb_absensih`
--
ALTER TABLE `tb_absensih`
  ADD PRIMARY KEY (`id_absensih`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `id_guru` (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `id_mengajar_2` (`id_mengajar`);

--
-- Indexes for table `tb_jadwal_konseling`
--
ALTER TABLE `tb_jadwal_konseling`
  ADD PRIMARY KEY (`id_jadwal_konseling`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD UNIQUE KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `kode_mapel_2` (`kode_mapel`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `tb_absensih`
--
ALTER TABLE `tb_absensih`
  MODIFY `id_absensih` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tb_jadwal_konseling`
--
ALTER TABLE `tb_jadwal_konseling`
  MODIFY `id_jadwal_konseling` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3012;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `id_konsultasi` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2013;

--
-- AUTO_INCREMENT for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  MODIFY `id_mengajar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_mengajar`) REFERENCES `tb_mengajar` (`id_mengajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal_konseling`
--
ALTER TABLE `tb_jadwal_konseling`
  ADD CONSTRAINT `tb_jadwal_konseling_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`);

--
-- Constraints for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD CONSTRAINT `tb_konsultasi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`);

--
-- Constraints for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD CONSTRAINT `tb_mengajar_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `tb_mapel` (`kode_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mengajar_ibfk_2` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
