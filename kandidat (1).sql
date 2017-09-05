-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2017 at 05:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE IF NOT EXISTS `kandidat` (
  `id` int(5) NOT NULL,
  `suara` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `suara`, `nama`, `nrp`, `foto`) VALUES
(1, 0, 'Timoti Setiadi', '31115004', 'foto/cimot.jpg'),
(2, 0, 'Robby Michael G', '61515016', 'foto/hu.jpg'),
(3, 0, 'Golput', '31115000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
