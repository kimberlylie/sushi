-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 06:23 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalCode` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `postalCode`, `email`, `phone`) VALUES
(1, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(2, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(3, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(4, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(5, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(6, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(7, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(8, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(9, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(10, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(11, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(12, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(13, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(14, 'sam ', '1234a4t adfjadf asdfda', '0', 'spatrick001@e.ntu.edu.sg', '+6592383423'),
(15, 'sam asdf', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(16, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(17, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(18, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(19, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(20, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(21, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(22, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(23, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(24, 'sam ', '1234a4t adfjadf asdfda', '0', 'spatrick001@e.ntu.edu.sg', '+6592383423'),
(25, 'robert', '1234a4t adfjadf asdfda', '000000', 'samuelparick@gmail.com', '+6592383423'),
(26, 'sam ', '1234a4t adfjadf asdfda', '000000', 'samuelpatrick@gmail.com', '+6592383423'),
(27, 'sam ', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(28, 'sam ', '1234a4t adfjadf asdfda', '000000', 'samuelpatrick@gmail.com', '+6592383423'),
(29, 'sam ', '1234a4t adfjadf asdfda', '000000', 'test123@gmail.com', '+6592383423'),
(30, 'kimberly ', '1234a4t adfjadf asdfda', '000000', 'klie001@e.ntu.edu.sg', '+6592383423'),
(31, 'kiki', '31 nanyang crescent', '000000', 'mrkiki@gmail.com', '+6590000000'),
(32, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(33, 'Delvin', '1234a4t adfjadf asdfda', '000000', 'delvin@gmail.com', '+6590001234'),
(34, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(35, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(37, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(38, 'sam', '32 nanyang crescent', '999999', 'samuelparick97@gmail.com', '+6592383423'),
(39, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(40, 'robert', '29 Nanyang crescent', '123456', 'robert.downey@gmail.com', '98770655'),
(41, 'steve roger', '22 pioneer street', '123456', 'steve.roger@gmail.com', '98761543'),
(42, 'john doe', '11 sesame street', '123456', 'john.doe@gmail.com', '98765432'),
(43, 'homer simpson', '11 springfield road', '123456', 'homer.simpson@gmail.com', '98765432'),
(44, 'john hancock', '32 sesame street', '123456', 'john@hancock.com', '98765432');

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

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'kimberly', 'klie@gmail.com', 'feedback', 'good'),
(2, 'delvin', 'delvin@gmail.com', 'catering', '20 salmon nigiri for 24 november'),
(3, 'rico', 'rico@gmail.com', 'others', 'when tuna nigiri will be available'),
(4, 'delvin', 'delvin@gmail.com', 'feedback', 'the rice seems to go hard when arrived ');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `customer_ID`, `email`, `password`) VALUES
(11, 27, 'samuelparick97@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(12, 28, 'samuelpatrick@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(13, 29, 'test123@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(14, 30, 'klie001@e.ntu.edu.sg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(15, 31, 'mrkiki@gmail.com', '95752f86c99f1055feba64e03924cb71f0c08315'),
(16, 33, 'delvin@gmail.com', '4aa1e7253d6c56353cd2a058ac4318f2ce7e5d6a'),
(17, 40, 'robert.downey@gmail.com', '12e9293ec6b30c7fa8a0926af42807e929c1684f'),
(18, 41, 'steve.roger@gmail.com', '9ce5770b3bb4b2a1d59be2d97e34379cd192299f'),
(19, 42, 'john.doe@gmail.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501'),
(20, 43, 'homer.simpson@gmail.com', '8a30fca9ea5b46722cbdad24c7470a442718cac8'),
(21, 44, 'john@hancock.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501');

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
(1, 'Crabstick Gunkan ', '          crab stick', 4, './assets/menu/gunkan/crabstick.jpg', 'Gunkan', 1),
(2, 'Salmon Gunkan ', '    Salmon', 2, './assets/menu/gunkan/salmon.jpg', 'Gunkan', 1),
(3, 'Taiga Sushi Set', 'Salmon, tuna, crabstick, rice, cucumber, egg', 6, './assets/menu/sets/r4-768x512.jpg', 'Sets', 1),
(4, 'Tuna Gunkan ', '  Tuna', 2, './assets/menu/gunkan/tuna.jpg', 'Gunkan', 1),
(5, 'Kyuri Sake Maguro', '         cucumber, Salmon, tuna, masago roe, tempura crisps, green onion, chilli sauce ', 1.5, './assets/menu/maki/59_kyuri_sake_maguro-300x200.png', 'Maki', 1),
(6, 'Goma Masago', 'Crab sticks, masago roe, iceberg lettuce, cucumber, green onion, mayonnaise, sesame', 1.5, './assets/menu/maki/63_goma_masago-300x200.png', 'Maki', 1),
(7, 'Avocado Maki', 'avocado', 1.5, './assets/menu/maki/Avocado-maki-300x200.jpg', 'Maki', 1),
(8, 'Hitomaki', 'Salmon, avocado, cream', 1.5, './assets/menu/maki/Hitomaki-380x250.png', 'Maki', 1),
(9, 'Kani', 'Avocado, cucumber, crab sticks, mayonnaise, sesame', 1.5, './assets/menu/maki/kani-300x200.jpg', 'Maki', 1),
(10, 'Kani Maki', 'Crab sticks', 1.5, './assets/menu/maki/Kani-maki-300x200.jpg', 'Maki', 1),
(11, 'Kappa Maki', 'Cucumber', 1.5, './assets/menu/maki/Kappa-maki-1-300x200.jpg', 'Maki', 1),
(12, 'Kappa sake maki', 'Salmon, karai sauce', 1.5, './assets/menu/maki/kappa-sake-maki-300x200.jpg', 'Maki', 1),
(13, 'Karai Maguro', 'Tuna, cucumber, karai sauce, sesame', 1.5, './assets/menu/maki/karai-maguro-300x200.jpg', 'Maki', 1),
(14, 'Karai Sake Maki', 'Salmon, karai sauce', 1.5, './assets/menu/maki/Karai-sake-maki-300x200.jpg', 'Maki', 1),
(15, 'Kioto', 'Eel, crab sticks, masago roe, tempura crisps, mayonnaise, sesame', 1.5, './assets/menu/maki/kioto-300x200.jpg', 'Maki', 1),
(16, 'Philadelphia', 'Salmon, crab sticks, cucumber, cream', 1.5, './assets/menu/maki/philadelphia-300x200.jpg', 'Maki', 1),
(17, 'Salmon Nigiri', 'Salmon', 2.5, './assets/menu/nigiri/nigiri-su-salmon-300x200.jpg', 'nigiri', 1),
(18, 'Shrimp Nigiri', 'Shrimp', 2.5, './assets/menu/nigiri/nigiri-su-shrimp-300x200.jpg', 'nigiri', 1),
(19, 'Tuna Nigiri', 'Tuna', 2.5, './assets/menu/nigiri/nigiri-su-tuna-300x200.jpg', 'nigiri', 1),
(20, 'Ryu Sushi Set', 'Salmon, tuna, cucumber, masago roe, sesame, eel', 8, './assets/menu/sets/r5-sotusis-rinkinys-768x512.jpg', 'Sets', 1),
(21, 'Zen Sushi Set', 'Crabstick, cucumber, salmon, cream', 6, './assets/menu/sets/r6-768x512.jpg', 'Sets', 1),
(22, 'Yasai Bowl', ' Grilled tofu, rice, avocado', 5, './assets/menu/don/01-380x250.jpg', 'Don', 1),
(23, 'Teka Bowl', ' Tuna, rice, wakame seaweed', 6, './assets/menu/don/04-380x250.jpg', 'Don', 1),
(24, 'Ebi Bowl', ' Tiger prawns, rice', 4, './assets/menu/don/03-380x250.jpg', 'Don', 1);

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
(11, 4, 6, 5),
(12, 4, 7, 5),
(13, 5, 6, 4),
(14, 5, 14, 5),
(15, 6, 6, 2),
(16, 6, 10, 3),
(17, 6, 2, 2),
(18, 7, 6, 5),
(19, 7, 10, 7),
(20, 8, 6, 3),
(21, 8, 10, 4),
(22, 9, 6, 4),
(23, 9, 7, 5),
(24, 10, 7, 5),
(25, 10, 9, 1),
(26, 11, 23, 4),
(27, 12, 6, 1),
(28, 13, 16, 4),
(29, 13, 7, 4),
(30, 14, 7, 5),
(31, 14, 23, 1),
(32, 14, 1, 3),
(33, 15, 9, 4),
(34, 15, 10, 4),
(35, 16, 7, 5),
(36, 16, 5, 4),
(37, 16, 22, 1),
(38, 17, 6, 4),
(39, 17, 9, 3),
(40, 18, 7, 4),
(41, 19, 10, 3);

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
  `note` varchar(140) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `customer_ID`, `date`, `ship_address`, `ship_postalCode`, `note`, `price`) VALUES
(4, 13, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 15),
(5, 14, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 18.445),
(6, 15, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 16.305),
(7, 31, '2018-11-01', '1234a4t adfjadf', 0, '', 23.26),
(8, 32, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 15.235),
(9, 31, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 18.445),
(10, 31, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 13.63),
(11, 33, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 16.84),
(12, 34, '2018-11-02', '1234a4t adfjadf asdfda', 0, 'afdsf', 5.605),
(13, 35, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 16.84),
(14, 31, '2018-11-03', '31 nanyang crescent', 0, '', 24.865),
(15, 33, '2018-11-03', '1234a4t adfjadf asdfda', 0, '', 16.84),
(16, 37, '2018-11-03', '1234a4t adfjadf asdfda', 0, '', 23.795),
(17, 38, '2018-11-03', '32 nanyang crescent', 999999, 'no wasabi', 15.235),
(18, 39, '2018-11-04', '1234a4t adfjadf asdfda', 0, '', 10.42),
(19, 33, '2018-11-05', '1234a4t adfjadf asdfda', 0, '', 8.815);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_ID` (`customer_ID`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
