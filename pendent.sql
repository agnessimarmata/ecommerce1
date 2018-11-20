-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 02:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendent`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Produksi` varchar(30) NOT NULL,
  `Deskripsi` varchar(200) NOT NULL,
  `Stok` int(20) NOT NULL,
  `Gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID`, `Nama`, `Harga`, `Produksi`, `Deskripsi`, `Stok`, `Gambar`) VALUES
(1, 'Gemstone Crystal', 2500000, 'China', 'Emas putih 1 gram ', 5, '13.jpg'),
(4, 'Crystal Jewellery', 1500000, 'US', 'Kalung Kristal bahan emas 24karat diameter 50', 3, 'bb.jpg'),
(5, '1901 Jewelry Kalung', 261, 'US', 'KL.03.PD.050(Lapis Emas 24K)', 5, 'dd.jpg'),
(6, 'Retro Alloy Geometric Large', 1000000, 'Denmark', 'Emas putih 0.3 gram ', 5, 'jj.jpg'),
(7, 'Fluorescent Color Resin Gems', 850000, 'China', 'Kalung Kristal bahan emas 24karat diameter 50', 10, 'kk.jpg'),
(8, 'Vintage Rhinestone Faux Gemsto', 980000, 'Thailand', 'KL.13.PD.060(Lapis Emas 24K)', 2, 'rr.jpg'),
(9, 'Pearl Backdrop Necklace', 500000, 'Japan', 'Emas Putih 0.1 gram diameter 60 23 karat', 8, 'gg.jpg'),
(10, 'Big White Crystal', 750000, 'IDN', 'Emas Murni 25 Karat 0.1 gram', 4, 'mm.jpg'),
(11, 'White Fashion Gothic Lace Choc', 860000, 'Germany', 'Berlian putih diameter 32 cm ukuran 50cm', 7, 'xx.jpg'),
(12, 'Floral CZ and Wedding Jewelry ', 1200000, 'China', 'Emas Putih 0.1 gram diameter 60 23 karat', 6, 'ff.jpg'),
(13, 'Pretty', 2550000, 'Germany', 'Berlian putih diameter 32 cm ukuran 50cm', 12, 'uu.jpg'),
(14, 'Frosted Swarovski Crystal Flor', 2900000, 'IDN', 'Emas Murni 25 Karat', 3, 'oo.jpg'),
(15, 'Couture Freshwater', 3000000, 'US', 'Berlian putih diameter 32 cm ukuran 50cm', 5, 'nn.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
