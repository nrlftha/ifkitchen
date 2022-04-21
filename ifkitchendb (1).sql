-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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

INSERT INTO `productiondoor` (`idproductiondoor`, `empno`, `pintu`, `handle`, `jcolor`, `accessories`, `remark`, `color`, `jhandle`, `carcase`, `papan`, `opintu`) VALUES
(1, 'A100', 'MW 2011B', 'M2H(3G) / G1H3(4G)', 'hdf', '', 'Check Remark', '', '', 'Keluarkan Carcase, Pintu & Panel', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `idprogress` int(10) NOT NULL,
  `empno` text NOT NULL,
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

INSERT INTO `progress` (`idprogress`, `empno`, `sorder`, `sverify`, `door_carcase`, `part_goods`, `payment`, `delivery`, `carcase_installation`, `worktop_installation`, `finishing`, `handover`) VALUES
(1, 'A100', '2022-04-12', '2022-02-16', '2022-04-18', '2022-04-22', '2022-04-23', '2022-04-25', '2022-04-27', '2022-04-28', '2022-03-31', '2022-04-01'),
(2, 'A101', '2022-01-01', '2022-04-04', '2022-04-08', '2022-04-11', '2022-04-14', '2022-04-16', '2022-04-18', '2022-04-21', '2022-04-25', '2022-04-30'),
(3, 'A102', '2022-03-01', '2022-03-04', '2022-03-08', '2022-03-11', '2022-03-13', '2022-03-15', '2022-03-17', '2022-03-20', '2022-03-25', '2022-03-31');

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
(25, 'Production', 'production', 'fd89784e59c72499525556f80289b2c7', 123456789, 'HQ');

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

INSERT INTO `roc` (`id`, `empno`, `sd`, `branch`, `name`, `notel`, `check`, `summary`, `bw`, `color`, `technical`, `worktop`, `bq`, `a3`, `quotation`, `checklist`, `keyin`, `snapshot`) VALUES
(36, 'A100', 'saiful', 'kulim', 'Puan Aisyah', '0175023881', '', 'Summary Item', '3D Black/White', '3D Color', 'Technical', 'Worktop', 'BQ', 'A3', 'Quotation', 'Checklist', 'keyin', 'Snapshot'),
(41, 'A800', 'Irfan', 'Bertam', 'Amira', '0123456789', '', 'Summary Item', '3D Black/White', '', '', 'Worktop', 'BQ', 'A3', 'Quotation', '', '', 'Snapshot'),
(42, 'A110', 'shifaa', 'kulim', 'Puteri', '0175023881', '', '', '3D Black/White', '', '', '', '', '', 'Quotation', '', '', 'Snapshot'),
(44, 'A100', 'saiful', 'kulim', 'nurul fatihah', '0175023881', '', '', '3D Black/White', '', '', 'Worktop', '', '', 'Quotation', '', '', '');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarcustomer`
--
ALTER TABLE `daftarcustomer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productiondoor`
--
ALTER TABLE `productiondoor`
  MODIFY `idproductiondoor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `idprogress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roc`
--
ALTER TABLE `roc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
