-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 12:35 PM
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
-- Database: `db_shops`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `description`, `image`) VALUES
(47, 'product01', 500.00, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est aspernatur incidunt dolorem itaque quibusdam laborum accusamus reprehenderit commodi ducimus ex quasi harum nemo, fuga, alias vero illum, quod eius odio.', '2024090966df4ab082679.jpg'),
(48, 'product02', 450.00, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est aspernatur incidunt dolorem itaque quibusdam laborum accusamus reprehenderit commodi ducimus ex quasi harum nemo, fuga, alias vero illum, quod eius odio.', '2024090966df4ad2de65e.png'),
(49, 'product03', 250.00, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est aspernatur incidunt dolorem itaque quibusdam laborum accusamus reprehenderit commodi ducimus ex quasi harum nemo, fuga, alias vero illum, quod eius odio.', '2024090966df4ae2e4453.jpg'),
(50, 'product04', 5600.00, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum blanditiis, accusamus tenetur maxime debitis nostrum atque! Ut, temporibus fuga? Autem recusandae assumenda pariatur, quas a totam unde sunt aliquid eum.', '2024091066e01f3034ab3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$/vCrQ0bHu0IiHKasyqiLOuTShjZG0fASLEk7BIcm3pYp3knAN7e/m'),
(5, 'Ibrahim Hamdy', 'ibrhmhmdy@gmail.com', '$2y$10$.Yij0HwWYPHspZuK38uQbuk6ePcz7l0.1WnAFyUD4xz4q3Nh7Fs2O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
