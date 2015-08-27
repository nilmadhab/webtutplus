-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2015 at 06:43 PM
-- Server version: 5.5.41-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webtut_ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(300) NOT NULL,
  `pname` varchar(200) DEFAULT NULL,
  `pdesc` text,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `pname`, `pdesc`, `price`) VALUES
(1, '55bc56f80afd8samsung-galaxy-grand-neo-plus-gt-i9060zdsins-400x400-imae5fd4afzwxu4w.jpeg', 'Samsung Galaxy Grand Neo Plus(Gold, 8 GB)', 'Key Features of Samsung Galaxy Grand Neo Plus\n5 inch TFT Touchscreen\n1.2 GHz Quad Core Processor\nWi-Fi Enabled\nAndroid v4.4 (KitKat) OS\n2 MP Secondary Camera\nExpandable Storage Capacity of 64 GB\n5 MP Primary Camera\nDual Sim (GSM + UMTS)', 9455),
(4, '55c00e153391arcsh-nb-suspense-l-400x400-imadyqfzyr6zdbgh.jpeg', 'Suspense Men''s Solid Casual Shirt', 'GENERAL DETAILS\r\nPattern	Solid\r\nIdeal For	Men''s\r\nOccasion	Casual', 449),
(5, '55c0137bde6f7samsung-galaxy-s3-neo-gt-i9300i-400x400-imaduzwtgkttvpjm.jpeg', 'Samsung Galaxy S3 Neo(Pebble Blue, 16 GB)', 'Key Features of Samsung Galaxy S3 Neo\r\nExpandable Storage Capacity of 64 GB\r\n8 MP Primary Camera\r\n1.9 MP Secondary Camera\r\n1.2 GHz Quad Core Processor\r\nWi-Fi Enabled\r\nDual Sim (GSM + WCDMA)\r\nAndroid v4.4.4 (KitKat) OS\r\n4.8 inch Super AMOLED Touchscreen', 11150),
(6, '55c025d1ea91120150724_155555.jpg', 'muhiza', 'good for life', 1000),
(7, '55c049a84b7be768494.png', 'abc', 'abc', 122),
(8, '55c066ea40fe8zoom_mg.png', 'Nokia Lumia ', 'Nokia Lumia 1234', 4500),
(9, '55c067b3b0f0bBeautiful-Womens-Eid-Saree-Fashion-2014-21.jpg', 'womens wear', 'sharee', 3000),
(10, '55c06e6ae86c6Desert.jpg', 'abc', 'abc', 2223),
(11, '55c07d4986b7b11830220_726291830833560_1231219697_n (1).jpg', 'uz', 'jhgggfnff ', 3200),
(12, '55c07d57481fapic_bulbon.gif', 'Bulb', '100 watts', 150),
(13, '55c08f8f6b350i3 desktop disaster 001.jpg', 'dfad', 'da', 24),
(14, '55c0b29945d02IMG_45125942004164.jpeg', 'Product', 'Needed one is here', 1000),
(15, '55c0d139b2b11Untitled.png', 'mango', 'mangoaoo', 150),
(16, '55c108bbb0cfcback-bird.png', 'Test2', 'New_pr', 63),
(17, '55c1ec6f6a6a1007_step1.jpg', 'nice', 'this is good', 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
