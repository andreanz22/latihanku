-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2017 at 03:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gocourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` varchar(8) NOT NULL,
  `id_video` varchar(100) NOT NULL,
  `id_guru` varchar(100) NOT NULL,
  `nama_video` varchar(50) NOT NULL,
  `video_pel` varchar(200) NOT NULL,
  `tumb_video` varchar(200) NOT NULL,
  `kelas_video` varchar(12) NOT NULL,
  `matpel_video` varchar(15) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `id_video`, `id_guru`, `nama_video`, `video_pel`, `tumb_video`, `kelas_video`, `matpel_video`, `tanggal_upload`) VALUES
('2', '1130011912', '113001191', 'Pembelajaran Black Hole', './Video/113001191/15e03438cee419cb01843dd9f7fc4d62.mp4', './Video/113001191/2c386955bbefa359a0d992e49d3e184e67d79273.jpg', '7', 'matematika', '2017-07-01 09:58:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
