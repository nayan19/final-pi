-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2016 at 03:52 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_by` int(10) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `htm` varchar(25) NOT NULL,
  `cp` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `post_by`, `judul`, `tanggal`, `tempat`, `deskripsi`, `htm`, `cp`, `created_at`, `file`) VALUES
(41, 4, 'Bootcamp Doscom 15', '2015-11-14', 'Bandungan', 'Makrab Organisasi Doscom', '50.000', 'Zakky', '2015-12-28 17:33:06', 'bootcamp.png'),
(44, 9, 'Doscom University', '2016-06-15', 'Lab HW', 'pelatihan open source', '30.000', 'Diky 08512312123', '2015-12-28 17:46:03', 'poster.png'),
(45, 2, 'Hours of Code', '0000-00-00', 'Lab HW', 'hours of code adalah hari dimana mengajak orang yang tidak terbiasa dengan koding untuk mengkoding', 'free', 'Zakky', '2015-12-28 22:54:48', 'HOC.png'),
(46, 1, 'release party', '2012-12-12', 'aula udinus', 'tea linux os', '50.000', 'patricia', '2016-01-02 04:31:05', 'Poster-Release-Party-TeaLinuxOS-7-Doscom-724x1024.png'),
(47, 2, 'POD', '0000-00-00', 'bantir', 'Pembekalan organisasi doscom', '50.000', 'diky', '2016-01-05 11:25:40', '4a50a87cf737c81a4d612e37d8ca3b36.jpeg'),
(48, 10, 'Software Fair', '0000-00-00', 'galery udinus', 'Software Fair', '0', 'budi', '2016-01-06 16:04:33', 'pameran-software-fair-hmti-udinus-2015.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `access_level` int(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `access_level`) VALUES
(1, 'arnaz', 'arnazadiputra@gmail.com', '$2y$10$N4Uy8qOdTPOwhh5BtpgKEuKeAheC1wGHsQFPvTOOzOhyZPbSlqVMi', 0),
(2, 'doscom', 'doscom@mail.com', '$2y$10$Ncz2lMNeV192RAcm.o0.t.xoQ3txJW8Rb04sI1y/dawyt5ehJGU4C', 0),
(4, 'atho', 'athoil@maula.com', '$2y$10$J92yY2.cZ2wlFEfRjTftPOF57iNXhGMx.8sVdFTgxpndY4j4AH2nG', 0),
(9, 'admin', 'admin@mail.com', '$2y$10$rEPSe9ufp.FbzakGdjimTOGBdkAduxynuZiQg8ID/v58coopnLGZy', 1),
(10, 'Budi', 'Budi@mail.com', '$2y$10$SxAN5vTkxJ3aMiLB1LxRle4122FgAUc43.atgaQcYyL7zNVcUXnjO', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
