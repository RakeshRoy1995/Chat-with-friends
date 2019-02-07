-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2018 at 04:17 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`uid`, `msg`, `name`, `date`) VALUES
(1, '	hy					\r\n					hy', 'Rakesh Roy', '2017-12-24 20:03:24'),
(2, '', 'Rakesh Roy', '2017-12-24 20:05:46'),
(3, 'i love to make my first social media today\r\n				\r\n					', 'Rakesh Roy', '2017-12-24 20:06:32'),
(4, '	i love u\r\n					\r\n					', 'Rakesh Roy', '2017-12-24 20:34:18'),
(11, '		HY Rakesh . I m Scientist Johir .\r\n                Whtzup Brah\r\n					', 'Johir', '2017-12-25 19:39:20'),
(12, '	Hy Scientist Johir . \r\nThis is my new Site Chat website that i created .					\r\n					', 'Rakesh Roy', '2017-12-25 19:41:34'),
(13, '	Cool Site. Thnx					\r\n					', 'Johir', '2017-12-25 19:43:08'),
(14, '						\r\n		HY EveryOne			', 'Rakesh Roy', '2018-01-25 15:38:51'),
(16, '						\r\n		HY EveryOne			', 'Rakesh Roy', '2018-01-25 15:42:50'),
(18, '						\r\n		hy			', 'Rakesh Roy', '2018-01-25 15:44:53'),
(21, '		HY Rakesh				\r\n					', 'Johir', '2018-01-25 15:55:30'),
(23, '						\r\n			hy		', 'Johir', '2018-01-25 16:04:31'),
(24, '		HY RAKESH				\r\n					', '', '2018-01-25 16:15:48'),
(25, '						\r\n	HY Johir\r\n				', 'Johir', '2018-01-25 16:30:02'),
(26, '						\r\n	HY Johir				', 'Rakesh Roy', '2018-01-25 16:37:47'),
(27, '						\r\n	I love Dhaka			', 'Rakesh Roy', '2018-01-25 16:39:58'),
(28, '', 'Rakesh Roy', '2018-01-25 16:46:53'),
(29, '	Do u know me ?					\r\n					', 'Rakesh Roy', '2018-01-25 16:49:30'),
(30, '						\r\n	yup				', 'Rakesh Roy', '2018-01-25 16:50:25'),
(31, '						\r\n	My NEw code running				', 'Rakesh Roy', '2018-01-25 16:51:15'),
(32, '						\r\n	some problem is here				', 'Rakesh Roy', '2018-01-25 16:52:40'),
(33, '						\r\n		hope to solve soon			', 'Rakesh Roy', '2018-01-25 16:53:05'),
(34, '', 'Rakesh Roy', '2018-01-25 16:53:20'),
(35, '						\r\n		early			', 'Rakesh Roy', '2018-01-25 16:54:27'),
(36, '						\r\nsoonmly\r\n					', 'Rakesh Roy', '2018-01-25 16:54:43'),
(37, '						\r\n	happyly				', 'Rakesh Roy', '2018-01-25 16:54:57'),
(38, '						\r\n	HY				', 'Rakesh Roy', '2018-01-25 16:56:32'),
(39, '						\r\n		hy johir			', 'Johir', '2018-01-26 11:30:26'),
(40, '						\r\n	hy				', 'Johir', '2018-01-26 11:30:59'),
(41, '						\r\n		hy			', 'Rakesh Roy', '2018-01-26 16:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`uid`, `username`, `email`, `password`) VALUES
(1, 'Rakesh Roy', 'dhakatop6@gmail.com', '12345'),
(2, 'Johir', 'dhakatop@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
