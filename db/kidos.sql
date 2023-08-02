-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 08:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesejahteraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_fuzzy`
--

CREATE TABLE `hasil_fuzzy` (
  `id` int(5) NOT NULL,
  `id_himpunan` varchar(5) NOT NULL,
  `id_hasil_dosen` varchar(10) NOT NULL,
  `f` float(2,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hasil_fuzzy`
--

INSERT INTO `hasil_fuzzy` (`id`, `id_himpunan`, `id_hasil_dosen`, `f`) VALUES
(530, '10', '71', 0.00),
(529, '9', '71', 0.40),
(528, '8', '71', 0.99),
(527, '7', '71', 0.00),
(526, '6', '71', 0.00),
(525, '5', '71', 0.00),
(524, '4', '71', 0.50),
(599, '9', '79', 0.86),
(598, '8', '79', 0.99),
(597, '7', '79', 0.00),
(596, '6', '79', 0.00),
(595, '5', '79', 0.00),
(539, '9', '72', 0.20),
(538, '8', '72', 0.96),
(537, '7', '72', 0.00),
(536, '6', '72', 0.00),
(523, '3', '71', 0.00),
(522, '2', '71', 0.00),
(521, '1', '71', 0.97),
(535, '5', '72', 0.00),
(534, '4', '72', 0.60),
(533, '3', '72', 0.00),
(532, '2', '72', 0.00),
(531, '1', '72', 0.97),
(594, '4', '79', 0.00),
(560, '10', '74', 0.99),
(559, '9', '74', 0.00),
(549, '9', '73', 0.00),
(548, '8', '73', 0.00),
(547, '7', '73', 0.00),
(546, '6', '73', 0.99),
(545, '5', '73', 0.99),
(544, '4', '73', 0.00),
(558, '8', '74', 0.00),
(557, '7', '74', 0.00),
(556, '6', '74', 0.99),
(555, '5', '74', 0.00),
(554, '4', '74', 0.00),
(553, '3', '74', 0.99),
(552, '2', '74', 0.00),
(551, '1', '74', 0.34),
(550, '10', '73', 0.99),
(543, '3', '73', 0.00),
(542, '2', '73', 0.00),
(541, '1', '73', 0.99),
(540, '10', '72', 0.20),
(590, '10', '78', 0.00),
(589, '9', '78', 0.86),
(588, '8', '78', 0.00),
(587, '7', '78', 0.00),
(586, '6', '78', 0.99),
(593, '3', '79', 0.99),
(592, '2', '79', 0.00),
(591, '1', '79', 0.86),
(585, '5', '78', 0.00),
(584, '4', '78', 0.00),
(583, '3', '78', 0.99),
(582, '2', '78', 0.00),
(581, '1', '78', 0.86),
(600, '10', '79', 0.00),
(601, '1', '80', 0.00),
(602, '2', '80', 0.99),
(603, '3', '80', 0.00),
(604, '4', '80', 0.00),
(605, '5', '80', 0.99),
(606, '6', '80', 0.00),
(607, '7', '80', 0.00),
(608, '8', '80', 0.99),
(609, '9', '80', 0.00),
(610, '10', '80', 0.99),
(611, '1', '81', 0.00),
(612, '2', '81', 0.71),
(613, '3', '81', 0.99),
(614, '4', '81', 0.00),
(615, '5', '81', 0.00),
(616, '6', '81', 0.33),
(617, '7', '81', 0.00),
(618, '8', '81', 0.00),
(619, '9', '81', 0.00),
(620, '10', '81', 0.41),
(621, '1', '82', 0.67),
(622, '2', '82', 0.00),
(623, '3', '82', 0.00),
(624, '4', '82', 0.00),
(625, '5', '82', 0.24),
(626, '6', '82', 0.00),
(627, '7', '82', 0.00),
(628, '8', '82', 0.21),
(629, '9', '82', 0.86),
(630, '10', '82', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `waktu` int(3) DEFAULT NULL,
  `materi` int(3) DEFAULT NULL,
  `nilai` int(3) DEFAULT NULL,
  `rapi` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `nama`, `waktu`, `materi`, `nilai`, `rapi`) VALUES
(79, 'as', 10, 100, 10, 10),
(78, 'assa', 10, 10, 10, 20),
(80, 'asas', 100, 100, 100, 100),
(81, 'sssssssss', 90, 30, 80, 10),
(82, 'wq', 22, 77, 10, 78);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_himpunan`
--

CREATE TABLE `tbl_himpunan` (
  `id` int(10) NOT NULL,
  `nama_himpunan` varchar(30) DEFAULT NULL,
  `bawah` float(10,2) DEFAULT NULL,
  `tengah` float(10,2) DEFAULT NULL,
  `atas` float(10,2) DEFAULT NULL,
  `kelompok` tinyint(2) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_himpunan`
--

INSERT INTO `tbl_himpunan` (`id`, `nama_himpunan`, `bawah`, `tengah`, `atas`, `kelompok`, `keterangan`) VALUES
(1, 'Terlambat', 1.00, 35.00, 65.00, 1, NULL),
(2, 'Tepat Waktu', 66.00, 80.00, 100.00, 1, NULL),
(3, 'Tidak Sesuai', 10.00, 30.00, 40.00, 2, NULL),
(4, 'Sesuai', 41.00, 55.00, 70.00, 2, NULL),
(5, 'Sangat Sesuai', 71.00, 85.00, 100.00, 2, NULL),
(6, 'Tidak Sesuai Komponen', 10.00, 30.00, 40.00, 3, NULL),
(7, 'Sesuai Komponen', 41.00, 60.00, 70.00, 3, NULL),
(8, 'Sangat Sesuai Komponen', 71.00, 85.00, 100.00, 3, NULL),
(9, 'Berantakan', 1.00, 35.00, 65.00, 4, NULL),
(10, 'Rapi', 66.00, 80.00, 100.00, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_variabel`
--

CREATE TABLE `tbl_variabel` (
  `id` int(10) NOT NULL,
  `nama_variabel` varchar(25) DEFAULT NULL,
  `field_akses` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_variabel`
--

INSERT INTO `tbl_variabel` (`id`, `nama_variabel`, `field_akses`) VALUES
(1, 'Waktu', 'waktu'),
(2, 'Materi', 'materi'),
(3, 'Nilai', 'nilai'),
(4, 'Rapi', 'rapi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_variabel`
--
ALTER TABLE `tbl_variabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_variabel`
--
ALTER TABLE `tbl_variabel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
