-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 11:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artineer`
--

-- --------------------------------------------------------

--
-- Table structure for table `catogries`
--

CREATE TABLE `catogries` (
  `cat_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `subject`, `message`) VALUES
('', '', '', ''),
('loleta', 'loletaalagamy@yahoo.com', ' h kbknbikbhgvb', 'uhnklnlk'),
('alaa gamal', 'loletags@gmail.com', 'fdvrgvreferwswe', 'rdwfewfdwessd'),
('nada', 'nada', 'dscs', 'rgffreed');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_name` varchar(30) NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(100) NOT NULL,
  `item_id` int(100) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `number_credit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `item_id`, `first_name`, `last_name`, `userName`, `email`, `adress`, `payment`, `number_credit`) VALUES
(1, 0, '', '', '', '', '', '', 0),
(2, 0, 'alaa', 'alaa', ',mhjvkjb ', 'loletags@gmail.com', 'kmnlknk', 'United States', 940859043),
(3, 0, 'jkfsdbkf', 'jkfsdbkf', 'dnskfnklsdnlkdsnl', 'lolo@com', 'd,fnlkdsnlk94w37r5njkdsbjfkbds', 'United States', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(100) NOT NULL,
  `Pname` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Pname`, `image`, `Price`) VALUES
(1, 'Masonite', 'images/paint1.jpg', 170),
(2, 'Canvas', 'images/paint2.jpg', 30),
(3, 'Erasers', 'images/paint3.jpg', 400),
(4, 'Acrylics', 'images/paint4.jpg', 150),
(5, 'Inks', 'images/paint5.jpg', 80),
(6, 'Palettes', 'images/paint6.jpg', 100),
(7, 'Vamishes', 'images/paint7.jpg', 60),
(8, 'Brushes', 'images/paint8.jpg', 120);

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `Id` int(100) NOT NULL,
  `Pname` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`Id`, `Pname`, `image`, `Price`) VALUES
(1, 'Masonite', 'images/pan1.jpg', 170),
(2, 'Canvas', 'images/pan3.jpg', 400),
(3, 'Erasers', 'images/pan4.jpg', 150),
(4, 'Acrylics', 'images/pan5.jpg', 80),
(5, 'Inks', 'images/pan6.jpg', 100),
(6, 'Palettes', 'images/pan7.jpg', 60),
(7, 'Vamishes', 'images/pan8.jpg', 120),
(8, 'Brushes', 'images/paint11.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `phone`, `image`) VALUES
('alaa', 'alaa.com', 'hgiugt986989', 8769980, 'images/alaa.jpg'),
('aya', 'aya.com', '12345', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogries`
--
ALTER TABLE `catogries`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_name`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catogries`
--
ALTER TABLE `catogries`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
