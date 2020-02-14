-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 10:24 AM
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
-- Database: `dboo_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `admin_id`) VALUES
('3', '77de68daecd823babbb58edb1c8e14d7106e83bb', '1'),
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
('aris', 'e9783ca8ef9be517e3a3f78c08226de443f99365', 'aris'),
('silverrikova', '41e271fc210bab7d5b3a56cc8691d4bb56603fca', 'silverrikova');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stock_barang` bigint(10) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `jumlah_barang` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `stock_barang`, `tanggal_pembelian`, `total_pembelian`, `jumlah_barang`) VALUES
('1', '5', 5, '1995-12-05', 5, 5),
('2', '2', 2, '1995-12-02', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hutangpiutang`
--

CREATE TABLE `hutangpiutang` (
  `kode_transaksi` varchar(30) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_satuan` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_bayar` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hutangpiutang`
--

INSERT INTO `hutangpiutang` (`kode_transaksi`, `nama_vendor`, `nama_barang`, `harga_satuan`, `jumlah`, `tanggal_transaksi`, `total_bayar`) VALUES
('2', '2', '2', 2, 2, '2011-09-02', 2),
('3', '3', '3', 3, 3, '2011-09-12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `kode_karyawan` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`kode_karyawan`, `username`, `password`, `nama`, `bagian`, `jenis_kelamin`, `alamat`, `no_telepon`) VALUES
('1', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'aa', 'aa', 'laki-laki', 'disini', 8238688),
('2', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '1', 'kasir', 'laki-laki', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `hutangpiutang`
--
ALTER TABLE `hutangpiutang`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
