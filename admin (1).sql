-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 05:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sub_description` varchar(200) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Id`, `description`, `image`, `sub_description`, `create_at`, `update_at`) VALUES
(1, '<p><strong>dfssdgdfgdfgt</strong></p>\r\n', 'uploads/425548710alpha logo green & blue.png', '<p>vjhj</p>', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`Id`, `Name`, `Password`, `create_at`, `update_at`) VALUES
(1, 'richa', '123', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `name`, `create_at`, `update_at`) VALUES
(2, 'woman wear', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'man wear', '2021-11-17 07:24:59.173905', '2021-11-17 07:24:59.173905');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `contactno` int(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `contactno`, `email`, `address`, `create_at`, `update_at`) VALUES
(1, 1111111111, 'def@gmail.com', '111 N 30th St, Colorado Springs, CO 80904, United States', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `Id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`Id`, `image`, `create_at`, `update_at`) VALUES
(1, 'uploads/37550alpha logo gradient 01.png', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `Id` int(11) NOT NULL,
  `map` longtext NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`Id`, `map`, `create_at`, `update_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.611275817868!2d72.83707001440966!3d21.16786268839209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f96bec50b61%3A0x5aca49254d9bb0a1!2sSwaminarayan%20Mandir%20Udhna%20-%20Vadtal!5e0!3m2!1sen!2sin!4v1637566821069!5m2!1sen!2sin\" >', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `name`, `description`, `image`, `price`, `category`, `create_at`, `update_at`) VALUES
(3, 'Kurti', '<p>Yellow&nbsp;</p>', 'uploads/95013product-9.jpg', '$20', '2', '2021-11-18 07:13:44.356156', '2021-11-18 07:13:44.356156'),
(4, 'Jacket', '<p>white</p>', 'uploads/93350product-1 (1).jpg', '$50', '2', '2021-11-18 07:33:18.639988', '2021-11-18 07:33:18.639988'),
(5, 'T-shirt', '<p>Black</p>', 'uploads/95016product-2.jpg', '$60', '2', '2021-11-18 07:33:52.503495', '2021-11-18 07:33:52.503495'),
(7, 'Formal', '<p>Formal Outfit for men</p>', 'uploads/49124download.jpg', '$100', '3', '2021-11-22 09:18:28.424773', '2021-11-22 09:18:28.424773'),
(8, 'Jacket', '<p>Fashion brand faux jacket</p>', 'uploads/77752download (1).jpg', '$40', '3', '2021-11-22 09:18:51.392417', '2021-11-22 09:18:51.392417'),
(9, 'wedding', '<p>Letest Wedding Outfit&nbsp;</p>', 'uploads/96579images.jpg', '$70', '3', '2021-11-23 05:56:58.875796', '2021-11-23 05:56:58.875796'),
(10, 'sssssssssss', '<p>sssssssssssss</p>', 'uploads/66270Jellyfish.jpg', '$10', '3', '2021-11-25 05:25:01.231778', '2021-11-25 05:25:01.231778');

-- --------------------------------------------------------

--
-- Table structure for table `query_table`
--

CREATE TABLE `query_table` (
  `Id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query_table`
--

INSERT INTO `query_table` (`Id`, `name`, `email`, `subject`, `message`, `create_at`, `update_at`) VALUES
(1, 'richa', 'richa@gmail.com', '11111111111', 'nothing', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'richaaaaaaaaaaaa', 'richa@gmail.com', 'ggggggggggg', 'gfffffffffffffffff', '2021-11-24 08:44:32.091752', '2021-11-24 08:44:32.091752');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Id`, `description`, `name`, `image`, `create_at`, `update_at`) VALUES
(3, '<p>Designer cloths</p>', '<p>For all</p>', 'uploads/5897images.jpg', '2021-11-17 05:14:09.540099', '2021-11-17 05:14:09.540099'),
(4, '<p>Designer cloths&nbsp;</p>', '<p>For all</p>', 'uploads/55572product-2.jpg', '2021-11-17 05:20:54.034414', '2021-11-17 05:20:54.034414'),
(5, '<p>Designer Cloths</p>', '<p>For all variete</', 'uploads/37333download (1).jpg', '2021-11-22 05:00:36.285451', '2021-11-22 05:00:36.285451'),
(6, '<p>Designer cloths</p>', '<p>For all variete</', 'uploads/62005product-9.jpg', '2021-11-22 05:22:11.463769', '2021-11-22 05:22:11.463769');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `Id` int(11) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `update_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`Id`, `instagram`, `facebook`, `twitter`, `create_at`, `update_at`) VALUES
(1, 'https://www.instagram.com/accounts/login/', 'https://www.facebook.com/add.a.link/', 'https://twitter.com/link?lang=en', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `query_table`
--
ALTER TABLE `query_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `query_table`
--
ALTER TABLE `query_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
