-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 07:04 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f37ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalCode` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `postalCode`, `email`, `phone`) VALUES
(1, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(2, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(3, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(4, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(5, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(6, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(7, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(8, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(9, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(10, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(11, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423'),
(12, 'sam ', '1234a4t adfjadf asdfda', 0, 'samuelparick97@gmail.com', '+6592383423');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_member`
--

CREATE TABLE `feedback_member` (
  `id` int(11) NOT NULL,
  `member_ID` int(11) NOT NULL,
  `feedback_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `imgURL` varchar(80) NOT NULL,
  `type` varchar(10) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `imgURL`, `type`, `availability`) VALUES
(1, 'Crabstick Gunkan ', 'crab stick', 2, '/sushi/assets/menu/gunkan/crabstick.jpg', 'Gunkan', 1),
(2, 'Salmon Gunkan ', 'Salmon', 2, '/sushi/assets/menu/gunkan/salmon.jpg', 'Gunkan', 1),
(3, 'Shrimp Gunkan ', 'Shrimp', 2, '/sushi/assets/menu/gunkan/shrimp.jpg', 'Gunkan', 1),
(4, 'Tuna Gunkan ', 'Tuna', 2, '/sushi/assets/menu/gunkan/tuna.jpg', 'Gunkan', 1),
(5, 'Kyuri Sake Maguro', 'cucumber, Salmon, tuna, masago roe, tempura crisps, green onion, chilli sauce ', 1.5, '/sushi/assets/menu/maki/59_kyuri_sake_maguro-300x200.png', 'Maki', 1),
(6, 'Goma Masago', 'Crab sticks, masago roe, iceberg lettuce, cucumber, green onion, mayonnaise, sesame', 1.5, '/sushi/assets/menu/maki/63_goma_masago-300x200.png', 'Maki', 1),
(7, 'Avocado Maki', 'avocado', 1.5, '/sushi/assets/menu/maki/Avocado-maki-300x200.jpg', 'Maki', 1),
(8, 'Hitomaki', 'Salmon, avocado, cream', 1.5, '/sushi/assets/menu/maki/Hitomaki-380x250.png', 'Maki', 1),
(9, 'Kani', 'Avocado, cucumber, crab sticks, mayonnaise, sesame', 1.5, '/sushi/assets/menu/maki/kani-300x200.jpg', 'Maki', 1),
(10, 'Kani Maki', 'Crab sticks', 1.5, '/sushi/assets/menu/maki/Kani-maki-300x200.jpg', 'Maki', 1),
(11, 'Kappa Maki', 'Cucumber', 1.5, '/sushi/assets/menu/maki/Kappa-maki-1-300x200.jpg', 'Maki', 1),
(12, 'Kappa sake maki', 'Salmon, karai sauce', 1.5, '/sushi/assets/menu/maki/kappa-sake-maki-300x200.jpg', 'Maki', 1),
(13, 'Karai Maguro', 'Tuna, cucumber, karai sauce, sesame', 1.5, '/sushi/assets/menu/maki/karai-maguro-300x200.jpg', 'Maki', 1),
(14, 'Karai Sake Maki', 'Salmon, karai sauce', 1.5, '/sushi/assets/menu/maki/Karai-sake-maki-300x200.jpg', 'Maki', 1),
(15, 'Kioto', 'Eel, crab sticks, masago roe, tempura crisps, mayonnaise, sesame', 1.5, '/sushi/assets/menu/maki/kioto-300x200.jpg', 'Maki', 1),
(16, 'Philadelphia', 'Salmon, crab sticks, cucumber, cream', 1.5, '/sushi/assets/menu/maki/philadelphia-300x200.jpg', 'Maki', 1),
(17, 'Salmon Nigiri', 'Salmon', 2.5, '/sushi/assets/menu/nigiri/nigiri-su-salmon-300x200.jpg', 'nigiri', 1),
(18, 'Shrimp Nigiri', 'Shrimp', 2.5, '/sushi/assets/menu/nigiri/nigiri-su-shrimp-300x200.jpg', 'nigiri', 1),
(19, 'Tuna Nigiri', 'Tuna', 2.5, '/sushi/assets/menu/nigiri/nigiri-su-tuna-300x200.jpg', 'nigiri', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `transaction_ID` int(10) NOT NULL,
  `menu_ID` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_ID`, `menu_ID`, `quantity`) VALUES
(9, 3, 6, 3),
(10, 3, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `ship_address` varchar(100) NOT NULL,
  `ship_postalCode` int(6) NOT NULL,
  `note` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `customer_ID`, `date`, `ship_address`, `ship_postalCode`, `note`) VALUES
(1, 10, '2018-11-01', '1234a4t adfjadf asdfda', 0, ''),
(2, 11, '2018-11-01', '1234a4t adfjadf asdfda', 0, ''),
(3, 12, '2018-11-01', '1234a4t adfjadf asdfda', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_member`
--
ALTER TABLE `feedback_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_ID` (`member_ID`),
  ADD KEY `feedback_ID` (`feedback_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_ID` (`customer_ID`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_ID` (`transaction_ID`),
  ADD KEY `menu_ID` (`menu_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_member`
--
ALTER TABLE `feedback_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`transaction_ID`) REFERENCES `transaction` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`menu_ID`) REFERENCES `menu` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
