-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2013 at 02:11 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jahorina`
--
CREATE DATABASE IF NOT EXISTS `jahorina` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `jahorina`;

-- --------------------------------------------------------

--
-- Table structure for table `newyear`
--

CREATE TABLE IF NOT EXISTS `newyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `price` float NOT NULL,
  `phone` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `mobile` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` date NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newyear`
--

INSERT INTO `newyear` (`id`, `name`, `description`, `price`, `phone`, `mobile`, `email`, `created_at`, `published`) VALUES
(2, 'Hotel "Primjer"', '<p>Do?ekajte novu godinu u preljepom ambijentu uz Alegro bend.</p>\r\n', 120, '057/222-555', '065/222-555', 'hotel@gmail.com', '2013-12-11', 1),
(3, 'Diskoteka', '<p>U cijenu ukljuceno jedno pi?e po izboru. Za dobru zabavu zadužen Amadeus bend.</p>\r\n', 25, '057/222-555', '065/222-555', 'diskoteka@gmail.com', '2013-12-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `content` text CHARACTER SET latin1,
  `social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `social`, `created_at`) VALUES
(1, 'Istorija planine', '<p><strong>Istorija Jahorine</strong></p>\r\n', 'Istorija Jahorine', '2013-12-11'),
(2, 'Turizam', 'Turizam', NULL, '2013-12-03'),
(3, 'Sport i rekreacija', 'Sport i rekreacija', NULL, NULL),
(4, 'Jahorina info', 'Jahorina info', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `content` text CHARACTER SET latin1,
  `publised` tinyint(1) NOT NULL,
  `created_at` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `social` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post_user_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `publised`, `created_at`, `user_id`, `social`) VALUES
(1, 'Prva vijest Izmjenjena', 'Nako neka prva vijest!', 1, '2013-12-11', 2, 'test'),
(2, 'Druga vijest', 'Nako neka druga vijest!', 1, '2013-12-03', 1, ''),
(4, 'test', 'test', 1, NULL, 2, 'test'),
(5, 'test datum', 'test', 0, '2013-12-09', 2, 'test'),
(6, 'do?ek?', '<p>Do?ekajte novu godinu u predivnom ambijentu, uz Tropiko bend.</p>\r\n', 0, '2013-12-12', 2, ''),
(7, 'hotel@gmail.com', '<p>Do?ekajte novu godinu u predivnom ambijentu, uz Tropiko bend.</p>\r\n', 0, '2013-12-11', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `hotel` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `role` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `hotel`, `role`) VALUES
(1, 'Igor Golub', 'Golub', '1bed2e6bba53bf08328ab88464771d2c', NULL, 'admin'),
(2, 'Brane', 'Termag', '1bed2e6bba53bf08328ab88464771d2c', 'Termag', 'Termag'),
(3, 'Brane', 'Lavina', '1bed2e6bba53bf08328ab88464771d2c', 'Lavina', 'Lavina');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
