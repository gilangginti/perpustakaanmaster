-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 10:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(15) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenkel`, `alamat`, `no_hp`) VALUES
('AG001', 'Gilang', 'Laki - Laki', 'Bandung', '898989898'),
('AG002', 'Adit', 'Laki - Laki', 'Jakarta', '2147483647'),
('AG003', 'Pertiwi', 'Perempuan', 'Surabaya', '2147483647'),
('AG004', 'Salva', 'Perempuan', 'Bandung\r\n', '891232123'),
('AG005', 'Salwa', 'Perempuan', 'Surabaya', '2147483647'),
('AG006', 'Silvi', 'Perempuan', 'Bandung', '089898989812'),
('AG007', 'Ginti', 'Perempuan', 'Purwakarta', '08912312111111'),
('AG008', 'Panjul', 'Laki - Laki', 'Jakarta', '089123144123'),
('AG009', 'Asu', 'Laki - Laki', 'asdas', '09123123123'),
('AG010', 'Comom', 'Laki - Laki', 'asdasdas', '012312312'),
('AG011', 'asdasdas', 'Laki - Laki', 'asdasdasdad', '01823213122'),
('AG012', 'Rahman', 'Laki - Laki', 'Yogyakarta', '08912312333112');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `id_pengarang` varchar(255) NOT NULL,
  `id_penerbit` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_pengarang`, `id_penerbit`, `judul_buku`, `tahun_terbit`, `jumlah`) VALUES
('BK001', '6', '1', 'Panduan Jungler Mobile', 2019, 20),
('BK002', '9', '1', 'Panduan Programing', 2018, 9);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pm` varchar(20) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pm`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
('PM003', 'AG001', 'BK002', '2021-07-07', '2021-07-14'),
('PM004', 'AG004', 'BK002', '2021-07-07', '2021-07-14'),
('PM005', 'AG001', 'BK001', '2021-07-07', '2021-07-14');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `jml_after_pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW update buku set buku.jumlah = buku.jumlah -1 where buku.id_buku = new.id_buku
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'Erlangga');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(255) NOT NULL,
  `nama_pengarang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(1, 'Bang Xin'),
(2, 'funny'),
(3, 'Bkent'),
(4, 'Perli'),
(5, 'Bang Jo'),
(6, 'Gilang Ginti'),
(7, 'R7'),
(8, 'Lemon'),
(9, 'Ilham'),
(10, 'Gempi'),
(11, 'Gisel'),
(12, 'Kurniawan'),
(13, 'Pak AP'),
(14, 'Windah basudara');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_kembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `tgl_kembalikan`) VALUES
(1, 'AG001', 'BK002', '2021-06-20', '2021-06-27', '2021-07-07'),
(2, 'AG003', 'BK002', '2021-07-07', '2021-07-14', '2021-07-07'),
(3, 'AG002', 'BK001', '2021-07-07', '2021-07-14', '2021-07-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
