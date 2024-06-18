-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2024 at 06:40 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kif&kafsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'کیف مردانه'),
(2, 'کفش اسپرت مردانه'),
(3, 'کفش کالج مردانه'),
(4, 'کیف زنانه'),
(5, 'کفش اسپرت زنانه'),
(6, 'بوت زنانه'),
(7, 'صندل زنانه');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED DEFAULT NULL,
  `totalprice` varchar(100) DEFAULT NULL,
  `creat_order_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `totalprice`, `creat_order_time`) VALUES
(1, 2, '8,228,000', '2019-05-08 07:30:00'),
(2, 2, '8,228,000', '2019-05-21 19:30:00'),
(3, 2, '1,495,200', '2019-05-16 15:02:27'),
(4, 2, '31,117,410', '2019-05-10 20:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `creationTime` timestamp NULL DEFAULT NULL,
  `pic` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `title`, `description`, `price`, `discount`, `creationTime`, `pic`) VALUES
(12, 2, 'کفش پیاده روی کینتیکس مدل gibson', 'جنسEVA، ضد آب، تولید ترکیه', 1110000, 10, '2019-05-19 16:12:52', 'upload/piaderavim.jpg'),
(13, 7, 'صندل زنانه مدل نیدا', 'جنس چرم مصنوعی، ارتفاع پاشنه 3 و نیم سانتی متر', 738000, 5, '2019-05-19 16:22:34', 'upload/sandalz.jpg'),
(14, 1, 'کیف پول مردانه زیگزا ', 'جنس چرم مصنوعی ابعاد 12*10*1', 1260000, 8, '2019-05-19 16:23:22', 'upload/kifm.jpg'),
(15, 3, 'کفش کالج مردانه کفش مسعود تبریز مدل 2223', 'جنس اشبالت چرم طبیعی، انعطاف پذیر، مقاوم در برابر سایش', 870000, 0, '2019-05-19 16:25:34', 'upload/kalejm.jpg'),
(16, 6, 'بوت زنانه سیی مدل مارال مشهد', 'جنس جیر، چرم مصنوعی، ارتفاع ساق تا بالای مچ پا', 2100000, 5, '2019-05-19 16:26:12', 'upload/bootz.jpg'),
(17, 2, 'کفش کوهنوردی مردانه لاوان مدل آج', 'جنس جیر، ضد آب، وزن کفش 540 گرم', 2700000, 20, '2019-05-19 16:27:04', 'upload/koohm.jpg'),
(18, 4, 'کیف دوشی زنانه مدل آیرال', 'جنس چرم یلسان، ابعاد 7*21*26', 650000, 0, '2019-05-19 16:27:48', 'upload/kifz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `registerTime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `firstname`, `lastname`, `address`, `registerTime`) VALUES
(2, 'mahsa20vahedi@yahoo.com', '1', 'mahsa', 'vahedi', 'استان فارس، شهرستان فسا', '2019-05-28 22:11:45'),
(4, 'saradarabi68@yahoo.com', '1', 'سارا', 'دارابی', 'خراسان رضوی نیشابور', '2020-05-29 08:55:32'),
(5, 'test@gmail.com', '1', 'fateme', 'test', '', '2024-06-17 08:41:59'),
(6, 'fatemej@gmail.com', 'jafarif4321', 'fateme', 'j', '', '2024-06-18 14:20:20'),
(7, 'ew@gmail.com', '9999', 'rr', 'ee', '', '2024-06-18 14:44:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
