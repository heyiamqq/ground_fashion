-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2020 at 11:08 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f37ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Shirt'),
(2, 'Pants'),
(3, 'Jacket');

-- --------------------------------------------------------

--
-- Table structure for table `itemprice`
--

CREATE TABLE IF NOT EXISTS `itemprice` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Item` char(50) NOT NULL,
  `Price` float(6,2) NOT NULL,
  `TypeOfShot` int(10) unsigned DEFAULT NULL,
  `SaleAmount` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `itemprice`
--

INSERT INTO `itemprice` (`ID`, `Item`, `Price`, `TypeOfShot`, `SaleAmount`) VALUES
(1, 'JustJava', 5.00, 1, 25),
(2, 'AuLaitSingle', 6.00, 1, 43),
(3, 'AuLaitDouble', 3.00, 2, 62),
(4, 'IceCapSingle', 5.00, 1, 12),
(5, 'IceCapDouble', 6.00, 2, 52);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dish_name` varchar(50) NOT NULL,
  `price` double(5,2) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `dish_description` varchar(255) DEFAULT NULL,
  `available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `dish_name`, `price`, `cat_id`, `dish_description`, `available`) VALUES
(1, 'One Shoulder Top', 29.00, 1, '', 1),
(2, 'Floral Printed Shirt', 32.00, 1, '', 1),
(3, 'Manhattan Graphic Tee\n', 25.00, 1, '', 1),
(4, 'Summer Printed Pants', 26.00, 2, '', 1),
(5, 'Basic Skinny Jeans', 30.00, 2, '', 1),
(6, 'Workout Sport Leggings', 43.00, 2, '', 1),
(7, 'Biker Leather Jacket', 61.00, 3, '', 1),
(8, 'Autumn Star Bomber ', 55.00, 3, '', 1),
(9, 'Street Style Denim', 70.00, 3, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `order_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `amount`, `order_date`, `status`) VALUES
(1, 1, 107.00, '2020-10-28', 0),
(2, 3, 32.00, '2020-10-29', 0),
(3, 3, 30000.00, '2020-10-29', 0),
(4, 3, 60.00, '2020-10-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE IF NOT EXISTS `orderitem` (
  `orderid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`orderid`, `itemid`, `quantity`) VALUES
(1, 1, 1),
(1, 4, 2),
(1, 6, 3),
(2, 2, 1),
(3, 5, 1000),
(4, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` int(8) NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT '0',
  `h_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fullname`, `contact`, `user_role`, `h_password`) VALUES
(1, 'testemail@yahoo.com', 'Testing Name', 12345678, 0, '$2y$10$1/HMBSOQrnmX3wWneW5mi.vCj3V/o.JvweOR8kzseqwXvE57C2i1y'),
(2, 'test@test.com', 'Testing Name two', 42345678, 1, '$2y$10$UMDKymZcMKqj7cEvCqNEGuUh0C.3e4Nji6sYOQpf1uKjGHKaPfm9i'),
(3, 'itsqq.business@gmail.com', 'Quan Quach', 12345566, 0, '$2y$10$sInaF8hdeLlEFhNgUsGnQeQ24C9h.8J8bbigV8uhV.9zGuCec8ufm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
