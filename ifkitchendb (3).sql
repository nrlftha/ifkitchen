-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 04:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifkitchendb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarcustomer`
--

CREATE TABLE `daftarcustomer` (
  `idcustomer` int(11) NOT NULL,
  `customerno` varchar(100) NOT NULL,
  `customername` text NOT NULL,
  `password` text NOT NULL,
  `phoneno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarcustomer`
--

INSERT INTO `daftarcustomer` (`idcustomer`, `customerno`, `customername`, `password`, `phoneno`) VALUES
(1, '123', 'nrlftha240@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647),
(2, '456', 'Amira', '250cf8b51c773f3f8dc8b4be867a9a02', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `productiondoor`
--

CREATE TABLE `productiondoor` (
  `idproductiondoor` int(10) NOT NULL,
  `empno` text NOT NULL,
  `pintu` varchar(50) NOT NULL,
  `handle` varchar(50) NOT NULL,
  `jcolor` varchar(50) NOT NULL,
  `door_carcase` date DEFAULT NULL,
  `accessories` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `jhandle` varchar(100) NOT NULL,
  `carcase` varchar(100) NOT NULL,
  `papan` varchar(100) NOT NULL,
  `opintu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productiondoor`
--

INSERT INTO `productiondoor` (`idproductiondoor`, `empno`, `pintu`, `handle`, `jcolor`, `door_carcase`, `accessories`, `remark`, `color`, `jhandle`, `carcase`, `papan`, `opintu`) VALUES
(1, 'A100', 'MW 2011B', 'M2H(3G) / G1H3(4G)', 'hdf', NULL, '', 'Check Remark', '', '', 'Keluarkan Carcase, Pintu & Panel', '', ''),
(14, 'admin', 'MW 3023', 'ctxcl', 'H11', NULL, 'Check Accessories', '', '', '', 'Keluarkan Carcase, Pintu & Panel', '', ''),
(15, 'production', 'MW 1005STM', 'M2H(3G) / G1H3(4G)', 'Slope Handle', '2022-04-28', 'Check Accessories', '', '', '', '', '', ''),
(20, '1234', 'MW 2078', 'M2H(3G) / G1H3(4G)', 'Slope Handle', '2022-05-11', 'Check Accessories', '', '', '', 'Keluarkan Carcase, Pintu & Panel', '', ''),
(21, '5678', 'MW 6642B', 'M2H(3G) / G1H3(4G)', 'Slope Handle', '2022-05-03', 'Check Accessories', '', '', '', '', '', 'Order Pintu'),
(22, '1234', 'MW 2078', 'Slope Handle', 'ctxcl', '2022-05-18', 'Check Accessories', 'Check Remark', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `idprogress` int(10) NOT NULL,
  `customerno` text NOT NULL,
  `sorder` date NOT NULL,
  `sverify` date NOT NULL,
  `door_carcase` date NOT NULL,
  `part_goods` date NOT NULL,
  `payment` date NOT NULL,
  `delivery` date NOT NULL,
  `carcase_installation` date NOT NULL,
  `worktop_installation` date NOT NULL,
  `finishing` date NOT NULL,
  `handover` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`idprogress`, `customerno`, `sorder`, `sverify`, `door_carcase`, `part_goods`, `payment`, `delivery`, `carcase_installation`, `worktop_installation`, `finishing`, `handover`) VALUES
(5, '1111', '2022-04-28', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(8, '1234', '2022-05-01', '2022-05-20', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, '5678', '2022-05-01', '2022-05-03', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, '1011', '2022-05-03', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, '1000', '2022-05-01', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(13, '1111', '2022-05-08', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(14, '1111', '2022-05-08', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(10) NOT NULL,
  `usrname` text NOT NULL,
  `empno` text NOT NULL,
  `password` text NOT NULL,
  `phoneno` int(15) NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `usrname`, `empno`, `password`, `phoneno`, `department`) VALUES
(18, 'Puteri', 'A100', '7eb80d6dd7e1ed19dad78773a5ada74b', 12345678, 'Bertam'),
(19, 'Intan', 'A101', '1754e0464682affedb515e410a751e70', 12345678, 'Sungai Petani'),
(20, 'Natasha', 'A102', '3ecc525846335155ccaa1e3ee3302d46', 123456789, 'Kulim'),
(23, 'Ifkitchen', 'admin', '21232f297a57a5a743894a0e4a801fc3', 123456789, 'HQ'),
(24, 'Roc', 'roc', '042dd99eb0ff8653814e445ca0093427', 123456789, 'HQ'),
(25, 'Production', 'production', 'fd89784e59c72499525556f80289b2c7', 123456789, 'HQ'),
(30, 'sd', 'sd', '6226f7cbe59e99a90b5cef6f94f966fd', 12345678, 'hq');

-- --------------------------------------------------------

--
-- Table structure for table `roc`
--

CREATE TABLE `roc` (
  `id` int(10) NOT NULL,
  `empno` text NOT NULL,
  `sd` text NOT NULL,
  `branch` text NOT NULL,
  `name` text NOT NULL,
  `notel` text NOT NULL,
  `sverify` date DEFAULT NULL,
  `check` varchar(200) NOT NULL,
  `summary` varchar(50) NOT NULL,
  `bw` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `technical` varchar(50) NOT NULL,
  `worktop` varchar(50) NOT NULL,
  `bq` varchar(50) NOT NULL,
  `a3` varchar(50) NOT NULL,
  `quotation` varchar(50) NOT NULL,
  `checklist` varchar(50) NOT NULL,
  `keyin` varchar(50) NOT NULL,
  `snapshot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roc`
--

INSERT INTO `roc` (`id`, `empno`, `sd`, `branch`, `name`, `notel`, `sverify`, `check`, `summary`, `bw`, `color`, `technical`, `worktop`, `bq`, `a3`, `quotation`, `checklist`, `keyin`, `snapshot`) VALUES
(36, 'A100', 'saiful', 'kulim', 'Puan Aisyah', '0175023881', NULL, '', 'Summary Item', '3D Black/White', '3D Color', 'Technical', 'Worktop', 'BQ', 'A3', 'Quotation', 'Checklist', 'keyin', 'Snapshot'),
(47, '1234', 'Aida', 'Sp', 'Puan Aisyah', '0123456789', '2022-04-06', '', 'Summary Item', '', '3D Color', '', '', '', '', '', '', '', ''),
(48, 'admin', 'saiful', 'Sp', 'Amira', '0123456999', '2022-04-15', '', 'Summary Item', '', '', '', '', '', '', '', 'Checklist', '', ''),
(49, '1111', 'Irfan', 'kulim', 'Athirah', '0175023881', '2022-04-28', '', 'Summary Item', '', '', '', '', '', 'A3', '', '', '', ''),
(51, '1234', 'dayah', 'kulim', 'tasha', '0123456789', '2022-05-01', '', 'Summary Item', '', '', '', '', '', 'A3', '', '', '', ''),
(52, '5678', 'Irfan', 'Ipoh', 'tasha', '0123456000', '2022-05-01', '', 'Summary Item', '', '', '', '', 'BQ', '', '', 'Checklist', '', ''),
(53, '1000', 'saiful', 'Sp', 'Qashaf', '0175023881', '2022-05-16', '', 'Summary Item', '', '', '', '', '', '', 'Quotation', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sd`
--

