-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2015 at 06:54 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pizzashop`
--
CREATE DATABASE IF NOT EXISTS `pizzashop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pizzashop`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderNumber` int(11) NOT NULL AUTO_INCREMENT,
  `Crust` varchar(11) NOT NULL,
  `isOwnedBy` int(10) NOT NULL,
  `Pepperoni` tinyint(1) NOT NULL,
  `Mushrooms` tinyint(1) NOT NULL,
  `Sausage` tinyint(1) NOT NULL,
  `Bacon` tinyint(1) NOT NULL,
  `Tomatoes` tinyint(1) NOT NULL,
  `Garlic` tinyint(1) NOT NULL,
  `Onions` tinyint(1) NOT NULL,
  `Spinach` tinyint(1) NOT NULL,
  `Ham` tinyint(1) NOT NULL,
  `Broccoli` tinyint(1) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `Completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`OrderNumber`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderNumber`, `Crust`, `isOwnedBy`, `Pepperoni`, `Mushrooms`, `Sausage`, `Bacon`, `Tomatoes`, `Garlic`, `Onions`, `Spinach`, `Ham`, `Broccoli`, `Size`, `id`, `Completed`) VALUES
(1, '1', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0),
(2, '1', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0),
(3, '3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0),
(4, '4', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1', 1, 0),
(5, '3', 2, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(9, '2', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(10, '2', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2', 1, 0),
(12, '2', 2, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '2', 1, 0),
(13, '3', 2, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(17, '0', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(18, '1', 2, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(19, '0', 2, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(20, '1', 2, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(21, '1', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(22, '3', 2, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, '3', 1, 0),
(23, '1', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(24, '1', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(25, '0', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(26, '1', 2, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(27, '1', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(28, '1', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(29, '1', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(30, '0', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(31, '1', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(32, '0', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(33, '1', 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2', 1, 0),
(34, '0', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(35, '0', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(36, '0', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(37, '1', 2, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, '2', 1, 0),
(38, '2', 2, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, '2', 1, 0),
(39, '2', 2, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, '2', 1, 0),
(40, '2', 2, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, '2', 1, 0),
(41, '2', 2, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, '2', 1, 0),
(42, '1', 2, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, '1', 1, 0),
(43, '1', 2, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, '1', 1, 0),
(44, '1', 2, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, '1', 1, 0),
(45, '1', 2, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, '1', 1, 1),
(46, '1', 2, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, '1', 1, 0),
(47, '2', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(48, '2', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(49, '2', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(50, '2', 2, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(51, '2', 2, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(52, '2', 2, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(53, '2', 2, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(54, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(55, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(56, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(57, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(58, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(59, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(60, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(61, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(62, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(63, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(64, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(65, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(66, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(67, '1', 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(68, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(69, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(70, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(71, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(72, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(73, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(74, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(75, '1', 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, '1', 1, 0),
(76, '1', 2, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(77, '3', 2, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, '3', 1, 0),
(78, '1', 2, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(79, '1', 2, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(80, '0', 2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '2', 1, 0),
(81, '0', 2, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2', 1, 0),
(82, '1', 2, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, '0', 1, 0),
(83, '1', 2, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(84, '1', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(85, '1', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(86, '1', 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(87, '1', 2, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, '3', 1, 0),
(88, '0', 2, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, '0', 1, 0),
(89, '0', 2, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, '0', 1, 0),
(90, '0', 2, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, '0', 1, 0),
(91, '0', 2, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, '0', 1, 0),
(92, '0', 2, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, '0', 1, 0),
(93, '0', 2, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, '0', 1, 0),
(94, '2', 2, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(95, '2', 2, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, '0', 1, 0),
(96, '2', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', 1, 0),
(97, '2', 2, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '0', 1, 1),
(98, '2', 2, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '1', 1, 0),
(99, '0', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(100, '1', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '3', 1, 0),
(101, '0', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0),
(102, '0', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(103, '1', 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(104, '0', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(105, '2', 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 1),
(106, '1', 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '1', 1, 0),
(107, '1', 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(108, '1', 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, '1', 1, 0),
(109, '1', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, '0', 1, 0),
(110, '1', 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, '0', 1, 1),
(111, '2', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, '2', 1, 0),
(112, '1', 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '1', 1, 1),
(114, '3', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '3', 10, 0),
(115, '0', 10, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '3', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `postalCode` varchar(7) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `province` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `FirstName`, `LastName`, `postalCode`, `telephone`, `email`, `Street`, `province`) VALUES
(1, 'PizzaMan', '$2y$10$plMUHe/QnY3SYcQxywYHNO.QL8UbqPta2Itd5rDU.bBXxccgRq8Qu', 'admin', NULL, NULL, 'John', '', '', '', '', '', 0),
(2, 'MushroomMan', '$2y$10$kt2dwrSlyGDR7JzSRXnV0.N8o/HWg9Y/.Gr0LqPYTNKzCsh.uNN2a', 'author', NULL, NULL, '', '', '', '', '', '', 0),
(3, 'CrustMan', '$2y$10$nS4dSfwnJ.hPEe5Na4wcBO1.kYwpyjlUFlSyWYsK8I43BtOflldEq', 'author', NULL, NULL, '', '', '', '', '', '', 0),
(4, 'TestUser', '$2y$10$p0ATO2yj4lYzGNA6np9nFe3ai44h62cbB.EX.ieRUE90eaZ5D9Wh2', 'admin', NULL, NULL, 'Joe', '', '', '', '', '', 0),
(5, 'IAmTheWalrus', '$2y$10$HwIG7c1cYlEBM3uOiZv4R.mSBavld8Jf0jUdR70TLkTOx2Cwup/tK', 'admin', NULL, NULL, 'Liz', 'Shaw', 'N2M3S2', '519-123-4567', '', '', 0),
(6, 'Caroline', '$2y$10$Fgr39nDt5vhLudYvpe3ppOct9VucQ91tDfVtQApzPnaYL/IZ9Dai6', 'admin', NULL, NULL, 'Caroline', 'John', 'N2M3S2', '123-456-7890', 'caroline.john@bbc.com', '', 0),
(7, 'David', '$2y$10$mBtuRoNfgeR4GctxelPOLeu0mnxIyexlC0vn6U/Gv./CB0n8A5NMu', 'admin', NULL, NULL, 'David', 'Tennant', 'N2M5G0', '123-456-7890', 'david@bbc.om', '1234 BBC street', 0),
(8, 'Richard', '$2y$10$qAduuF4RrXAa7192F./b1u508TXwTzJ6LJX7D6d.g5FCKrlRai6Qq', 'admin', NULL, NULL, 'Richard', 'Matheson', 'N2M3S2', '123-456-7890', 'Iamlegend@matheson.com', '1234 IAmLegend Street', 1),
(9, 'Stephen', '$2y$10$nKXB45VYlMrrHirn4IkBkeAhCX1KsWUICpXlDHMYtw3urnv06tv9K', 'admin', NULL, NULL, 'Stephen', 'King', 'N2M5G7', '667-404-7877', 'stephen.king@TheShining.com', '1234 Salem''s Lot', 1),
(10, 'Ira', '$2y$10$hJ1jZgYwMGSvTbNvVEj1GegMxwYv6UWICnon98mdRltvU0exEp09y', 'admin', NULL, NULL, 'Ira', 'Levin', 'U841H9', '321-987-5768', 'Ira.Levin@BoysFromBrazil.com', '1234 Bramford Avenue', 3),
(11, 'Goofy', '$2y$10$QYCGG3xaKffl0DPBm2r.BeQIy5jl2sO0o8N5WkLIXLR63R6ZFIp7S', 'admin', NULL, NULL, 'Goofy', 'Goggles', 'adfd', '321-0987-098', 'here@there.com', '1234 Disney Street', 1),
(12, 'fff', '$2y$10$uGOL.Hok6CN2E3T35mx6bepk3gpZyMFGyWdtSk21Kwqq5Ec9IuKeu', 'admin', NULL, NULL, '', '', 'sfgsfdg', '', '', '', 0),
(13, 'fgf', '$2y$10$Ej9fw99mxHk.GJz6cxFpY.5rKcYPhiZODswVUXpBtAejCX8oEsUq6', 'admin', NULL, NULL, 'fdgsf', 'sdfgsdfg', 'n2m3s2', 'fdg', 'sfg@here.com', 'sdfgf', 2),
(14, 'dfgsf', '$2y$10$qp88/8A9rNNo2Uc0rEDp0.C9fD1goAZ1kiWNxT1vEEqtyzeOEvGva', 'admin', NULL, NULL, 'sfdgsf', 'sfgs', 'n2m3s2', '', '', 'sfdgsfd', 0),
(15, 'fhjfhj', '$2y$10$0xFfim1X2F78/K4gTxbeDORfWedrI60K5dRUw.Fe3O27V2HmZ/jKC', 'admin', NULL, NULL, 'fhgj', 'fghjfjh', 'n2M5G7', '123-567-7890', '', 'fghjfh', 1),
(16, 'dghd', '$2y$10$nqukS1Hsn8D5paF4IP52B.JvgKcnSYCpiYx6Ww/Ojk1O20oYzCtw2', 'admin', NULL, NULL, 'dgh', 'dgh', 'n2m3s2', '123-456-7890', 'IAmhere@there.com', 'dgh', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
