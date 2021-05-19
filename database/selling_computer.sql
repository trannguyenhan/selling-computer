-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2021 at 10:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selling_computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `date_bill` datetime DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

CREATE TABLE `cart_products` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `computer_mouse_products`
--

CREATE TABLE `computer_mouse_products` (
  `computer_mouse_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `standard_connection` tinyint(1) DEFAULT NULL,
  `connection_protocol` varchar(50) DEFAULT NULL,
  `is_led` tinyint(1) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_mouse_products`
--

INSERT INTO `computer_mouse_products` (`computer_mouse_product_id`, `product_id`, `standard_connection`, `connection_protocol`, `is_led`, `size`) VALUES
(2, 20001, 1, 'USB Receiver', 1, '3.89 in  x 2.36 in  x 1.54 in');

-- --------------------------------------------------------

--
-- Table structure for table `computer_products`
--

CREATE TABLE `computer_products` (
  `computer_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `s_cpu` varchar(50) DEFAULT NULL,
  `s_ram` varchar(50) DEFAULT NULL,
  `s_storage` int(11) DEFAULT NULL,
  `screen` varchar(50) DEFAULT NULL,
  `s_card` varchar(50) DEFAULT NULL,
  `main_connection` varchar(50) DEFAULT NULL,
  `os` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_products`
--

INSERT INTO `computer_products` (`computer_product_id`, `product_id`, `s_cpu`, `s_ram`, `s_storage`, `screen`, `s_card`, `main_connection`, `os`) VALUES
(10, 10001, 'AMD Ryzen 7 3700U', '8GB DDR4 bus 2400MHz', 512, '14.0\" FHD IPS (1920x1080)', 'AMD Radeon Vega 10', ' USB-C 3.0', 'Windows 10 Home'),
(12, 10002, 'Intel Core i3-1115G4', '4GB DDR4 bus 3200 MHz', 256, '15.6\\\" FHD IPS', 'Intel UHD G4', 'USB-C 3.2', 'Windows 10 Home SL'),
(13, 10003, 'Intel Core i5-9300H', '8GB DDR4 bus 2666 MHz', 256, '15.6\" FHD IPS', 'NVIDIA GeForce GTX 1650 4GB', 'USB-A, C', 'Windows 10'),
(14, 30001, 'Ryzen 7 PRO 2700', '8GB DDR4 bus 2666 MHz', 256, '', 'Nvidia Geforce GT730 2GB', 'USB-A, SD', 'Windows 10'),
(15, 10004, 'Intel Core i5 10300H', '8GB DDR4 bus 2933 MHz', 256, '15.6\" FHD+ IPS', ' Intel UHD 630', 'USB-C', 'Windows 10');

-- --------------------------------------------------------

--
-- Table structure for table `evaluate`
--

CREATE TABLE `evaluate` (
  `user_name` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `star` int(11) DEFAULT NULL,
  `your_comment` text DEFAULT NULL,
  `date_comment` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `user_name` varchar(50) NOT NULL,
  `your_password` varchar(50) DEFAULT NULL,
  `your_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`user_name`, `your_password`, `your_name`) VALUES
('hoangbui', 'viethoang123', 'BuiVietHoang'),
('huy0628', '123456', 'Nguyen Quang Huy');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `laptop_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `battery` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`laptop_id`, `product_id`, `battery`) VALUES
(2, 10001, 37),
(3, 10002, 41),
(4, 10003, 59),
(5, 10004, 56);

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `pc_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `i_case` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`pc_id`, `product_id`, `i_case`) VALUES
(4, 30001, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `weigh` double DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `number_of_product` int(11) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `p_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `model`, `image`, `price`, `weigh`, `color`, `number_of_product`, `supplier`, `p_description`) VALUES
(10001, 'AVITA Liber V14 AMD', 'https://lumen.thinkpro.vn//backend/uploads/product/color_images/2021/4/23/liberv14a-summerpink-1.jpg', 14990000, 1.28, 'Pink', 100, 'AVITA', NULL),
(10002, 'HP Pavilion 15 (Intel Gen 11)', 'https://lumen.thinkpro.vn//backend/uploads/product/color_images/2021/3/17/pavi15g11silver-1.jpg', 13790000, 1.75, 'Grey', 100, 'HP', NULL),
(10003, 'Acer Nitro 5 2019', 'https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/7/16/acer-nitro-5-Nitro501NF-Adv.jpg', 17490000, 2.45, 'Black', 100, 'Acer', ''),
(10004, 'Dell XPS 15 9500', 'https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/9/6/Dell-XPS-15-9500-1.jpg', 35990000, 2, 'Silver', 100, 'Dell', NULL),
(20001, 'Chuột Logitech M185', 'https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/9/15/m185-01jpg', 229000, 0.076, 'Black', 1000, 'Logitech', ''),
(30001, 'Lenovo ThinkCentre M725s SFF', 'https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/7/16/lenovo-thinkcentre-m725s-sff-ThinkCentreM725sSFF01NO-pwN.jpg', 15990000, 8, 'Black', 50, 'Lenovo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`cart_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `computer_mouse_products`
--
ALTER TABLE `computer_mouse_products`
  ADD PRIMARY KEY (`computer_mouse_product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `computer_products`
--
ALTER TABLE `computer_products`
  ADD PRIMARY KEY (`computer_product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`user_name`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`laptop_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `computer_mouse_products`
--
ALTER TABLE `computer_mouse_products`
  MODIFY `computer_mouse_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `computer_products`
--
ALTER TABLE `computer_products`
  MODIFY `computer_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `guest` (`user_name`);

--
-- Constraints for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD CONSTRAINT `cart_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `cart_products_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `computer_mouse_products`
--
ALTER TABLE `computer_mouse_products`
  ADD CONSTRAINT `computer_mouse_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `computer_products`
--
ALTER TABLE `computer_products`
  ADD CONSTRAINT `computer_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `guest` (`user_name`),
  ADD CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

alter table products
add dis boolean;

alter table guest
add address text,
add telephone text;

drop table evaluate;
create table evaluate (
	evaluate_id int not null auto_increment,
	user_name varchar(50) not null,
    product_id int not null,
    star int,
    your_comment text,
    date_comment datetime,
    primary key (evaluate_id),
    foreign key (user_name) references guest(user_name),
    foreign key (product_id) references products(product_id)
);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
