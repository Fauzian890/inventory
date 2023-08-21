-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 05:55 AM
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
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `id_barangkeluar` int(11) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `id_kopi` int(11) NOT NULL,
  `id_konsumen` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `tanggal_barangkeluar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`id_barangkeluar`, `UserID`, `id_kopi`, `id_konsumen`, `qty`, `tanggal_barangkeluar`) VALUES
(16, 1, 14, 4, 12, '2023-08-21 10:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `id_barangmasuk` int(11) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `id_kopi` int(11) NOT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `tanggal_barangmasuk` datetime NOT NULL DEFAULT current_timestamp(),
  `qty` int(11) NOT NULL,
  `status` enum('DIPROSES','DISETUJUI','DITOLAK','') NOT NULL DEFAULT 'DIPROSES'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`id_barangmasuk`, `UserID`, `id_kopi`, `id_supplier`, `tanggal_barangmasuk`, `qty`, `status`) VALUES
(20, 1, 14, 6, '2023-08-21 10:47:34', 12, 'DIPROSES');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(7, 'biji'),
(8, 'bubuk');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(25) NOT NULL,
  `alamat_konsumen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_konsumen`, `alamat_konsumen`) VALUES
(4, 'fauzi', 'jambon'),
(5, 'Maftuh', 'Pare'),
(6, 'Teguh ', 'Bayanan'),
(7, 'Bima', 'Karet');

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id_kopi` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `namakopi` varchar(25) NOT NULL,
  `deskripsi` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id_kopi`, `id_kategori`, `namakopi`, `deskripsi`, `stok`, `harga`) VALUES
(14, 7, 'Luak', ' Biji kopi luak adalah bi', -11, 187500),
(15, 8, 'Robusta', 'Kopi robusta adalah salah', 1, 200000),
(16, 8, 'Arabika', ' Kopi arabika adalah sala', 1, 200000),
(17, 7, 'Gayo', 'Kopi Gayo adalah jenis ko', 1, 175000),
(18, 7, 'Gunung Sumbing', 'Biji kopi asal gunung sum', 1, 200000),
(19, 7, 'Gunung Sindoro', ' Biji kopi yang berasal d', 1, 187500),
(20, 7, 'Sunda Red Wine', 'biji kopi yang berasal da', 1, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(25) NOT NULL,
  `alamat_supplier` varchar(25) NOT NULL,
  `no_hp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp`) VALUES
(6, 'Temanggung Kopi', 'Temanggung', 2147483647),
(7, 'Anton kopi', 'Salam', 2147483647),
(8, 'Huda kopi', 'Mertoyudan', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `UserPassword` varchar(50) NOT NULL,
  `role` enum('admin','pemilik','','') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `UserPassword`, `role`) VALUES
(1, 'admin1', 'admin', 'admin'),
(2, 'admin2', 'admin222', 'admin'),
(3, 'emon', '1234', 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`id_barangkeluar`),
  ADD KEY `id_kopi` (`id_kopi`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `bk_fk4` (`UserID`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`id_barangmasuk`),
  ADD KEY `id_kopi` (`id_kopi`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `bm_fk4` (`UserID`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id_kopi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `id_barangkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `id_barangmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id_kopi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD CONSTRAINT `bk_fk2` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `bk_fk3` FOREIGN KEY (`id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bk_fk4` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD CONSTRAINT `bm_fk2` FOREIGN KEY (`id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bm_fk3` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `bm_fk4` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `kopi`
--
ALTER TABLE `kopi`
  ADD CONSTRAINT `kopi_fk1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
