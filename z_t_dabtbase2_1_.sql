-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 05:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `z_t_dabtbase2(1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `user_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `rols` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `Email`, `user_name`, `password`, `rols`, `date`) VALUES
(1, 69248, NULL, 'Hassan Mustafa', '1234	', 0, '2021-08-01 06:54:38'),
(3, 837758674315628526, NULL, 'Ali_Mohmed', '12345	', 0, '2021-08-02 11:28:23'),
(4, 33875211751301, NULL, 'Hassan Mustafa', '12345', 0, '2021-08-01 19:37:05'),
(5, 983004632477, NULL, 'testkig', '678', 0, '2021-08-17 05:03:34'),
(6, 76065, NULL, 'Hassan Mustafa ', '1jk2k3k4', 0, '2021-08-01 20:18:20'),
(7, 1107800, NULL, 'Hassan_Mustafa', 'kjp12345', 0, '2021-08-01 20:20:30'),
(8, 50468498109302, 'Hassan_Mustafa@ieee.org', 'Hassan_Mustafa', 'nsa', 1, '2022-03-17 18:32:23'),
(9, 5658, NULL, 'omer', 'abc123', 0, '2021-08-02 10:32:28'),
(10, 27920432, NULL, 'alaa', 'abc1234', 0, '2021-08-02 15:27:18'),
(11, 5100, NULL, 'bbc', '1234', 0, '2021-08-17 04:21:55'),
(14, 53525320750765, NULL, 'Hassan_Mustafa', '12345', 0, '2021-09-22 14:53:44'),
(15, 208070894060341242, NULL, 'HASM_KJP', '12345', 0, '2021-09-22 14:55:43'),
(16, 3665, NULL, 'Musa', '1234567', 0, '2021-10-03 14:36:22'),
(17, 3816, NULL, 'MUSAB', '123456', 0, '2021-10-29 12:03:45'),
(19, 0, 'hasm7576@gmail.com', 'Hassan', '123456789', 0, '2022-03-17 18:15:48'),
(22, 68952883785873428, 'hasm75576@gmail.com', 'HASM_KJP', '123456', 0, '2022-03-17 18:24:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
