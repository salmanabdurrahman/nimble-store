-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 04:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nimble_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL CHECK (`quantity` > 0),
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `added_at`) VALUES
(1, 1, 3, 1, '2024-12-30 12:58:41'),
(2, 1, 21, 1, '2024-12-30 12:58:41'),
(3, 3, 6, 1, '2024-12-30 14:20:36'),
(4, 3, 9, 1, '2024-12-30 14:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'Basketball'),
(3, 'Casual'),
(5, 'Outdoor'),
(1, 'Runners'),
(2, 'Sneakers');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL CHECK (`total_price` >= 0),
  `status` enum('pending','completed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_products`
--

CREATE TABLE `checkout_products` (
  `checkout_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL CHECK (`quantity` > 0),
  `sub_total` decimal(10,2) NOT NULL CHECK (`sub_total` >= 0),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`) VALUES
(3, '232321'),
(4, '234D41'),
(1, '4A69E2'),
(5, 'C9CCC6'),
(2, 'FFA52F');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL CHECK (`rating` between 1 and 5),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `comment`, `rating`, `created_at`) VALUES
(1, 21, 1, 'lerolero', 5, '2024-12-28 12:54:43'),
(3, 22, 2, 'nyoba sparkle', 5, '2024-12-28 13:45:45'),
(4, 10, 2, 'coba rating', 5, '2024-12-28 13:46:30'),
(5, 10, 2, 'kurang memuaskann', 1, '2024-12-28 13:46:47'),
(7, 1, 2, 'testing comment', 5, '2024-12-30 07:08:07'),
(8, 21, 3, 'Keren banget kata ilham', 4, '2024-12-30 07:36:38'),
(9, 13, 1, 'joss gandos', 5, '2024-12-30 11:16:20'),
(10, 21, 1, 'lumayan bagus', 3, '2024-12-30 11:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Salman', 'salman@gmail.com', 'Nice dude ????', '2024-12-30 07:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL CHECK (`price` >= 0),
  `stock` int(11) NOT NULL CHECK (`stock` >= 0),
  `image_url` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `size_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image_url`, `category_id`, `size_id`, `color_id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Adidas Ultra Boost', 'Running shoes with boost cushioning for maximum comfort.', 150.00, 21, 'adidas Men\'s Daily 3.0 Sneaker_GREY.jpg', 1, 3, 1, 'adidas', '2024-12-09 09:23:51', '2024-12-30 05:44:09'),
(2, 'Nike Air Max 90', 'Stylish and comfortable sneakers with Air Max technology.', 120.00, 15, 'adidas Men\'s Ultraboost 1.0 Shoe_WHTIE.jpg', 2, 4, 2, 'nike', '2024-12-09 09:23:51', '2024-12-11 07:41:15'),
(3, 'Puma Suede Classic', 'Casual shoes with a classic design.', 80.00, 30, 'PUMA Men\'s Axelion Cross Trainer_BLACK.jpg', 3, 5, 3, 'puma', '2024-12-09 09:23:51', '2024-12-11 07:41:30'),
(4, 'Reebok Classic Leather', 'Timeless design with soft leather for comfort.', 90.00, 25, 'Reebok Unisex Adult Classic Leather_BLACK.jpg', 3, 2, 4, 'reebok', '2024-12-09 09:23:51', '2024-12-11 07:42:30'),
(5, 'Converse Chuck Taylor', 'Iconic sneakers with a canvas upper and rubber sole.', 60.00, 40, 'Reebok Unisex Adult Classic Leather_BLUE.jpg', 2, 6, 5, 'converse', '2024-12-09 09:23:51', '2024-12-11 07:42:39'),
(6, 'New Balance 574', 'Classic runners with a stylish look and great support.', 110.00, 18, 'Reebok Unisex Adult Classic Leather_GREY.jpg', 1, 7, 1, 'new balance', '2024-12-09 09:23:51', '2024-12-11 07:42:55'),
(7, 'Nike Air Jordan 1', 'Basketball shoes designed for performance and style.', 160.00, 10, 'Reebok Unisex Adult Classic Leather_MAROON.jpg', 4, 8, 2, 'nike', '2024-12-09 09:23:51', '2024-12-11 07:43:06'),
(8, 'Reebok Zig Kinetica', 'Performance shoes designed for energy return.', 140.00, 12, 'Reebok Unisex Adult Classic Leather_WHTIE.jpg', 1, 9, 3, 'reebok', '2024-12-09 09:23:51', '2024-12-11 07:43:22'),
(9, 'Adidas Terrex Free Hiker', 'Outdoor hiking shoes built for tough terrains.', 180.00, 14, 'Reebok Unisex Adult Court Advance_BLACK.jpg', 5, 4, 4, 'adidas', '2024-12-09 09:23:51', '2024-12-11 07:43:33'),
(10, 'Puma RS-X3', 'Casual sneakers with a bold design.', 110.00, 20, 'Reebok Unisex Adult Court Advance_GREY.jpg', 3, 5, 5, 'puma', '2024-12-09 09:23:51', '2024-12-11 07:43:41'),
(13, 'Testing nama 1', 'Testing deskripsi 1', 46.00, 6, 'product4.png', 3, 3, 3, 'reebok', '2024-12-19 08:31:14', '2024-12-19 08:31:14'),
(21, 'testing abbad', 'testing deskripsi abbad', 2000.00, 1, 'Rectangle_10.png', 4, 6, 5, 'adidas', '2024-12-24 07:10:11', '2024-12-24 11:06:25'),
(22, 'testing ga ganti gambar', 'testing sparkle', 6900.00, 69, 'sparkle.jpg', 1, 3, 5, 'nike', '2024-12-25 12:28:01', '2024-12-30 05:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, '38'),
(2, '39'),
(3, '40'),
(4, '41'),
(5, '42'),
(6, '43'),
(7, '44'),
(8, '45'),
(9, '46'),
(10, '47');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL CHECK (`email` like '%_@__%.__%'),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`) VALUES
(1, 'salman@gmail.com', '2024-12-30 07:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address_province` varchar(255) DEFAULT NULL,
  `address_city` varchar(255) DEFAULT NULL,
  `address_district` varchar(255) DEFAULT NULL,
  `address_subdistrict` varchar(255) DEFAULT NULL,
  `street_name` varchar(255) DEFAULT NULL,
  `address_description` text DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL CHECK (`zip_code` regexp '^[0-9]{5,10}$'),
  `profile_picture` varchar(255) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `gender`, `phone`, `address_province`, `address_city`, `address_district`, `address_subdistrict`, `street_name`, `address_description`, `zip_code`, `profile_picture`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Rifan Mabel Tofani', 'Rifan', 'aaa@gmail.com', '123', 'male', '081213800436', '                                                                                                                                                                                                                                                            Jaw', 'Bogor', 'Ciomas', 'Ciomas', 'jl. sukamulya 2', 'tembok abu', '16610', 'Banner_2.png', 'user', '2024-12-26 06:17:34', '2024-12-30 11:15:52'),
(2, 'admin', 'admin', 'admin@outlook.com', 'admin', 'male', '0869', 'kepo lu', 'kepo lu', 'kepo lu', 'kepo lu', 'kepo lu', 'kepo lu', '16610', 'senku_einstein_pose1.jpg', 'admin', '2024-12-27 08:24:36', '2024-12-30 11:34:20'),
(3, 'pap', 'pap', 'pap@gmail.com', '123', 'male', '0822', 'shrgerhfehsas                   ', 'sas', 'p', 's', 's', 'as', '55111', NULL, 'user', '2024-12-30 06:11:03', '2024-12-30 11:45:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `checkout_products`
--
ALTER TABLE `checkout_products`
  ADD PRIMARY KEY (`checkout_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `checkout_products`
--
ALTER TABLE `checkout_products`
  ADD CONSTRAINT `checkout_products_ibfk_1` FOREIGN KEY (`checkout_id`) REFERENCES `checkout` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `checkout_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