CREATE TABLE `sd` (
  `idsd` int(10) NOT NULL,
  `empno` text NOT NULL,
  `sd` text NOT NULL,
  `branch` text NOT NULL,
  `name` text NOT NULL,
  `notel` text NOT NULL,
  `email` text NOT NULL,
  `sorder` date NOT NULL,
  `myfile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sd`
--

INSERT INTO `sd` (`idsd`, `empno`, `sd`, `branch`, `name`, `notel`, `email`, `sorder`, `myfile`) VALUES
(1, '1111', 'saiful', 'kulim', 'Qashaf', '0175023881', 'nrlftha240@gmail.com', '2022-05-08', '1653285563591_english.pptx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarcustomer`
--
ALTER TABLE `daftarcustomer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `productiondoor`
--
ALTER TABLE `productiondoor`
  ADD PRIMARY KEY (`idproductiondoor`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`idprogress`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `roc`
--
ALTER TABLE `roc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd`
--
ALTER TABLE `sd`
  ADD PRIMARY KEY (`idsd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarcustomer`
--
ALTER TABLE `daftarcustomer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productiondoor`
--
ALTER TABLE `productiondoor`
  MODIFY `idproductiondoor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `idprogress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roc`
--
ALTER TABLE `roc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sd`
--
ALTER TABLE `sd`
  MODIFY `idsd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
