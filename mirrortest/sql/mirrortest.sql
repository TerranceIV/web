-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 10:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirrortest`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_price` float NOT NULL,
  `orderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `item_id`, `cart_qty`, `cart_price`, `orderID`) VALUES
(42, 2, 3, 7, 1),
(75, 1, 2, 5, 2),
(76, 2, 2, 7, 2),
(77, 1, 2, 5, 3),
(78, 2, 3, 7, 3),
(79, 1, 2, 5, 4),
(80, 2, 3, 7, 4),
(92, 2, 6, 7, 5),
(93, 1, 3, 5, 6),
(94, 2, 4, 7, 6),
(97, 9, 5, 450, 7),
(98, 14, 9, 1250, 7),
(99, 21, 3, 5, 7),
(100, 23, 2, 7, 7),
(118, 6, 3, 10, 8),
(120, 8, 1, 700, 8),
(121, 9, 1, 520, 8),
(123, 11, 1, 540, 8),
(124, 12, 1, 520, 8),
(129, 17, 1, 699, 8),
(131, 19, 1, 5, 8),
(133, 21, 1, 8, 8),
(135, 23, 1, 9, 8),
(138, 1, 3, 5, 9),
(139, 2, 4, 7, 9),
(140, 13, 1, 1250, 9);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `first_name`, `last_name`, `password`, `email`, `phone_no`, `address`) VALUES
(1, 'Admin', '', '', 'Admin123', '', '', ''),
(2, 'fong123', 'Fong', 'Cha Pei', 'Aa123456', 'fongchapei@hotmail.com', '0167805089', 'Taman Waja 4,Parit Raja'),
(3, 'Chiam', 'Chiam', 'Wui Xiang', 'Cwx12345', 'wx@gmail.com', '014-1234545', 'tmn waja4'),
(4, 'wuixiang', 'wui', 'xiang', 'Ai150166', 'xiang_0622@yahoo.com', '0143867282', '95 jalan saga 14 taman desa cemerlang');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `orderID` int(11) NOT NULL,
  `ord_item_total` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `cust_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`orderID`, `ord_item_total`, `status`, `cust_name`) VALUES
(1, 21, 'checkout', 'fong'),
(2, 24, 'checkout', 'fong'),
(3, 31, 'checkout', 'fong'),
(4, 31, 'checkout', 'fong'),
(5, 57, 'checkout', 'fong'),
(6, 43, 'no-checkout', 'fong'),
(7, 13595, 'checkout', 'wuixiang'),
(8, 8167, 'checkout', 'fong123'),
(9, 1293, 'no-checkout', 'fong123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email_id` int(12) NOT NULL,
  `email` varchar(65) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email_id`, `email`, `comment`) VALUES
(1, 'fong@gmail.com', 'thanks your effort , keep it up!'),
(2, 'fongchapei@hotmail.com', 'thanks for your effort'),
(3, 'fongchapei@hotmail.com', 'nice ,well done');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photoID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photoID`, `image`, `text`) VALUES
(1, '14087053-Blank-t-shirt-template-Front-and-back-Stock-Vector-white.jpg', ''),
(2, 'web3.JPG', 'book of \r\nweb tech promotion \r\nPromotion up to 50%!!!'),
(3, 'web.jpg', 'book of web tech promotion Promotion up to 50%!!!'),
(4, 'it2.jpg', 'book of web tech promotion Promotion up to 50%!!!'),
(5, 'web.jpg', 'book of web tech promotion Promotion up to 50%!!!'),
(6, 'web.jpg', 'book of web tech promotion Promotion up to 70%!!!');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` float NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `item_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `item_price`, `cat_name`, `item_img`) VALUES
(1, 'Reflective Float Glass', 5, 'mirror', 'img/productg1.jpg'),
(2, 'Reflective Floated Tempered Glass', 7, 'mirror', 'img/productg2.jpg'),
(3, 'Tinted Floated Glass', 8, 'mirror', 'img/productg3.jpg'),
(4, 'Curve Glass', 12, 'mirror', 'img/productg4.jpg'),
(5, 'Clear Wire Glass', 9, 'mirror', 'img/productg5.jpg'),
(6, 'Laminated Security Glass', 10, 'mirror', 'img/productg6.jpg'),
(7, 'White Grey Wide Window', 450, 'window', 'img/product7.jpg'),
(8, 'White Armani Window', 700, 'window', 'img/product8.jpg'),
(9, 'Roll Up White Window', 520, 'window', 'img/product9.jpg'),
(10, 'Flip Up Window', 480, 'window', 'img/product10.jpg'),
(11, 'White Blue Window', 540, 'window', 'img/product11.jpg'),
(12, 'Folded Black Window', 520, 'window', 'img/product12.jpg'),
(13, 'Elizabeth Sliding Door', 1250, 'door', 'img/product1.jpg'),
(14, 'Foldable Sliding Door', 699, 'door', 'img/product2.jpg'),
(15, 'White-classic Entrance Door', 699, 'door', 'img/product3.jpg'),
(16, 'Jade-classic glass Entrance Door', 840, 'door', 'img/product4.jpg'),
(17, 'Jetblack Door', 699, 'door', 'img/product5.jpg'),
(18, 'Classic Entrance Door', 699, 'door', 'img/product6.jpg'),
(19, 'Dark Silver Frame', 5, 'frame', 'img/product13.jpg'),
(20, 'Dotted-line Brown Frame', 7, 'frame', 'img/product14.jpg'),
(21, 'Dark-brick Alumininum Frame', 8, 'frame', 'img/product15.jpg'),
(22, 'Silver Column Frame', 12, 'frame', 'img/product16.jpg'),
(23, 'White Clear Frame', 9, 'frame', 'img/product17.jpg'),
(24, 'Classic Silver Frame', 4, 'frame', 'img/product18.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photoID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cust_order`
--
ALTER TABLE `cust_order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `email_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
