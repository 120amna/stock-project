-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 07:13 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `userId` int(250) NOT NULL,
  `productId` int(200) NOT NULL,
  `dateTime` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `status` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userId`, `productId`, `dateTime`, `quantity`, `status`) VALUES
(1, 2, 3, '2021-07-04 06:31:54', 1, 1),
(2, 2, 3, '2021-07-04 06:31:54', 1, 1),
(3, 2, 3, '2021-07-04 06:32:56', 1, 1),
(4, 1, 1, '2021-07-04 11:07:11', 1, 1),
(5, 1, 1, '2021-07-04 11:07:13', 1, 1),
(6, 2, 2, '2021-07-04 02:07:25', 1, 1),
(7, 2, 2, '2021-07-04 02:07:25', 1, 1),
(8, 2, 4, '2021-07-04 02:07:28', 1, 1),
(9, 2, 1, '2021-07-04 02:07:28', 1, 1),
(10, 2, 3, '2021-07-04 03:07:44', 1, 1),
(11, 2, 1, '2021-07-11 05:07:06', 1, 1),
(12, 1, 1, '2021-07-13 05:07:17', 1, 1),
(13, 1, 1, '2021-07-17 08:07:31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(250) NOT NULL,
  `orderId` int(250) NOT NULL,
  `productId` int(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `unitPrice` int(250) NOT NULL,
  `totalPrice` int(250) NOT NULL,
  `status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(250) NOT NULL,
  `dateTime` varchar(250) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `pinCode` int(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state landmark` varchar(200) NOT NULL,
  `total` int(200) NOT NULL,
  `discount` int(250) NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` int(250) NOT NULL,
  `productId` int(250) NOT NULL,
  `imageUrl` varchar(200) NOT NULL,
  `status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`id`, `productId`, `imageUrl`, `status`) VALUES
(1, 1, 'http://[::1]/stock/upload/sm-tab.jpeg', 1),
(2, 2, 'http://[::1]/stock/upload/laptop.jpg', 1),
(3, 3, 'http://[::1]/stock/upload/lcd.jpg', 1),
(4, 4, 'http://[::1]/stock/upload/tab.jpg', 1),
(5, 4, 'http://[::1]/stock/upload/hp-lcd.jpg', 1),
(6, 5, 'http://[::1]/stock/upload/hp-laptop.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `status` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `status`) VALUES
(1, 'tab', 'HighQuality', 12000, 1),
(2, 'laptop', 'HighQuality', 13000, 1),
(3, 'lcd', 'HighQuality', 14000, 1),
(4, 'tab', 'HighQuality', 13000, 1),
(5, 'tab', 'HighQuality', 13000, 1),
(6, 'tab', 'HighQuality', 13000, 1),
(7, 's', 'HighQuality', 100, 1),
(8, 's', 'as', 2123, 1),
(9, 'as', 'asdas', 4654, 1),
(10, 'sd', 'sd', 87, 1),
(11, 'laptop', 'HighQuality', 12000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userName`, `email`, `password`, `status`) VALUES
(1, 'sham', 'sham', 'sham@gmail.com', '123', 1),
(2, 'Vijai', 'kumar', 'kumar@gail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
