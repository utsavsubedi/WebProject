-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 07:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daraz`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `userid` int(8) NOT NULL,
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(8) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `item_name`, `description`, `price`, `category`, `path`) VALUES
(22, 'Acer aspire 5', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '800', 'laptops', 'img/acer5.jpg'),
(23, 'Dell xps15', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '1500', 'laptops', 'img/dellxps.jpg'),
(24, 'Samsung galaxy100', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '1500', 'mobiles', 'img/galaxy.jpg'),
(25, 'Men&#39;s Hoodie grey xl', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '25', 'clothes', 'img/hoodies.jpg'),
(26, 'Iphone 5000 xe se', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '2500', 'mobiles', 'img/iphone1.jpg'),
(27, 'Joggers grey sports wear', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '2500', 'clothes', 'img/joggers.jpg'),
(28, 'Leneovo Legion p50', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '1100', 'laptops', 'img/legion.jpg'),
(29, 'Acer nitro 5', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '900', 'laptops', 'img/nitro.jpg'),
(30, 'One plus 5', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '400', 'mobiles', 'img/oneplus.jpg'),
(31, 'Oppo f9', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                       ', '350', 'mobiles', 'img/oppo.jpg'),
(33, 'Acer predator Titron', '                                    E-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.\r\n\r\nE-commerce has evolved over the past few years and since itâ€™s easier and more convenient, it is evident that customers are actually switching to the trend of online shopping. Daraz, the Nepali shopping store, brings a whole new concept by showcasing a number of famous brands under one roof. Not only does it fulfill clothing necessities of both men and women but you can also shop for all kinds of appliances like air conditioners, heaters, refrigerators, LED TVs and a lot more. Simply select your favorite brand like Samsung, Apple, HP, Huawei, Dell, Canon, Nikon, etc and get yourself the best electronic items.                                                                                                                           ', '5000', 'laptops', 'img/Acer predetor titron.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ageRange` varchar(25) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `ageRange`, `is_admin`) VALUES
(5, 'bishant', '25d55ad283aa400af464c76d713c07ad', 'bishant@gmail.com', NULL, 1),
(12, 'Janak', '25d55ad283aa400af464c76d713c07ad', 'j@email.com', '18-30', NULL),
(13, '234dsf', '25d55ad283aa400af464c76d713c07ad', 'sdf@gmail.com', '18-30', NULL),
(14, 'SASANK', '25d55ad283aa400af464c76d713c07ad', 'S@GMIAL.COM', '18-30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
