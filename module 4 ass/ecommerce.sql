-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 03:31 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `auther`
--

CREATE TABLE `auther` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adrress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auther`
--

INSERT INTO `auther` (`id`, `name`, `adrress`) VALUES
(1, '153', '12'),
(2, 'jeetendra', 'gwalior');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `auther_id` int(10) NOT NULL,
  `book_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `auther_id`, `book_name`) VALUES
(1, 12, 'c++'),
(2, 12, 'c++');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `user_id`, `product_id`, `status`) VALUES
(1, 1, 2, 'added'),
(2, 1, 4, 'added'),
(3, 1, 7, 'added'),
(5, 1, 1, 'confirmed'),
(6, 1, 10, 'added'),
(7, 1, 9, 'added'),
(8, 1, 11, 'confirmed'),
(9, 1, 3, 'added'),
(10, 2, 1, 'confirmed'),
(14, 2, 2, 'confirmed'),
(15, 2, 6, 'confirmed'),
(16, 2, 12, 'confirmed'),
(18, 2, 8, 'confirmed'),
(19, 2, 11, 'confirmed'),
(20, 2, 10, 'confirmed'),
(21, 2, 5, 'confirmed'),
(22, 2, 5, 'confirmed'),
(23, 2, 1, 'confirmed'),
(24, 2, 1, 'added'),
(25, 3, 4, 'confirmed'),
(26, 3, 3, 'added'),
(27, 3, 9, 'added'),
(28, 3, 10, 'added'),
(29, 3, 7, 'added');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `category` enum('camera','watch','t-shirt','other') NOT NULL DEFAULT 'other'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, 'Cannon EOS', 36000, '5.jpg', 'camera'),
(2, 'Sony DSLR', 40000, '2.jpg', 'camera'),
(3, 'Sony DSLR HD', 50000, '3.jpg', 'camera'),
(4, 'Olympus DSLR', 80000, '4.jpg', 'camera'),
(5, 'Titan Model #301', 13000, '9.jpg', 'watch'),
(6, 'Titan Model #201', 3000, '10.jpg', 'watch'),
(7, 'HMT Milan', 8000, '11.jpg', 'watch'),
(8, 'Faber Luba #111', 18000, '12.jpg', 'watch'),
(9, 'H&W', 800, '8.jpg', 't-shirt'),
(10, 'Luis Phil', 1000, '6.jpg', 't-shirt'),
(11, 'John Zok', 15000, '13.jpg', 't-shirt'),
(12, 'jhalsani', 13000, '14.jpg', 't-shirt');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `category` varchar(50) CHARACTER SET ascii DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`) VALUES
(1, 'harry_potter', 'book'),
(2, 'deception_point', 'book'),
(3, 'drunkards_walk', 'book'),
(4, 'the_kite_runner', 'book'),
(5, 'animal_farm', 'book'),
(6, 'night_lamp', 'other'),
(7, 'pencil_box', 'stationery'),
(8, 'fountain_pen', 'stationery'),
(9, 'study_bed_table', 'other'),
(10, 'personal_diary', 'stationery'),
(11, 'cpp', 'book'),
(12, 'cpp', 'book'),
(13, 'cpp', 'book'),
(14, 'cpp', 'book'),
(15, 'cpp', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `city`, `mobile`, `address`, `timestamp`) VALUES
(1, 'purushottam', 'sahu@gmail.com', '2f477c2a9ecafabac5359b1312f8b562', 'gwalior', 1234567890, 'vivek vihar NH75@asdas', '2020-04-25 00:12:41'),
(2, 'jeetendra sahu', 'sahujeetendra@gmail.com', '2f477c2a9ecafabac5359b1312f8b562', 'gwalior', 1234567890, 'vivek vihar NH75@', '2020-04-25 03:58:02'),
(3, 'Jeetendra', 'jeetendra@gmail.com', '2f477c2a9ecafabac5359b1312f8b562', 'gwalior', 1234567890, 'vivek vihar NH77@asdas', '2020-04-26 15:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` bigint(15) DEFAULT NULL,
  `ragistration_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `phone`, `ragistration_timestamp`) VALUES
(1, 'sahu@gmail.com', '202cb962ac59075b964b07152d234b70', 'venu', 'sharma', 547903927, '2016-09-28 16:00:04'),
(2, 'sahu06@gmail.com', '202cb962ac59075b964b07152d234b70', 'shubham', NULL, 538915649, '2020-04-14 17:18:19'),
(3, 'disha@xyz.com', '202cb962ac59075b964b07152d234b70', 'dish', 'kaur', 538915649, '2016-09-29 18:32:14'),
(4, 'ankit@xyz.com', '202cb962ac59075b964b07152d234b70', 'ankit', 'kumar', 53891243, '2016-09-30 09:35:18'),
(5, 'mrinal@xyz.com', '202cb962ac59075b964b07152d234b70', 'mrinal', 'joh', 5389849, '2020-04-14 17:34:56'),
(6, 'abhilash@xyz.com', '202cb962ac59075b964b07152d234b70', 'abhilash', 'jalsani', 2533891649, '2016-12-30 04:32:15'),
(7, 'dia@xyz.com', '202cb962ac59075b964b07152d234b70', 'dia', NULL, 5389649, '2016-09-14 18:32:14'),
(8, 'ashoka@xyz.com', '202cb962ac59075b964b07152d234b70', 'ashok', 'kumar', 50159849, '2016-11-07 00:55:14'),
(9, 'disha@xyz.com', '202cb962ac59075b964b07152d234b70', 'dish', 'kaur', 538915649, '2016-09-29 18:32:14'),
(10, 'ankit@xyz.com', '202cb962ac59075b964b07152d234b70', 'ankit', 'kumar', 53891243, '2016-09-30 09:35:18'),
(11, 'mrinal@xyz.com', '202cb962ac59075b964b07152d234b70', 'mrinal', 'joh', 5389849, '2020-04-14 17:35:41'),
(12, 'abhilash@xyz.com', '202cb962ac59075b964b07152d234b70', 'abhilash', 'jalsani', 2533891649, '2016-12-30 04:32:15'),
(13, 'dia@xyz.com', '202cb962ac59075b964b07152d234b70', 'dia', 'kaur', 5389649, '2016-09-14 18:32:14'),
(14, 'ashoka@xyz.com', '202cb962ac59075b964b07152d234b70', 'ashok', 'kumar', 50159849, '2016-11-07 00:55:14'),
(15, 'disha@xyz.com', '202cb962ac59075b964b07152d234b70', 'dish', 'kaur', 538915649, '2020-09-29 18:32:14'),
(16, 'ankit@xyz.com', '202cb962ac59075b964b07152d234b70', 'ankit', 'kumar', 53891243, '2016-09-30 09:35:18'),
(17, 'mrinal@xyz.com', '202cb962ac59075b964b07152d234b70', 'mrinal', 'joh', 5389849, '2020-04-14 17:38:24'),
(18, 'abhilash@xyz.com', '202cb962ac59075b964b07152d234b70', 'abhilash', 'jalsani', 2533891649, '2016-12-30 04:32:15'),
(19, 'dia@xyz.com', '202cb962ac59075b964b07152d234b70', 'dia', 'kaur', 5389649, '2016-09-14 18:32:14'),
(20, 'ashoka@xyz.com', '202cb962ac59075b964b07152d234b70', 'ashok', 'kumar', 50159849, '2016-11-07 00:55:14'),
(21, 'disha@xyz.com', '202cb962ac59075b964b07152d234b70', 'dish', 'kaur', 538915649, '2020-09-29 18:32:14'),
(22, 'ankit@xyz.com', '202cb962ac59075b964b07152d234b70', 'ankit', 'kumar', 53891243, '2016-09-30 09:35:18'),
(23, 'mrinal@xyz.com', '202cb962ac59075b964b07152d234b70', 'mrinal', 'joh', 5389849, '2020-04-14 17:39:42'),
(24, 'abhilash@xyz.com', '202cb962ac59075b964b07152d234b70', 'abhilash', 'jalsani', 2533891649, '2016-12-30 04:32:15'),
(25, 'dia@xyz.com', '202cb962ac59075b964b07152d234b70', 'dia', 'kaur', 5389649, '2016-09-14 18:32:14'),
(26, 'ashoka@xyz.com', '202cb962ac59075b964b07152d234b70', 'ashok', 'kumar', 50159849, '2016-11-07 00:55:14'),
(27, 'asha@xyz.com', '202cb962ac59075b964b07152d234b70', 'asha', 'kaur', 5389149, '2016-09-29 22:32:14'),
(28, 'suneel@xyz.com', '202cb962ac59075b964b07152d234b70', 'suneel', 'jalsani', 8915649, '2016-10-30 02:32:14'),
(29, 'disha@xyz.com', '202cb962ac59075b964b07152d234b70', 'dish', 'kaur', 538915649, '2020-09-29 18:32:14'),
(30, 'ankit@xyz.com', '202cb962ac59075b964b07152d234b70', 'ankit', 'kumar', 53891243, '2016-09-30 09:35:18'),
(31, 'mrinal@xyz.com', '202cb962ac59075b964b07152d234b70', 'mrinal', 'joh', 5389849, '2020-04-14 17:40:29'),
(32, 'abhilash@xyz.com', '202cb962ac59075b964b07152d234b70', 'abhilash', 'jalsani', 2533891649, '2016-12-30 04:32:15'),
(33, 'dia@xyz.com', '202cb962ac59075b964b07152d234b70', 'dia', 'kaur', 5389649, '2016-09-14 18:32:14'),
(34, 'ashoka@xyz.com', '202cb962ac59075b964b07152d234b70', 'ashok', 'kumar', 50159849, '2016-11-07 00:55:14'),
(35, 'asha@xyz.com', '202cb962ac59075b964b07152d234b70', 'asha', 'kaur', 5389149, '2016-09-29 22:32:14'),
(36, 'suneel@xyz.com', '202cb962ac59075b964b07152d234b70', 'suneel', 'jalsani', 8915649, '2016-10-30 02:32:14'),
(37, 'jeetend@xyz.com', '202cb962ac59075b964b07152d234b70', 'jeetendra', 'kumar', 915649, '2016-09-15 05:32:14'),
(38, 'vikash@xyz.com', '202cb962ac59075b964b07152d234b70', 'vikash', 'kumar', 55649, '2016-11-16 06:53:14'),
(39, 'jeet@xyz.com', '202cb962ac59075b964b07152d234b70', 'jeet', 'kuar', 5389149, '2016-09-14 06:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `purchase_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `products_id`, `purchase_timestamp`) VALUES
(1, 12, 3, '2016-10-10 12:40:12'),
(2, 12, 6, '2016-10-12 12:40:12'),
(3, 8, 6, '2016-10-29 06:42:12'),
(4, 4, 6, '2016-10-15 07:35:04'),
(5, 10, 9, '2016-10-09 20:45:16'),
(6, 7, 4, '2016-10-10 03:04:42'),
(7, 5, 1, '2016-10-19 11:28:54'),
(8, 4, 5, '2016-10-14 06:05:32'),
(9, 12, 3, '2016-10-10 12:40:12'),
(10, 12, 6, '2016-10-12 12:40:12'),
(11, 8, 6, '2016-10-29 06:42:12'),
(12, 4, 6, '2016-10-15 07:35:04'),
(13, 10, 9, '2016-10-09 20:45:16'),
(14, 7, 4, '2016-10-10 03:04:42'),
(15, 5, 1, '2016-10-19 11:28:54'),
(16, 4, 5, '2016-10-14 06:05:32'),
(17, 8, 5, '2016-10-23 00:15:23'),
(18, 7, 7, '2016-10-04 07:42:35'),
(19, 12, 2, '2016-10-14 06:53:41'),
(20, 12, 7, '2016-10-21 08:45:13'),
(21, 7, 2, '2016-10-05 10:38:02'),
(22, 7, 8, '2016-10-06 12:04:49'),
(23, 1, 2, '2016-10-13 10:07:51'),
(24, 11, 6, '2016-10-15 04:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `users_products_backup`
--

CREATE TABLE `users_products_backup` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `purchase_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products_backup`
--

INSERT INTO `users_products_backup` (`id`, `user_id`, `products_id`, `purchase_timestamp`) VALUES
(1, 12, 3, '2016-10-10 12:40:12'),
(2, 12, 6, '2016-10-12 12:40:12'),
(3, 8, 6, '2016-10-29 06:42:12'),
(4, 4, 6, '2016-10-15 07:35:04'),
(5, 10, 9, '2016-10-09 20:45:16'),
(6, 7, 4, '2016-10-10 03:04:42'),
(7, 5, 1, '2016-10-19 11:28:54'),
(8, 4, 5, '2016-10-14 06:05:32'),
(9, 12, 3, '2016-10-10 12:40:12'),
(10, 12, 6, '2016-10-12 12:40:12'),
(11, 8, 6, '2016-10-29 06:42:12'),
(12, 4, 6, '2016-10-15 07:35:04'),
(13, 10, 9, '2016-10-09 20:45:16'),
(14, 7, 4, '2016-10-10 03:04:42'),
(15, 5, 1, '2016-10-19 11:28:54'),
(16, 4, 5, '2016-10-14 06:05:32'),
(17, 8, 5, '2016-10-23 00:15:23'),
(18, 7, 7, '2016-10-04 07:42:35'),
(19, 12, 2, '2016-10-14 06:53:41'),
(20, 12, 7, '2016-10-21 08:45:13'),
(21, 7, 2, '2016-10-05 10:38:02'),
(22, 7, 8, '2016-10-06 12:04:49'),
(23, 1, 2, '2016-10-13 10:07:51'),
(24, 11, 6, '2016-10-15 04:33:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auther`
--
ALTER TABLE `auther`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auther_id` (`auther_id`),
  ADD KEY `auther_id_2` (`auther_id`),
  ADD KEY `auther_id_3` (`auther_id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id` (`products_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `products_id_2` (`products_id`);

--
-- Indexes for table `users_products_backup`
--
ALTER TABLE `users_products_backup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id` (`products_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `products_id_2` (`products_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auther`
--
ALTER TABLE `auther`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users_products_backup`
--
ALTER TABLE `users_products_backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
