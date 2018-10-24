-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 06:39 PM
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
  `phone` varchar(80) NOT NULL,
  `note` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `postalCode`, `email`, `phone`, `note`) VALUES
(1, 'kimberly lie', '122 laxus hill avenue', 123456, 'klie001@e.ntu.edu.sg', '+6591230945', '5 pairs chopstick'),
(2, 'kimberly lie', '122 laxus hill avenue', 123456, 'klie001@e.ntu.edu.sg', '+6591230945', '5 pairs chopstick'),
(3, 'kimberly lie', '122 laxus hill avenue', 123456, 'klie001@e.ntu.edu.sg', '+6591230945', '5 pairs chopstick'),
(4, 'kimberly lie', '122 laxus hill avenue', 123456, 'klie001@e.ntu.edu.sg', '+6591230945', '5 pairs chopstick'),
(5, 'kimberly lie', '122 laxus hill avenue', 123456, 'klie001@e.ntu.edu.sg', '+6591230945', ''),
(6, 'kimberly li', '122 laxus hill avenue', 123456, 'klie001@e.ntu.edu.sg', '+6591230945', '17 pair of chopstick');

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
(1, 'a', 'n', 'c', 'd'),
(2, 'kiki', 'samuelparick97@gmail.com', 'feedback', 'feedback'),
(3, 'kiki', 'samuelparick97@gmail.com', 'feedback', '1234567890     '),
(4, 'kiki', 'samuelparick97@gmail.com', 'feedback', '1234567890     '),
(5, 'kiki', 'samuelparick97@gmail.com', 'feedback', '1234567890     '),
(6, 'sma', 'samuelparick97@gmail.com', 'feedback', '      12345678              '),
(7, 'sma', 'samuelparick97@gmail.com', 'feedback', '      12345678              '),
(8, 'sma', 'samuelparick97@gmail.com', 'others', '             23457890       '),
(9, 'samuel', 'samuelparick97@gmail.com', 'catering', '50 salmon gunkan'),
(10, 'name', 'email', 'subject', 'message'),
(11, 'samuel', 'samuelparick97@gmail.com', 'feedback', '123456'),
(12, '$name', '$email', '$subject', '$message'),
(13, '$name', '$email', '$subject', '$message'),
(14, '$name', '$email', '$subject', '$message'),
(15, '$name', '$email', '$subject', '$message'),
(16, 'samuel', 'samuelparick97@gmail.com', 'feedback', '123456'),
(17, 'samuel', 'samuelparick97@gmail.com', 'feedback', '123456'),
(18, 'sam', 'samuelparick97@gmail.com', 'feedback', '1234567'),
(19, 'samuel', 'samuelparick97@gmail.com', 'others', '12345678');

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
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `imgURL`, `type`) VALUES
(1, 'Crabstick Gunkan ', 'crab stick', 2, '/sushi/assets/menu/gunkan/crabstick.jpg', 'Gunkan'),
(2, 'Salmon Gunkan ', 'Salmon', 2, '/sushi/assets/menu/gunkan/salmon.jpg', 'Gunkan'),
(3, 'Shrimp Gunkan ', 'Shrimp', 2, '/sushi/assets/menu/gunkan/shrimp.jpg', 'Gunkan'),
(4, 'Tuna Gunkan ', 'Tuna', 2, '/sushi/assets/menu/gunkan/tuna.jpg', 'Gunkan'),
(5, 'Kyuri Sake Maguro', 'cucumber, Salmon, tuna, masago roe, tempura crisps, green onion, chilli sauce ', 1.5, '/sushi/assets/menu/maki/59_kyuri_sake_maguro-300x200.png', 'Maki'),
(6, 'Goma Masago', 'Crab sticks, masago roe, iceberg lettuce, cucumber, green onion, mayonnaise, sesame', 1.5, '/sushi/assets/menu/maki/63_goma_masago-300x200.png', 'Maki'),
(7, 'Avocado Maki', 'avocado', 1.5, '/sushi/assets/menu/maki/Avocado-maki-300x200.jpg', 'Maki'),
(8, 'Hitomaki', 'Salmon, avocado, cream', 1.5, '/sushi/assets/menu/maki/Hitomaki-380x250.png', 'Maki'),
(9, 'Kani', 'Avocado, cucumber, crab sticks, mayonnaise, sesame', 1.5, '/sushi/assets/menu/maki/kani-300x200.jpg', 'Maki'),
(10, 'Kani Maki', 'Crab sticks', 1.5, '/sushi/assets/menu/maki/Kani-maki-300x200.jpg', 'Maki'),
(11, 'Kappa Maki', 'Cucumber', 1.5, '/sushi/assets/menu/maki/Kappa-maki-1-300x200.jpg', 'Maki'),
(12, 'Kappa sake maki', 'Salmon, karai sauce', 1.5, '/sushi/assets/menu/maki/kappa-sake-maki-300x200.jpg', 'Maki'),
(13, 'Karai Maguro', 'Tuna, cucumber, karai sauce, sesame', 1.5, '/sushi/assets/menu/maki/karai-maguro-300x200.jpg', 'Maki'),
(14, 'Karai Sake Maki', 'Salmon, karai sauce', 1.5, '/sushi/assets/menu/maki/Karai-sake-maki-300x200.jpg', 'Maki'),
(15, 'Kioto', 'Eel, crab sticks, masago roe, tempura crisps, mayonnaise, sesame', 1.5, '/sushi/assets/menu/maki/kioto-300x200.jpg', 'Maki'),
(16, 'Philadelphia', 'Salmon, crab sticks, cucumber, cream', 1.5, '/sushi/assets/menu/maki/philadelphia-300x200.jpg', 'Maki'),
(17, 'Salmon Nigiri', 'Salmon', 2.5, '/sushi/assets/menu/nigiri/nigiri-su-salmon-300x200.jpg', 'nigiri'),
(18, 'Shrimp Nigiri', 'Shrimp', 2.5, '/sushi/assets/menu/nigiri/nigiri-su-shrimp-300x200.jpg', 'nigiri'),
(19, 'Tuna Nigiri', 'Tuna', 2.5, '/sushi/assets/menu/nigiri/nigiri-su-tuna-300x200.jpg', 'nigiri');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `menu_ID` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_ID`, `date`, `menu_ID`, `quantity`) VALUES
(1, 4, '0000-00-00', 19, 3),
(2, 4, '0000-00-00', 3, 5),
(3, 5, '2018-10-24', 19, 3),
(4, 5, '2018-10-24', 3, 5),
(5, 5, '2018-10-24', 6, 5),
(6, 5, '2018-10-24', 10, 6),
(7, 6, '2018-10-24', 19, 3),
(8, 6, '2018-10-24', 3, 5),
(9, 6, '2018-10-24', 6, 5),
(10, 6, '2018-10-24', 10, 6);

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
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_ID` (`customer_ID`),
  ADD KEY `menu_ID` (`menu_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`menu_ID`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
