-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 08:10 AM
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
-- Table structure for table `ctsanpham`
--

CREATE TABLE `ctsanpham` (
  `id_sp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giam_gia` int(11) DEFAULT NULL,
  `mo_ta` varchar(4000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gioi_thieu` varchar(4000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `chi_tiet` varchar(4000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bao_hanh` int(11) NOT NULL,
  `thuong_hieu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mau_sac` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuong_thich` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ctsanpham`
--

INSERT INTO `ctsanpham` (`id_sp`, `id`, `giam_gia`, `mo_ta`, `gioi_thieu`, `chi_tiet`, `bao_hanh`, `thuong_hieu`, `label`, `mau_sac`, `loai`, `tuong_thich`) VALUES
('BP03', 'KB03', 10, '<p>- Loại tai nghe: Tai nghe chụp đầu </p>\r\n<p>- Khối lượng: 300 gram</p>\r\n<p>- Kết nối: jack cắm 3.5mm</p>\r\n<p>- Tốc độ phản hồi: 500hz/1ms</p>\r\n<p>- Thiết kế: chụp tai </p>\r\n<p>- Phụ kiền đi kèm: không có</p>', 'Giới thiệu về Corsair\r\n                        Corsair Components, Inc. (được cách điệu là CORSAIR) là một công ty phần cứng và thiết bị ngoại vi máy tính của Mỹ có trụ sở tại Fremont, California. Công ty được thành lập tại California vào tháng 1 năm 1994 và được tái hợp nhất tại Delaware vào năm 2007. Ngoài trụ sở chính ở Fremont, California, Corsair duy trì một cơ sở sản xuất tại thành phố Đào Viên, Đài Loan, để lắp ráp, thử nghiệm và đóng gói các sản phẩm chọn lọc, và quản lý phân phối khu vực châu Á, Hoa Kỳ và châu Âu. Họ cũng đặt nhiều văn phòng bán hàng và tiếp thị trên khắp nước Mỹ cũng như một số quốc gia châu Âu và châu Á.', 'Là loại bàn phím cơ không dây với layout tenkeless (lược bỏ phần numpad) gọn gàng  cùng với khối lượng chỉ 1,09kg, chúng ta có thể hiểu khá rõ ràng ý đồ thiết kế Corsair \r\n                                                K63 Wireless là phục vụ tiện lợi tối đa cho nhu cầu di động. Tất nhiên, khác với thiết\r\n                                                kế của một bàn phím có dây truyền thống, Corsair K63 Wireless có thêm 2 đèn báo nguồn \r\n                                                và sóng không dây, bên cạnh đèn capslock và scroll-lock.', 24, 'Cosair', 'K63', 'Đen', 'Không dây', 'Tất cả');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img_1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_nhan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `price`, `img`, `img_1`, `img_2`, `ngay_nhan`) VALUES
('HP01', 'Headphone Hyper X', 350000, 'HP01.jpg', '', '', '0000-00-00'),
('KB01', 'Fuhlen J60', 850000, 'KB01.jpg', '', '', '0000-00-00'),
('KB02', 'Bàn phím Glorious GMMK', 550000, 'KB02.jpg', '', '', '0000-00-00'),
('KB03', 'Bàn phím Cosair', 1200000, 'KB03_1.jpg', 'KB03_1.jpg', 'KB03_2.jpg', '2018-11-22'),
('Lap01', 'ASUS F555L Laptop', 14350000, 'Lap01.jpg', '', '', '0000-00-00'),
('Moni01', '69inch Mega Monitor', 1200000, 'Moni01.jpg', '', '', '0000-00-00'),
('Mse01', 'Razor Mouse', 1100000, 'Mouse01.jpg', '', '', '0000-00-00'),
('Mse02', 'Gamming Mouse', 800000, 'Mouse02.jpg', '', '', '0000-00-00'),
('PC01', 'Gamming PC', 11000000, 'PC01.jpg', '', '', '0000-00-00'),
('PC02', 'FullSet Gamming PC', 15000000, 'PC02.jpg', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `ctsanpham`
--
ALTER TABLE `ctsanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id` (`id`);

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
