-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 05:21 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmburger`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_price` int(255) NOT NULL,
  `order_id` varchar(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bag`
--

INSERT INTO `bag` (`id`, `user_id`, `order_name`, `order_price`, `order_id`, `quantity`, `total_price`) VALUES
(25, 2, 'Ultimate Beef Bacon Burger', 55, '5', 4, 220),
(26, 2, 'Ultimate Beef Bacon Burger', 55, '5', 4, 220),
(27, 2, 'Bacon Mushroom Burger', 50, '9', 2, 100),
(28, 6, 'Cheese Burger', 50, 'CHE', 2, 100),
(29, 6, 'Bacon Mushroom Burger', 50, 'BM', 2, 100),
(30, 6, 'Cheese Burger', 50, 'CHE', 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

CREATE TABLE `burger` (
  `id` varchar(11) NOT NULL,
  `burger_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`id`, `burger_name`, `price`) VALUES
('BM', 'Bacon Mushroom Burger', '50'),
('BP', 'Black Pepper Burger', '50'),
('CB', 'Chicken BBQ Burger', '55'),
('CHE', 'Cheese Burger', '50'),
('DGB', 'Double Grilled Beef', '55'),
('GB', 'Gourmet Bacon Burger', '50'),
('REG', 'Regular Burger', '45'),
('SMM', 'Signiture Mouth Melters Burger', '55'),
('UBB', 'Ultimate Beef Bacon Burger', '55');

-- --------------------------------------------------------

--
-- Table structure for table `burger_order`
--

CREATE TABLE `burger_order` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `order_id` varchar(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Processing',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burger_order`
--

INSERT INTO `burger_order` (`id`, `user_id`, `order_id`, `order_name`, `price`, `quantity`, `total_price`, `status`, `date`) VALUES
(62, 6, 'BP', 'Black Pepper Burger', 50, 1, 50, 'Deliver', '2018-04-28 15:01:11'),
(63, 6, 'CHE', 'Cheese Burger', 50, 5, 250, 'Processing', '2018-04-28 15:39:02'),
(64, 6, 'DGB', 'Double Grilled Beef', 55, 1, 55, 'Processing', '2018-04-28 16:01:37'),
(65, 6, 'UBB', 'Ultimate Beef Bacon Burger', 55, 1, 55, 'Processing', '2018-04-28 16:01:37'),
(66, 6, 'BM', 'Bacon Mushroom Burger', 50, 1, 50, 'Processing', '2018-04-28 19:34:37'),
(67, 6, 'UBB', 'Ultimate Beef Bacon Burger', 55, 1, 55, 'Processing', '2018-04-28 19:34:37'),
(68, 6, 'DGB', 'Double Grilled Beef', 55, 1, 55, 'Processing', '2018-04-28 19:34:37'),
(69, 6, 'UBB', 'Ultimate Beef Bacon Burger', 55, 1, 55, 'Processing', '2018-04-28 19:34:37'),
(70, 6, 'CB', 'Chicken BBQ Burger', 55, 1, 55, 'Processing', '2018-04-28 19:34:37'),
(71, 6, 'SMM', 'Signiture Mouth Melters Burger', 55, 1, 55, 'Deliver', '2018-04-28 19:34:37'),
(72, 6, 'UBB', 'Ultimate Beef Bacon Burger', 55, 1, 55, 'Deliver', '2018-04-28 19:34:37'),
(73, 6, 'BP', 'Black Pepper Burger', 50, 1, 50, 'Deliver', '2018-04-28 19:34:37'),
(74, 8, 'GB', 'Gourmet Bacon Burger', 50, 1, 50, 'Processing', '2018-05-06 08:50:04'),
(75, 8, 'SMM', 'Signiture Mouth Melters Burger', 55, 1, 55, 'Processing', '2018-05-06 08:50:04'),
(76, 8, 'CHE', 'Cheese Burger', 50, 1, 50, 'Deliver', '2018-05-06 08:50:04'),
(77, 8, 'CHE', 'Cheese Burger', 50, 1, 50, 'Deliver', '2018-05-06 08:50:04'),
(78, 8, 'DGB', 'Double Grilled Beef', 55, 1, 55, 'Deliver', '2018-05-06 08:50:04'),
(79, 8, 'CB', 'Chicken BBQ Burger', 55, 1, 55, 'Deliver', '2018-05-06 08:50:04'),
(80, 8, 'BM', 'Bacon Mushroom Burger', 50, 1, 50, 'Deliver', '2018-05-06 08:50:04'),
(81, 8, 'BM', 'Bacon Mushroom Burger', 50, 1, 50, 'Deliver', '2018-05-06 08:50:04'),
(82, 8, 'CHE', 'Cheese Burger', 50, 1, 50, 'Deliver', '2018-05-06 08:50:04'),
(83, 8, 'CHE', 'Cheese Burger', 50, 2, 100, 'Deliver', '2018-05-06 08:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`) VALUES
(6, 'John Doe', 'john@gmail.com', '$2y$10$exPKL2XhFz7c8rL17z3Q/.qKQh56N/43b5uhJaQavMImGob1Wtzv6', ''),
(7, 'wew', 'wew1@gmail.com', '$2y$10$xEfENeKsTkQVRHX1Nlnkxeiz5Oo9pW8qfjGZLX6cUxKYRe727oZTO', 'silang'),
(8, 'Ben', 'ben@gmail.com', '$2y$10$ZQChEFj3eON7JkOEgVwS.eMhNqz4dSSfFlbtySofKFo7Vxw40HWeK', 'Silang, cavite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burger_order`
--
ALTER TABLE `burger_order`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bag`
--
ALTER TABLE `bag`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `burger_order`
--
ALTER TABLE `burger_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
