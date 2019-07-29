-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 11:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'rudi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `harga_sampah`
--

CREATE TABLE `harga_sampah` (
  `id_harga_sampah` int(13) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_sampah`
--

INSERT INTO `harga_sampah` (`id_harga_sampah`, `jenis`, `harga`) VALUES
(6, 'PLASTIK', 1000),
(7, 'KERTAS', 5000),
(8, 'BESI', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `log_input`
--

CREATE TABLE `log_input` (
  `id_log_input` int(13) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_input`
--

INSERT INTO `log_input` (`id_log_input`, `no_rekening`, `tanggal`, `jenis`, `jumlah`, `harga`) VALUES
(1, '5377-6805-02', '05/02/2019', 'PLASTIK', '2', 1500),
(2, '5377-6805-02', '05/02/2019', 'BESI', '1.5', 750),
(3, '5377-6805-02', '05/02/2019', 'BESI', '1.5', 750),
(4, '5377-6805-02', '05/02/2019', 'BESI', '1.5', 750),
(5, '5377-6805-02', '05/02/2019', 'BESI', '1.5', 750),
(6, '5377-6805-02', '05/02/2019', 'BESI', '1.5', 750),
(7, '5377-6805-02', '05/02/2019', 'PLASTIK', '1', 1000),
(8, '5377-6805-02', '05/02/2019', 'PLASTIK', '1', 1000),
(9, '5377-6805-02', '05/02/2019', 'PLASTIK', '1', 1000),
(10, '5377-6805-02', '05/02/2019', 'PLASTIK', '1.5', 1500),
(11, '5377-6805-02', '05/02/2019', 'BESI', '1.5', 750),
(12, '5377-6805-02', '05/02/2019', 'PLASTIK', '1.25', 1250),
(13, '5377-6805-02', '06/02/2019', 'KERTAS', '1.5', 7500),
(14, '5377-6805-02', '07/02/2019', 'KERTAS', '1', 5000),
(15, '5377-6805-02', '07/02/2019', 'BESI', '1.5', 750),
(16, '5377-6805-02', '07/02/2019', 'PLASTIK', '1.5', 1500),
(17, '5377-6805-02', '07/02/2019', 'BESI', '1.5', 750),
(18, '9575-4802-09', '09/02/2019', 'BESI', '50', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `log_penarikan`
--

CREATE TABLE `log_penarikan` (
  `id_log_penarikan` int(11) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_penarikan`
--

INSERT INTO `log_penarikan` (`id_log_penarikan`, `no_rekening`, `tanggal`, `jumlah`) VALUES
(1, '5377-6805-02', '07/02/2019', '18000'),
(2, '5377-6805-02', '07/02/2019', '2000'),
(3, '5377-6805-02', '07/02/2019', '2000'),
(4, '5377-6805-02', '09/02/2019', '4000'),
(5, '5377-6805-02', '09/02/2019', '4000'),
(6, '3158-3005-02', '09/02/2019', '4000'),
(7, '5377-6805-02', '09/02/2019', '4000'),
(8, '9575-4802-09', '09/02/2019', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` int(10) NOT NULL,
  `no_rekening` varchar(13) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pin` int(30) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `saldo` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `no_rekening`, `nama`, `pin`, `alamat`, `tanggal_lahir`, `pekerjaan`, `foto`, `saldo`) VALUES
(3, '5377-6805-02', 'Ardiansyah', 12344321, 'zxczsdfczxczxc', 'zxxxx,02/01/1999', 'petani', '', 0),
(4, '9080-3705-02', 'Irpan Nawawi', 112233, 'aaaaaaaaaaaaaaaa', 'sssssss,02/01/1999', 'petani', '', 23000),
(6, '7825-3002-05', 'ruri', 112233, 'asaaaaa', 'sasasas,02/17/1999', 'petani', '', 1000),
(7, '6082-6002-05', 'Irpan Nawawi', 112233, 'assssssss', 'as,02/22/1999', 'petani', '', 0),
(8, '7269-0602-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(9, '5327-2802-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(10, '2271-6502-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(11, '8966-7602-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(12, '1784-6902-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(13, '9570-4402-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(14, '6775-2802-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(15, '5318-3402-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(16, '5197-1402-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(17, '7408-8102-05', 'Irpan Nawawi', 12344321, 'aaaaaaaaaaaaaa', 'mmmmm,02/11/1999', 'petani', '', 0),
(18, '3319-1202-05', 'JULANTI', 112233, 'ghjghjghjgj', 'hjghj,02/01/1999', 'petani', '', 0),
(19, '7050-9402-05', 'JULANTI', 112233, 'ghjghjghjgj', 'hjghj,02/01/1999', 'petani', '', 0),
(20, '5157-1402-05', 'JULANTI', 112233, 'ghjghjghjgj', 'hjghj,02/01/1999', 'petani', '', 0),
(21, '1206-7402-05', 'JULANTI', 112233, 'ghjghjghjgj', 'hjghj,02/01/1999', 'petani', '', 0),
(22, '7298-2502-05', 'JULANTI', 112233, 'ghjghjghjgj', 'hjghj,02/01/1999', 'petani', '', 0),
(23, '5165-5002-05', 'Irpan Nawawi', 112233, 'qqqqqqqqqqqq', 'qqqq,02/17/1999', 'petani', '', 0),
(24, '4200-5202-05', 'JULANTI', 112233, 'wwwww', 'wwwwww,02/01/1999', 'petani', '', 0),
(25, '7779-6202-05', 'JULANTI', 112233, 'wwwww', 'wwwwww,02/01/1999', 'petani', '', 0),
(26, '4758-4902-05', 'JULANTI', 112233, 'wwwww', 'wwwwww,02/01/1999', 'petani', '', 0),
(27, '9724-7302-05', 'JULANTI', 112233, 'wwwww', 'wwwwww,02/01/1999', 'petani', '', 0),
(28, '9575-4802-09', 'JULANTI', 112233, 'duka dimana', 'sssssss,02/11/1999', 'petani', '', 194000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id_transfer` int(11) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `no_rekening_tujuan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id_transfer`, `no_rekening`, `no_rekening_tujuan`, `tanggal`, `jumlah`) VALUES
(1, '5377-6805-02', '9080-3705-02', '07/02/2019', '4000'),
(2, '5377-6805-02', '9080-3705-02', '07/02/2019', '4000'),
(3, '5377-6805-02', '9080-3705-02', '07/02/2019', '4000'),
(4, '9080-3705-02', '5377-6805-02', '07/02/2019', '6000'),
(5, '5377-6805-02', '9080-3705-02', '07/02/2019', '6000'),
(6, '5377-6805-02', '9080-3705-02', '09/02/2019', '2000'),
(7, '5377-6805-02', '9080-3705-02', '09/02/2019 03:38:12', '2000'),
(8, '5377-6805-02', '9080-3705-02', '09/02/2019 15:39:11', '2000'),
(9, '5377-6805-02', '9080-3705-02', '09/02/2019 15:44:51', '1000'),
(10, '5377-6805-02', '7825-3002-05', '09/02/2019 21:47:36', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `harga_sampah`
--
ALTER TABLE `harga_sampah`
  ADD PRIMARY KEY (`id_harga_sampah`);

--
-- Indexes for table `log_input`
--
ALTER TABLE `log_input`
  ADD PRIMARY KEY (`id_log_input`);

--
-- Indexes for table `log_penarikan`
--
ALTER TABLE `log_penarikan`
  ADD PRIMARY KEY (`id_log_penarikan`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`),
  ADD UNIQUE KEY `no_rekening` (`no_rekening`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id_transfer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `harga_sampah`
--
ALTER TABLE `harga_sampah`
  MODIFY `id_harga_sampah` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `log_input`
--
ALTER TABLE `log_input`
  MODIFY `id_log_input` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `log_penarikan`
--
ALTER TABLE `log_penarikan`
  MODIFY `id_log_penarikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id_nasabah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id_transfer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
