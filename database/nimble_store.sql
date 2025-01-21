-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2025 at 09:51 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cancel_old_pending_checkouts` ()   BEGIN
    UPDATE checkout
    SET status = 'cancelled'
    WHERE status = 'pending' AND TIMESTAMPDIFF(MINUTE, created_at, NOW()) > 1440;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_old_checkout_data` ()   BEGIN
    DELETE FROM checkout
    WHERE status IN ('completed', 'cancelled')
    AND TIMESTAMPDIFF(MINUTE, updated_at, NOW()) > 30;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_order_status` (IN `orderId` INT, IN `newStatus` VARCHAR(20))   BEGIN
    UPDATE checkout
    SET status = newStatus
    WHERE id = orderId;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `count_checkouts_by_status` (`statusInput` VARCHAR(20)) RETURNS INT(11) DETERMINISTIC BEGIN
    DECLARE statusCount INT;
    
    SELECT COUNT(*) INTO statusCount
    FROM checkout
    WHERE status = statusInput;
    
    RETURN statusCount;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `count_pending_checkouts` () RETURNS INT(11) DETERMINISTIC BEGIN
    DECLARE pendingCount INT;
    
    SELECT COUNT(*) INTO pendingCount
    FROM checkout
    WHERE status = 'pending';
    
    RETURN pendingCount;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `generate_order_number` () RETURNS VARCHAR(17) CHARSET utf8mb4 COLLATE utf8mb4_general_ci DETERMINISTIC BEGIN
    DECLARE new_order_number VARCHAR(17);
    DECLARE order_count INT;

    SELECT COUNT(*) + 1 INTO order_count
    FROM checkout
    WHERE DATE(created_at) = CURDATE();

    SET new_order_number = CONCAT(
        DATE_FORMAT(CURDATE(), '%Y%m%d'),
        DATE_FORMAT(NOW(), '%H%i%s'),
        LPAD(order_count, 3, '0')
         
    );

    RETURN new_order_number;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL CHECK (`quantity` > 0),
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_size_id`, `quantity`, `added_at`) VALUES
(59, 2, 1, 1, '2025-01-09 11:51:35'),
(78, 4, 1, 1, '2025-01-15 08:37:31'),
(136, 1, 11, 1, '2025-01-20 10:16:27');

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
  `product_size_id` int(11) NOT NULL,
  `status` enum('pending','completed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_number` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `user_id`, `product_size_id`, `status`, `created_at`, `updated_at`, `order_number`) VALUES
(50, 1, 7, 'cancelled', '2025-01-19 10:20:40', '2025-01-19 10:31:48', '20250119172040003'),
(51, 1, 5, 'completed', '2025-01-19 11:41:05', '2025-01-19 11:58:19', '20250119184105003'),
(53, 1, 14, 'pending', '2025-01-20 05:42:53', '2025-01-20 05:42:53', '20250120124253001'),
(54, 1, 8, 'cancelled', '2025-01-20 05:47:49', '2025-01-20 05:49:27', '20250120124749002'),
(55, 1, 1, 'pending', '2025-01-20 09:55:14', '2025-01-20 09:55:14', '20250120165514003'),
(56, 1, 6, 'pending', '2025-01-20 10:05:43', '2025-01-20 10:05:43', '20250120170543004'),
(57, 1, 1, 'pending', '2025-01-20 10:05:43', '2025-01-20 10:05:43', '20250120170543004'),
(58, 1, 10, 'pending', '2025-01-20 10:05:43', '2025-01-20 10:05:43', '20250120170543004'),
(59, 1, 16, 'pending', '2025-01-20 10:05:43', '2025-01-20 10:05:43', '20250120170543004'),
(60, 5, 16, 'pending', '2025-01-20 10:12:39', '2025-01-20 10:12:39', '20250120171239008'),
(61, 5, 8, 'pending', '2025-01-20 10:12:39', '2025-01-20 10:12:39', '20250120171239008');

--
-- Triggers `checkout`
--
DELIMITER $$
CREATE TRIGGER `after_checkout_insert` AFTER INSERT ON `checkout` FOR EACH ROW BEGIN
    DELETE FROM cart WHERE user_id = NEW.user_id;
END
$$
DELIMITER ;

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
(3, '#232321'),
(4, '#234D41'),
(1, '#4A69E2'),
(5, '#C9CCC6'),
(2, '#FFA52F');

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
(4, 10, 2, 'coba rating', 5, '2024-12-28 13:46:30'),
(5, 10, 2, 'kurang memuaskann', 1, '2024-12-28 13:46:47'),
(7, 1, 2, 'testing comment', 5, '2024-12-30 07:08:07'),
(14, 8, 4, 'qdqwdqwdw', 5, '2025-01-15 09:18:48');

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
(1, 'Salman', 'salman@gmail.com', 'Nice dude ????', '2024-12-30 07:42:03'),
(2, 'Aziz', 'aziz@gmail.com', 'Halooo', '2024-12-31 02:23:39');

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
(1, 'Adidas Ultra Boost', 'Running shoes with boost cushioning for maximum comfort.', 150.00, 22, 'adidas Men\'s Daily 3.0 Sneaker_GREY.jpg', 1, NULL, 1, 'adidas', '2024-12-09 09:23:51', '2025-01-20 06:02:08'),
(2, 'Nike Air Max 90', 'Stylish and comfortable sneakers with Air Max technology.', 120.00, 15, 'adidas Men\'s Ultraboost 1.0 Shoe_WHTIE.jpg', 2, 4, 2, 'nike', '2024-12-09 09:23:51', '2024-12-11 07:41:15'),
(3, 'Puma Suede Classic', 'Casual shoes with a classic design.', 80.00, 30, 'PUMA Men\'s Axelion Cross Trainer_BLACK.jpg', 3, 5, 3, 'puma', '2024-12-09 09:23:51', '2024-12-11 07:41:30'),
(4, 'Reebok Classic Leather', 'Timeless design with soft leather for comfort.', 90.00, 25, 'Reebok Unisex Adult Classic Leather_BLACK.jpg', 3, 2, 4, 'reebok', '2024-12-09 09:23:51', '2024-12-11 07:42:30'),
(5, 'Converse Chuck Taylor', 'Iconic sneakers with a canvas upper and rubber sole.', 60.00, 40, 'Reebok Unisex Adult Classic Leather_BLUE.jpg', 2, 6, 5, 'converse', '2024-12-09 09:23:51', '2024-12-11 07:42:39'),
(6, 'New Balance 574', 'Classic runners with a stylish look and great support.', 110.00, 18, 'Reebok Unisex Adult Classic Leather_GREY.jpg', 1, 7, 1, 'new balance', '2024-12-09 09:23:51', '2024-12-11 07:42:55'),
(7, 'Nike Air Jordan 1', 'Basketball shoes designed for performance and style.', 160.00, 10, 'Reebok Unisex Adult Classic Leather_MAROON.jpg', 4, 8, 2, 'nike', '2024-12-09 09:23:51', '2024-12-11 07:43:06'),
(8, 'Reebok Zig Kinetica', 'Performance shoes designed for energy return.', 140.00, 12, 'Reebok Unisex Adult Classic Leather_WHTIE.jpg', 1, 9, 3, 'reebok', '2024-12-09 09:23:51', '2024-12-11 07:43:22'),
(9, 'Adidas Terrex Free Hiker', 'Outdoor hiking shoes built for tough terrains.', 180.00, 14, 'Reebok Unisex Adult Court Advance_BLACK.jpg', 5, 4, 4, 'adidas', '2024-12-09 09:23:51', '2024-12-11 07:43:33'),
(10, 'Puma RS-X3', 'Casual sneakers with a bold design.', 110.00, 20, 'Reebok Unisex Adult Court Advance_GREY.jpg', 3, 5, 5, 'puma', '2024-12-09 09:23:51', '2024-12-11 07:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `id_sizes` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `id_products`, `id_sizes`, `created_at`) VALUES
(1, 1, 5, '2025-01-08 17:39:46'),
(5, 1, 8, '2025-01-08 18:41:00'),
(6, 2, 1, '2025-01-09 17:27:33'),
(7, 2, 2, '2025-01-09 17:27:43'),
(8, 2, 3, '2025-01-09 17:27:50'),
(9, 3, 1, '2025-01-09 18:20:41'),
(10, 3, 2, '2025-01-09 18:20:45'),
(11, 3, 3, '2025-01-09 18:20:52'),
(12, 3, 4, '2025-01-09 18:20:56'),
(14, 1, 9, '2025-01-09 18:29:21'),
(16, 1, 10, '2025-01-09 18:35:37'),
(17, 6, 1, '2025-01-11 13:33:49'),
(19, 6, 3, '2025-01-11 13:34:03'),
(20, 6, 4, '2025-01-11 13:34:08'),
(25, 1, 1, '2025-01-20 12:57:46');

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
(1, 'salman@gmail.com', '2024-12-30 07:41:34'),
(2, 'awo@gmail.com', '2024-12-31 02:01:54'),
(3, 'aziz@gmail.com', '2024-12-31 02:23:08'),
(5, 'galih@gmail.com', '2024-12-31 02:36:53');

--
-- Triggers `subscribers`
--
DELIMITER $$
CREATE TRIGGER `prevent_duplicate_email_in_subscribers` BEFORE INSERT ON `subscribers` FOR EACH ROW BEGIN
  DECLARE email_exists INT;
  
  SELECT COUNT(*) INTO email_exists
  FROM subscribers
  WHERE email = NEW.email;
  
  IF email_exists > 0 THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'This email address is already subscribed.';
  END IF;
END
$$
DELIMITER ;

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
(1, 'Rifan Mabel Tofani', 'Rifan', 'aaa@gmail.com', '123', 'other', '081213800436', 'Jawa Barat', 'Bogor', 'Ciomas', 'Ciomass', 'jl. sukamulya 2', 'tembok abu', '16610', 'Banner_2.png', 'user', '2024-12-26 06:17:34', '2025-01-16 10:47:53'),
(2, 'admin', 'admin', 'admin@outlook.com', 'admin', 'male', '0869', 'kepo lu', 'kepo lu', 'kepo lu', 'kepo lu', 'kepo lu', 'kepo lu', '16610', 'senku_einstein_pose1.jpg', 'admin', '2024-12-27 08:24:36', '2024-12-30 11:34:20'),
(4, 'Muhammad Fahmi Aziz', 'Fahmi', 'fahmi@gmail.com', '123', 'male', '086969696969', 'Banten', 'Serang', 'asal', 'asa', 'jl. serang', 'olah!', '46069', NULL, 'user', '2025-01-15 08:37:11', '2025-01-19 09:55:09'),
(5, 'Wisnu Fadhilah', 'Wisnu', 'wisnu@gmail.com', '123', 'male', '081199119119', 'j', 'j', 'j', 'j', 'j', 'j', '19919', NULL, 'user', '2025-01-19 13:02:30', '2025-01-19 13:03:02');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `prevent_user_deletion_with_active_order` BEFORE DELETE ON `users` FOR EACH ROW BEGIN
  DECLARE active_orders INT;
  
  SELECT COUNT(*) INTO active_orders
  FROM checkout
  WHERE user_id = OLD.id AND status = 'pending';
  
  IF active_orders > 0 THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'User cannot be deleted as there are active pending orders.';
  END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_size_ibfk_1` (`product_size_id`);

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
  ADD KEY `user` (`user_id`),
  ADD KEY `checkout_ibfk_1` (`product_size_id`);

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
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`id_products`),
  ADD KEY `size` (`id_sizes`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_ibfk_1` FOREIGN KEY (`product_size_id`) REFERENCES `product_size` (`id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`product_size_id`) REFERENCES `product_size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `size` FOREIGN KEY (`id_sizes`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
