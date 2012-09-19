-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2012 at 09:14 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cctns`
--

-- --------------------------------------------------------

--
-- Table structure for table `cctns_users`
--

CREATE TABLE IF NOT EXISTS `cctns_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cctns_users`
--

INSERT INTO `cctns_users` (`id`, `username`, `password`, `email`, `phone`, `address`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'amit', '$2a$08$m1h/nPo7Z/SGiG8FWXV5ZOdVgPmiADFlB24Ov9pJ.oiSAQStDaMUa', 'amit.svce07@gmail.com', 0, '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2012-09-12 19:11:51', '2012-09-11 21:01:49', '2012-09-12 17:11:51'),
(2, 'ketan', '$2a$08$UOGJ5PSW3CBsYHrmochTc.wT0odqcsnpyj04gRDrxHGPMooOyld46', 'ketan@gmail.com', 0, '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2012-09-19 07:58:48', '2012-09-19 05:58:48'),
(3, 'k10sdafadsf', '$2a$08$pwwI92ZfWa9MhpV0vU2WneuIVcrZrDaaKu8b79F3DRvhh//r4hpWC', 'k12@gmail.com', 0, '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2012-09-19 08:01:38', '2012-09-19 06:01:38'),
(4, 'sdfsd', '$2a$08$3BbZ7CKrzVOcOq8HxtOAKeuLyHvngs.leECsHmoco5.9Bv9McctWW', 'sdf@gmail.com', 0, '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2012-09-19 08:06:01', '2012-09-19 06:06:01'),
(5, 'sdfsdfsadfasdafa', '$2a$08$iDUP3xX5oiAKaADALslPYe93aCfeCuprIF7ncDdfyR56.G72bTUk6', 'sfdsdf@gmail.com', 0, '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2012-09-19 08:15:48', '2012-09-19 06:15:48'),
(6, 'sdfsdfsadfasdafafsdf', '$2a$08$bihC3eLx0IbcmpAB7i7yVOeV2eEQ.0qOO8zYCfsssnEVz60eQxjIO', '', 0, '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2012-09-19 08:19:31', '2012-09-19 06:19:31'),
(7, 'sdfasdafafsdf', '$2a$08$g5o5TwPtsqbdSu5auO23lO0XuoQsaP6rFJne90ktEscYwQBVOA5iu', 'abc@gmail.com', 1223, 0x667361646567626664682066647367, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2012-09-19 09:07:12', '2012-09-19 07:07:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
