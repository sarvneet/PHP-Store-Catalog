-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 09:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(4) UNSIGNED NOT NULL,
  `prod_image` varchar(200) NOT NULL,
  `prod_code` varchar(50) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `prod_image`, `prod_code`, `prod_name`, `prod_price`) VALUES
(1, './images/watches/rider-wristwatch.jpeg', 'watches', 'Wrist Watch', '50.00'),
(2, './images/watches/rolex.jpg', 'watches', 'Wrist Watch', '69.90'),
(3, './images/watches/watch-3.jpeg', 'watches', 'Wrist Watch', '50.00'),
(4, './images/watches/watch-4.jpeg', 'watches', 'Wrist Watch', '69.90'),
(5, './images/watches/watch-5.jpeg', 'watches', 'Wrist Watch', '0.00'),
(6, './images/watches/watch-6.jpeg', 'watches', 'Wrist Watch', '67.00'),
(7, './images/sunglasses/sunglasses-4.jpeg', 'sunglasses', 'Sunglasses', '79.00'),
(8, './images/sunglasses/glasses-2.jpeg', 'sunglasses', 'Sunglasses', '55.00'),
(9, './images/sunglasses/sunglasses-6.jpeg', 'sunglasses', 'Sunglasses', '89.00'),
(10, './images/sunglasses/glasses-3.jpeg', 'sunglasses', 'Sunglasses', '20.00'),
(11, './images/sunglasses/sunglasses-5.jpeg', 'sunglasses', 'Sunglasses', '35.00'),
(12, './images/sunglasses/sunglasses.jpeg', 'sunglasses', 'Sunglasses', '45.00'),
(13, './images/handbags/handbag-2.jpg', 'handbags', 'Handbag', '55.90'),
(14, './images/handbags/handbag.jpg', 'handbags', 'Handbag', '79.90'),
(15, './images/handbags/handbag-4.jpeg', 'handbags', 'Handbag', '49.90'),
(16, './images/handbags/handbag-5.jpg', 'handbags', 'handbags', '55.50'),
(17, './images/handbags/handbag-6.jpg', 'handbags', 'Handbag', '89.00'),
(18, './images/handbags/handbag-3.jpg', 'handbags', 'Handbag', '95.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
