-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2015 at 04:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(1, 'The title updated Sunday logged in', 'This is the article body updated Sunday logged in', '2015-10-23 14:35:15', '2015-10-26 02:45:31', NULL),
(2, 'A title once again', 'And the article body follows', '2015-10-23 14:34:21', NULL, NULL),
(3, 'Title strikes back again', 'This is really exciting! Not. updated', '2015-10-23 14:34:58', '2015-10-26 02:50:19', NULL),
(4, 'Test the add function', 'Test the body add function updated', '2015-10-23 19:55:55', '2015-10-23 20:17:23', NULL),
(6, 'This is my new article', 'It is full of fascinating content. ', '2015-10-23 20:27:11', '2015-10-23 20:27:11', NULL),
(7, 'Mushroom Article', 'Article about mushrooms updated by PizzaMan', '2015-10-26 02:47:24', '2015-10-26 03:13:22', 1),
(8, 'MushroomMan''s article', 'I am a mushroom, yum!', '2015-10-26 03:14:40', '2015-10-26 03:14:40', 2);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'PizzaMan', '$2y$10$plMUHe/QnY3SYcQxywYHNO.QL8UbqPta2Itd5rDU.bBXxccgRq8Qu', 'admin', NULL, NULL),
(2, 'MushroomMan', '$2y$10$kt2dwrSlyGDR7JzSRXnV0.N8o/HWg9Y/.Gr0LqPYTNKzCsh.uNN2a', 'author', NULL, NULL),
(3, 'CrustMan', '$2y$10$nS4dSfwnJ.hPEe5Na4wcBO1.kYwpyjlUFlSyWYsK8I43BtOflldEq', 'author', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
