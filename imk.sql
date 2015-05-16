-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2015 at 11:02 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE IF NOT EXISTS `catatan` (
  `ID_CATAT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `JUMLAH` float(8,2) DEFAULT NULL,
  `FLAG` int(11) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `DETAIL` varchar(200) DEFAULT NULL,
  `KETERANGAN` text,
  PRIMARY KEY (`ID_CATAT`),
  KEY `FK_RELATIONSHIP_1` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`ID_CATAT`, `ID_USER`, `JUMLAH`, `FLAG`, `TANGGAL`, `DETAIL`, `KETERANGAN`) VALUES
(1, 1, 100.00, 0, '2015-05-16', 'llala', 'sdada'),
(2, 1, 100.00, 0, '2015-05-16', 'llala', 'sdada'),
(3, 1, 1000.00, 0, '2015-05-16', 'tes', 'lalala'),
(4, 1, 0.00, 0, '2015-05-16', '0', '0'),
(5, 1, 2323.00, 0, '2015-05-16', 'sdad', 'msms'),
(6, 1, 10000.00, 4, '2015-05-16', 'sad', ''),
(7, 1, 99999.00, 3, '2015-05-16', 'kk', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `PASSWORD`, `USERNAME`, `email`) VALUES
(1, '123', 'ripas', ''),
(22, '0', '0', '0'),
(23, 'sdf', 'admin', 'rif2602@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
