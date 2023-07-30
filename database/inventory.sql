-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Generation Time: Jul 29, 2023 at 01:34 PM

-- Server version: 10.4.28-MariaDB

-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `inventory`

--

-- --------------------------------------------------------

--

-- Table structure for table `barangkeluar`

--

CREATE TABLE
    `barangkeluar` (
        `id_barangkeluar` int(11) NOT NULL,
        `id_kopi` int(11) NOT NULL,
        `id_konsumen` int(11),
        `qty` int(11) NOT NULL,
        `tanggal_barangkeluar` datetime NOT NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `barangkeluar`

--

INSERT INTO
    `barangkeluar` (
        `id_barangkeluar`,
        `id_kopi`,
        `id_konsumen`,
        `qty`,
        `tanggal_barangkeluar`
    )
VALUES (
        15,
        11,
        2,
        20,
        '2023-07-29 18:19:34'
    );

-- --------------------------------------------------------

--

-- Table structure for table `barangmasuk`

--

CREATE TABLE
    `barangmasuk` (
        `id_barangmasuk` int(11) NOT NULL,
        `id_kopi` int(11) NOT NULL,
        `id_supplier` int(11),
        `tanggal_barangmasuk` datetime NOT NULL DEFAULT current_timestamp(),
        `qty` int(11) NOT NULL,
        `status` enum(
            'DIPROSES',
            'DISETUJUI',
            'DITOLAK',
            ''
        ) NOT NULL DEFAULT 'DIPROSES'
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `barangmasuk`

--

INSERT INTO
    `barangmasuk` (
        `id_barangmasuk`,
        `id_kopi`,
        `id_supplier`,
        `tanggal_barangmasuk`,
        `qty`,
        `status`
    )
VALUES (
        4,
        11,
        2,
        '2023-07-29 00:00:00',
        23,
        'DISETUJUI'
    ), (
        5,
        11,
        2,
        '2023-07-29 16:04:56',
        123,
        'DISETUJUI'
    ), (
        6,
        11,
        2,
        '2023-07-29 16:08:25',
        12,
        'DISETUJUI'
    );

-- --------------------------------------------------------

--

-- Table structure for table `clientorder`

--

CREATE TABLE
    `clientorder` (
        `OrderID` int(10) NOT NULL,
        `clientorderId` int(11) NOT NULL,
        `ClientOrderNo` int(10) NOT NULL,
        `ClientName` varchar(20) NOT NULL,
        `OrderItem` int(11) NOT NULL,
        `ItemQty` int(10) NOT NULL,
        `ItemPrice` float NOT NULL,
        `orderStatus` varchar(10) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `clients`

--

CREATE TABLE
    `clients` (
        `ClientId` int(10) NOT NULL,
        `ClientName` varchar(50) NOT NULL,
        `ClientAddress` varchar(50) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `kategori`

--

CREATE TABLE
    `kategori` (
        `id_kategori` int(11) NOT NULL,
        `nama_kategori` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `kategori`

--

INSERT INTO
    `kategori` (
        `id_kategori`,
        `nama_kategori`
    )
VALUES (4, 'Faa'), (5, 'Huhu'), (6, 'Haha');

-- --------------------------------------------------------

--

-- Table structure for table `konsumen`

--

CREATE TABLE
    `konsumen` (
        `id_konsumen` int(11) NOT NULL,
        `nama_konsumen` varchar(25) NOT NULL,
        `alamat_konsumen` varchar(25) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `konsumen`

--

INSERT INTO
    `konsumen` (
        `id_konsumen`,
        `nama_konsumen`,
        `alamat_konsumen`
    )
VALUES (2, 'Konsumen 1', 'Gaadasd');

-- --------------------------------------------------------

--

-- Table structure for table `kopi`

--

CREATE TABLE
    `kopi` (
        `id_kopi` int(11) NOT NULL,
        `id_kategori` int(11),
        `namakopi` varchar(25) NOT NULL,
        `deskripsi` varchar(25) NOT NULL,
        `stok` int(11) NOT NULL,
        `harga` bigint(100) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `kopi`

--

INSERT INTO
    `kopi` (
        `id_kopi`,
        `id_kategori`,
        `namakopi`,
        `deskripsi`,
        `stok`,
        `harga`
    )
VALUES (11, 4, 'Kopi', 'asdsa', 2, 75000);

-- --------------------------------------------------------

--

-- Table structure for table `products`

--

CREATE TABLE
    `products` (
        `ProdId` int(10) NOT NULL,
        `id_kategori` int(11) NOT NULL,
        `Namakopi` varchar(25) NOT NULL,
        `ProdDescription` varchar(50) NOT NULL,
        `ProdQuantity` int(10) NOT NULL,
        `ProdUnit` varchar(50) NOT NULL,
        `ProdUnitPrice` double NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `products`

--

INSERT INTO
    `products` (
        `ProdId`,
        `id_kategori`,
        `Namakopi`,
        `ProdDescription`,
        `ProdQuantity`,
        `ProdUnit`,
        `ProdUnitPrice`
    )
VALUES (3, 0, '', 'qww', 1, '2', 12), (4, 0, '', 'asd', 2, '32', 13), (5, 0, '', 'sad', 2, '4', 12), (
        6,
        0,
        '',
        'kopi asu',
        10,
        '90',
        100
    ), (
        7,
        0,
        '',
        'kopi asu',
        78,
        '8',
        30000
    );

-- --------------------------------------------------------

--

-- Table structure for table `purchaseorder`

--

CREATE TABLE
    `purchaseorder` (
        `PoID` int(10) NOT NULL,
        `PurchaseorderId` int(20) NOT NULL,
        `PurchaseorderNo` int(20) NOT NULL,
        `SupplierName` varchar(50) NOT NULL,
        `Orders` int(50) NOT NULL,
        `OrderQty` int(10) NOT NULL,
        `OrderPrice` float NOT NULL,
        `OrderStatus` varchar(20) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `supplier`

--

CREATE TABLE
    `supplier` (
        `id_supplier` int(11) NOT NULL,
        `nama_supplier` varchar(25) NOT NULL,
        `alamat_supplier` varchar(25) NOT NULL,
        `no_hp` int(12) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `supplier`

--

INSERT INTO
    `supplier` (
        `id_supplier`,
        `nama_supplier`,
        `alamat_supplier`,
        `no_hp`
    )
VALUES (2, 'Haha', 'Aewas', 182312);

-- --------------------------------------------------------

--

-- Table structure for table `suppliers`

--

CREATE TABLE
    `suppliers` (
        `SupId` int(11) NOT NULL,
        `SupName` varchar(50) NOT NULL,
        `SupAddress` varchar(50) NOT NULL,
        `nohp` int(13) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `suppliers`

--

INSERT INTO
    `suppliers` (
        `SupId`,
        `SupName`,
        `SupAddress`,
        `nohp`
    )
VALUES (2, 'sdasd', 'sadasd', 324234);

-- --------------------------------------------------------

--

-- Table structure for table `users`

--

CREATE TABLE
    `users` (
        `UserID` int(10) NOT NULL,
        `UserName` varchar(50) NOT NULL,
        `UserPassword` varchar(50) NOT NULL,
        `role` enum('admin', 'pemilik', '', '') NOT NULL DEFAULT 'admin'
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `users`

--

INSERT INTO
    `users` (
        `UserID`,
        `UserName`,
        `UserPassword`,
        `role`
    )
VALUES (1, 'admin', 'admin', 'admin'), (
        2,
        'admin2',
        'admin222',
        'admin'
    ), (3, 'emon', '1234', 'pemilik');

--

-- Indexes for dumped tables

--

--

-- Indexes for table `barangkeluar`

--

ALTER TABLE `barangkeluar`
ADD
    PRIMARY KEY (`id_barangkeluar`),
ADD KEY `id_kopi` (`id_kopi`),
ADD
    KEY `id_konsumen` (`id_konsumen`);

--

-- Indexes for table `barangmasuk`

--

ALTER TABLE `barangmasuk`
ADD
    PRIMARY KEY (`id_barangmasuk`),
ADD KEY `id_kopi` (`id_kopi`),
ADD
    KEY `id_supplier` (`id_supplier`);

--

-- Indexes for table `clientorder`

--

ALTER TABLE `clientorder` ADD PRIMARY KEY (`OrderID`);

--

-- Indexes for table `clients`

--

ALTER TABLE `clients` ADD PRIMARY KEY (`ClientId`);

--

-- Indexes for table `kategori`

--

ALTER TABLE `kategori` ADD PRIMARY KEY (`id_kategori`);

--

-- Indexes for table `konsumen`

--

ALTER TABLE `konsumen` ADD PRIMARY KEY (`id_konsumen`);

--

-- Indexes for table `kopi`

--

ALTER TABLE `kopi`
ADD PRIMARY KEY (`id_kopi`),
ADD
    KEY `id_kategori` (`id_kategori`);

--

-- Indexes for table `products`

--

ALTER TABLE `products`
ADD PRIMARY KEY (`ProdId`),
ADD
    KEY `id_kategori` (`id_kategori`);

--

-- Indexes for table `purchaseorder`

--

ALTER TABLE `purchaseorder` ADD PRIMARY KEY (`PoID`);

--

-- Indexes for table `supplier`

--

ALTER TABLE `supplier` ADD PRIMARY KEY (`id_supplier`);

--

-- Indexes for table `suppliers`

--

ALTER TABLE `suppliers` ADD PRIMARY KEY (`SupId`);

--

-- Indexes for table `users`

--

ALTER TABLE `users` ADD PRIMARY KEY (`UserID`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `barangkeluar`

--

ALTER TABLE
    `barangkeluar` MODIFY `id_barangkeluar` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 16;

--

-- AUTO_INCREMENT for table `barangmasuk`

--

ALTER TABLE
    `barangmasuk` MODIFY `id_barangmasuk` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

--

-- AUTO_INCREMENT for table `clientorder`

--

ALTER TABLE
    `clientorder` MODIFY `OrderID` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 9708;

--

-- AUTO_INCREMENT for table `clients`

--

ALTER TABLE
    `clients` MODIFY `ClientId` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--

-- AUTO_INCREMENT for table `kategori`

--

ALTER TABLE
    `kategori` MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

--

-- AUTO_INCREMENT for table `konsumen`

--

ALTER TABLE
    `konsumen` MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--

-- AUTO_INCREMENT for table `kopi`

--

ALTER TABLE
    `kopi` MODIFY `id_kopi` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 12;

--

-- AUTO_INCREMENT for table `products`

--

ALTER TABLE
    `products` MODIFY `ProdId` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 9;

--

-- AUTO_INCREMENT for table `purchaseorder`

--

ALTER TABLE
    `purchaseorder` MODIFY `PoID` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 40;

--

-- AUTO_INCREMENT for table `supplier`

--

ALTER TABLE
    `supplier` MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--

-- AUTO_INCREMENT for table `suppliers`

--

ALTER TABLE
    `suppliers` MODIFY `SupId` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--

-- AUTO_INCREMENT for table `users`

--

ALTER TABLE
    `users` MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

--

-- Constraints for dumped tables

--

--

-- Constraints for table `barangkeluar`

--

ALTER TABLE `barangkeluar`
ADD
    CONSTRAINT `bk_fk2` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`) ON DELETE
SET NULL ON UPDATE CASCADE;

ALTER TABLE `barangkeluar`
ADD
    CONSTRAINT `bk_fk3` FOREIGN KEY (`id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE CASCADE ON UPDATE CASCADE;

--

-- Constraints for table `barangmasuk`

--

ALTER TABLE `barangmasuk`
ADD
    CONSTRAINT `bm_fk2` FOREIGN KEY (`id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `barangmasuk`
ADD
    CONSTRAINT `bm_fk3` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE
SET NULL ON UPDATE CASCADE;

--

-- Constraints for table `kopi`

--

ALTER TABLE `kopi`
ADD
    CONSTRAINT `kopi_fk1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE
SET NULL ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;