-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 10:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `price`, `img`) VALUES
('HP01', 'Headphone Hyper X', 350000, 'HP01.jpg'),
('KB01', 'Fuhlen J60', 850000, 'KB01.jpg'),
('KB02', 'Glorious GMMK Keyboard', 550000, 'KB02.jpg'),
('Lap01', 'ASUS F555L Laptop', 14350000, 'Lap01.jpg'),
('Moni01', '69inch Mega Monitor', 1200000, 'Moni01.jpg'),
('Mse01', 'Razor Mouse', 1100000, 'Mouse01.jpg'),
('Mse02', 'Gamming Mouse', 800000, 'Mouse02.jpg'),
('PC01.jpg', 'Gamming PC', 11000000, 'PC01.jpg'),
('PC02', 'FullSet Gamming PC', 15000000, 'PC02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(0, 'admin', '4297f44b13955235245b2497399d7a93', 'admin@gmail.com'),
(1, 'employ01', '4297f44b13955235245b2497399d7a93', 'employ01@gmail.com'),
(2, 'BossKhang', '4297f44b13955235245b2497399d7a93', 'haduykhang109@gmail.com'),
(3, 'employ02', '4297f44b13955235245b2497399d7a93', 'employ02@gmail.com'),
(4, 'Long', '4297f44b13955235245b2497399d7a93', 'long@gmail.com'),
(5, 'ChoKhang', 'e10adc3949ba59abbe56e057f20f883e', 'chokhang@sforum.vn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
