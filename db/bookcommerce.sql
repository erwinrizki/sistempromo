-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 12:43 PM
-- Server version: 5.5.33
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookcommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(100) NOT NULL,
  `harga_buku` int(11) NOT NULL,
  `pengarang_buku` varchar(100) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `isbn` varchar(12) NOT NULL,
  `keterangan_buku` varchar(300) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL,
  `halaman_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `harga_buku`, `pengarang_buku`, `id_penerbit`, `tahun_terbit`, `isbn`, `keterangan_buku`, `gambar_buku`, `halaman_buku`, `id_kategori`, `stok`) VALUES
(1, 'Naruto Volume 64', 17500, 'Masashi Kishimoto', 2, 2014, '3727387422', 'komik naruto volume 64', 'Naruto-Manga-Volume-64.jpg', 100, 5, 10),
(2, 'Naruto Volume 65', 17500, 'Masashi Kishimoto', 2, 2014, '97428742742', 'komik', 'Naruto-Manga-Volume-65.jpg', 90, 5, 10),
(3, 'Pengolahan Citra Digital', 25000, 'T. Sutojo', 1, 1998, '38749278528', 'buku pcd udinus', 'kamen_rider_beast_logo_by_nac129-d5n4arb.jpg', 120, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Remaja'),
(2, 'Kesehatan'),
(3, 'Komputer'),
(5, 'Komik'),
(6, 'Anak - Anak');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `id_penerbit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(100) NOT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'Penerbit Andi'),
(2, 'PT Elex Media Komputindo'),
(4, 'Penerbit Merbabu'),
(5, 'Matahari Terbit');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
