-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 02:11 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dat_citramart`
--

-- --------------------------------------------------------

--
-- Table structure for table `hutangpiutang`
--

CREATE TABLE `hutangpiutang` (
  `id_transaksi` varchar(30) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_satuan` bigint(15) NOT NULL,
  `jumlah_satuan` bigint(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_bayar` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hutangpiutang`
--

INSERT INTO `hutangpiutang` (`id_transaksi`, `nama_vendor`, `nama_barang`, `harga_satuan`, `jumlah_satuan`, `tgl_transaksi`, `total_bayar`) VALUES
('a', 'a', '', 0, 0, '0000-00-00', 0),
('saya', 'saya', 'saya', 900, 5, '2017-12-04', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `tadmin`
--

CREATE TABLE `tadmin` (
  `no` bigint(10) NOT NULL,
  `admin_id` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tadmin`
--

INSERT INTO `tadmin` (`no`, `admin_id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `thutang`
--

CREATE TABLE `thutang` (
  `id_user` varchar(30) NOT NULL,
  `no` int(10) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `harga_satuan` bigint(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `hutang_awal` bigint(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `kode_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tjurnalkeuangan`
--

CREATE TABLE `tjurnalkeuangan` (
  `__` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tkaryawan`
--

CREATE TABLE `tkaryawan` (
  `no` int(10) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkaryawan`
--

INSERT INTO `tkaryawan` (`no`, `id_user`, `username`, `password`, `nama`, `role`, `tgl_lahir`, `alamat`) VALUES
(1, 'user1', 'user', '12dea96fec20593566ab75692c9949596833adc9', 'user', 'supervisor', '2017-09-29', 'disini');

-- --------------------------------------------------------

--
-- Table structure for table `tpengadaan`
--

CREATE TABLE `tpengadaan` (
  `kode_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpenjualan`
--

CREATE TABLE `tpenjualan` (
  `id_user` varchar(30) NOT NULL,
  `no` int(10) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `harga_jual` bigint(30) NOT NULL,
  `jumlah` bigint(30) NOT NULL,
  `total_bayar` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpiutang`
--

CREATE TABLE `tpiutang` (
  `id_user` varchar(30) NOT NULL,
  `no` int(10) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `harga_satuan` bigint(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `piutang_awal` bigint(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `kode_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trhutang`
--

CREATE TABLE `trhutang` (
  `no` int(10) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` bigint(30) NOT NULL,
  `sisa_bayar` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trpiutang`
--

CREATE TABLE `trpiutang` (
  `no` int(10) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` bigint(30) NOT NULL,
  `sisa_bayar` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trugilaba`
--

CREATE TABLE `trugilaba` (
  `__` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tstockopname`
--

CREATE TABLE `tstockopname` (
  `kode_barang` varchar(30) NOT NULL,
  `stock` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsupplier`
--

CREATE TABLE `tsupplier` (
  `no` int(10) NOT NULL,
  `kode_supplier` varchar(30) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsupplier`
--

INSERT INTO `tsupplier` (`no`, `kode_supplier`, `nama_supplier`) VALUES
(1, 'sup21', 'Tria jaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hutangpiutang`
--
ALTER TABLE `hutangpiutang`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tadmin`
--
ALTER TABLE `tadmin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `thutang`
--
ALTER TABLE `thutang`
  ADD PRIMARY KEY (`kode_transaksi`,`kode_barang`),
  ADD KEY `kode_supplier` (`kode_supplier`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tkaryawan`
--
ALTER TABLE `tkaryawan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tpengadaan`
--
ALTER TABLE `tpengadaan`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tpenjualan`
--
ALTER TABLE `tpenjualan`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `tpenjualan_ibfk_1` (`kode_barang`),
  ADD KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tpiutang`
--
ALTER TABLE `tpiutang`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `kode_supplier` (`kode_supplier`);

--
-- Indexes for table `trhutang`
--
ALTER TABLE `trhutang`
  ADD KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `trpiutang`
--
ALTER TABLE `trpiutang`
  ADD KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `tstockopname`
--
ALTER TABLE `tstockopname`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tsupplier`
--
ALTER TABLE `tsupplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tadmin`
--
ALTER TABLE `tadmin`
  MODIFY `no` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `thutang`
--
ALTER TABLE `thutang`
  ADD CONSTRAINT `thutang_ibfk_1` FOREIGN KEY (`kode_supplier`) REFERENCES `tsupplier` (`kode_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thutang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tkaryawan` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tpengadaan`
--
ALTER TABLE `tpengadaan`
  ADD CONSTRAINT `tpengadaan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tstockopname` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tpenjualan`
--
ALTER TABLE `tpenjualan`
  ADD CONSTRAINT `tpenjualan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tpengadaan` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tpenjualan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tkaryawan` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tpiutang`
--
ALTER TABLE `tpiutang`
  ADD CONSTRAINT `tpiutang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tkaryawan` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tpiutang_ibfk_3` FOREIGN KEY (`kode_supplier`) REFERENCES `tsupplier` (`kode_supplier`) ON DELETE CASCADE,
  ADD CONSTRAINT `tpiutang_ibfk_4` FOREIGN KEY (`kode_transaksi`) REFERENCES `tpenjualan` (`kode_transaksi`);

--
-- Constraints for table `trhutang`
--
ALTER TABLE `trhutang`
  ADD CONSTRAINT `trhutang_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `thutang` (`kode_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trpiutang`
--
ALTER TABLE `trpiutang`
  ADD CONSTRAINT `trpiutang_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `tpiutang` (`kode_transaksi`);

--
-- Constraints for table `tstockopname`
--
ALTER TABLE `tstockopname`
  ADD CONSTRAINT `tstockopname_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `thutang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
