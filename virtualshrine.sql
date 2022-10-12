-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 09:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtualshrine`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `audio_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `audio` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Active\r\n1 = Inactive\r\n2 = Archived',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`audio_id`, `category_id`, `title`, `audio`, `status`, `created_at`) VALUES
(10, 1, 'Banga', 'audio-6334d2d4043af6.64775242.mp3', 0, '2022-09-28 23:07:15'),
(11, 1, 'Audio Guide 2', 'audio-633ee0c633fe79.79346726.mp3', 0, '2022-10-06 14:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `action` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditlog`
--

INSERT INTO `auditlog` (`id`, `username`, `action`, `created_at`) VALUES
(19, 'kristhayne', 'Updated an information', '2022-10-06 21:39:09'),
(20, 'gelo', 'Updated a Gallery Content', '2022-10-06 21:51:23'),
(21, 'takuto', 'Added an Audio Content', '2022-10-06 22:05:58'),
(22, 'kristhayne', 'Recovered an Audio Guide Content', '2022-10-06 22:34:51'),
(23, 'kristhayne', 'Archived a Category', '2022-10-06 22:38:22'),
(24, 'kristhayne', 'Recovered an Audio Guide Content', '2022-10-06 22:38:29'),
(25, 'kristhayne', 'Archived a Gallery Content', '2022-10-06 22:40:05'),
(26, 'kristhayne', 'Recovered a Gallery Content', '2022-10-06 22:40:18'),
(27, 'kristhayne', 'Updated their Profile', '2022-10-07 09:21:34'),
(28, 'kristhayne', 'Updated their Profile', '2022-10-07 16:52:50'),
(29, 'kristhayne', 'Updated their Profile', '2022-10-07 17:06:15'),
(30, 'kristhayne', 'Updated their Profile', '2022-10-07 17:18:10'),
(31, 'kristhayne', 'Updated their Profile', '2022-10-07 17:19:49'),
(32, 'kristhayne', 'Updated their Profile', '2022-10-07 18:04:53'),
(33, 'kristhayne', 'Updated their Profile', '2022-10-07 18:15:17'),
(34, 'kristhayne', 'Updated their Profile', '2022-10-07 18:16:42'),
(35, 'kristhayne', 'Updated their Profile', '2022-10-07 18:17:39'),
(36, 'kristhayne', 'Updated their Profile', '2022-10-07 18:20:31'),
(37, 'kristhayne', 'Updated their Profile', '2022-10-07 18:22:45'),
(38, 'kristhayne', 'Updated their Profile', '2022-10-07 18:24:16'),
(39, 'kristhayne', 'Updated their Profile', '2022-10-07 18:59:17'),
(40, 'gelo', 'Confirmed a Booking', '2022-10-07 19:09:38'),
(41, 'kristhayne', 'Added a Gallery Content', '2022-10-07 22:12:35'),
(42, 'kristhayne', 'Added a Gallery Content', '2022-10-08 11:54:16'),
(43, 'kristhayne', 'Updated a Category', '2022-10-10 17:55:38'),
(44, 'kristhayne', 'Updated a Category', '2022-10-10 18:01:19'),
(45, 'kristhayne', 'Updated a Category', '2022-10-10 18:03:17'),
(46, 'kristhayne', 'Updated a Category', '2022-10-10 18:04:12'),
(47, 'kristhayne', 'Updated a Gallery Content', '2022-10-10 18:04:37'),
(48, 'kristhayne', 'Updated a Category', '2022-10-10 18:05:50'),
(49, 'kristhayne', 'Updated an information', '2022-10-10 18:19:43'),
(50, 'kristhayne', 'Updated a Category', '2022-10-10 18:24:13'),
(51, 'kristhayne', 'Updated a Category', '2022-10-10 18:38:29'),
(52, 'kristhayne', 'Updated a Category', '2022-10-11 13:22:14'),
(53, 'kristhayne', 'Updated a Category', '2022-10-11 13:25:25'),
(54, 'kristhayne', 'Updated a Category', '2022-10-11 13:27:07'),
(55, 'kristhayne', 'Updated a Category', '2022-10-11 13:27:17'),
(56, 'kristhayne', 'Updated a Category', '2022-10-11 13:27:29'),
(57, 'kristhayne', 'Updated a Category', '2022-10-11 13:28:17'),
(58, 'kristhayne', 'Updated a Category', '2022-10-11 13:28:37'),
(59, 'kristhayne', 'Updated a Category', '2022-10-11 13:28:47'),
(60, 'kristhayne', 'Updated a Category', '2022-10-11 13:54:08'),
(61, 'kristhayne', 'Updated a Category', '2022-10-11 13:59:01'),
(62, 'kristhayne', 'Updated a Category', '2022-10-11 14:00:17'),
(63, 'kristhayne', 'Updated a Category', '2022-10-11 14:01:15'),
(64, 'kristhayne', 'Updated a Category', '2022-10-11 14:41:39'),
(65, 'kristhayne', 'Updated a Category', '2022-10-11 15:06:52'),
(66, 'kristhayne', 'Updated a Gallery Content', '2022-10-11 15:18:29'),
(67, 'kristhayne', 'Updated an Admin Information', '2022-10-12 10:52:29'),
(68, 'kristhayne', 'Archived a Admin Data', '2022-10-12 10:56:00'),
(69, 'kristhayne', 'Recovered a User Data', '2022-10-12 11:28:15'),
(70, 'kristhayne', 'Confirmed a Booking', '2022-10-12 11:42:27'),
(71, 'kristhayne', 'Rejected a Booking', '2022-10-12 11:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id_image` varchar(200) NOT NULL,
  `org_name` varchar(200) NOT NULL,
  `date_visit` varchar(100) NOT NULL,
  `time_visit` varchar(100) NOT NULL,
  `no_visitors` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Pending\r\n1 = Approved\r\n2 = Rejected'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `fname`, `lname`, `phone_no`, `email`, `id_image`, `org_name`, `date_visit`, `time_visit`, `no_visitors`, `status`) VALUES
(1, 'Visitor', 'Sample', '09970639196', 'kjnacional11@gmail.com', '', 'Bulsu', 'September 20, 2022', '10:00', 4, 1),
(2, 'Samantha', 'Raine', '09021989876', 'kjnacionalqqsa@gmail.com', '', 'Antique National School', '2019115479', '8:50', 4, 2),
(3, 'Daon', 'Jung', '09456789045', 'jungda@sample.email', '', 'Bimsa', 'September 29, 2022', '9:00', 2, 1),
(4, 'VirtualShrine', 'Visitor', '09123456789', 'sample@gmail.com', '1665546061.png', 'SAMPLE', '2022-10-22', 'PM', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0 = Visible\r\n1 = Hidden\r\n2 = Archived',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `image`, `status`, `created_at`) VALUES
(1, 'Kaginhawaan (Prosperity)', 'kaginhawaan-gallery', 'This gallery displays the relics belonging to the early Filipinos before the Spanish colonization.', 'Kaginhawaan (Prosperity)', 'This gallery displays the relics belonging to the early Filipinos before the Spanish colonization.', 'Kaginhawaan Prosperity', '1665465734.jpg', 0, '2022-09-29 03:42:41'),
(5, 'Paniniil (Oppression)', 'VirtualShrine-Paniniil-Oppression-gallery', 'Displays events that happened during the Spanish colonization', 'Paniniil (Oppression)', 'Displays events that happened during the Spanish colonization', 'Paniniil Oppression', '1665465925.jpg', 0, '2022-09-29 03:44:10'),
(6, 'Pagbabagong-Puri (Revolution)', 'pagbabagong-puri-revolution', 'Displays the first chapter of revolution and became part of our mountains in our nationhood as a shelter or refuge for revolutionaries whenever there is trouble.', 'Pagbabagong-Puri (Revolution)', 'Displays the first chapter of revolution and became part of our mountains in our nationhood as a shelter or refuge for revolutionaries whenever there is trouble.', 'pagbabagong-puri revolution', '1665468075.jpg', 0, '2022-09-29 03:44:59'),
(7, 'Pagbubuo ng Bayan(Making the Nation)', 'Pagbubuo-ng-Bayan', 'Displays the narratives about the events under the rule of colonizers and the tenure of the past presidents of the Philippines', 'Pagbubuo ng Bayan(Making the Nation)', 'Displays the narratives about the events under the rule of colonizers and the tenure of the past presidents of the Philippines', 'Pagbubuo ng Bayan, Making the Nation', '1665467941.jpg', 0, '2022-09-29 03:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `year` varchar(50) NOT NULL,
  `object_type` varchar(100) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0 = Active\r\n1 = Hidden\r\n2 = Archived',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `year`, `object_type`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(38, 1, 'Banga', 'Banga-vs-', '<p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered <a href=\"https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA&source=gmail&ust=1664496654487000&usg=AOvVaw104s5aY_Ax3EHv5KOzADsf\" style=\"color: rgb(234, 76, 137); font-family: helvetica, sans-serif; text-decoration: underline; margin: 0px; padding: 0px;\">product design strategy.</a>.</p><p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Whether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu</p>', '', '0', '1664413687.jpg', 'Banga', 'Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered product design strategy..\r\n\r\nWhether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu', 'Banga', 0, '2022-09-29 01:08:07'),
(39, 1, 'Vase', 'V-ase', '<p>fgshevfbjhnjawdnjka</p>', '', '0', '1665396277.jpg', 'Vase', 'fsfhsbmdhjkw', 'vase', 0, '2022-10-07 14:12:35'),
(40, 5, 'Bajo La Campana', 'Bajo-La-Campana', '<p>sample test</p>', '1999', 'artifact', '1665472709.jpg', 'Bajo La Campana', 'sample text', 'Bajo La Campana', 0, '2022-10-08 03:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = head admin\r\n1 = assistant admin',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = active 1 = archived',
  `profileImage` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `role_as`, `status`, `profileImage`, `created_at`) VALUES
(1, 'Kristine Joy', 'Nacional', 'kristhayne', 'kjnacional11@gmail.com', 'pass1', 0, 0, '', '2022-09-13 11:34:58'),
(2, 'Angelo', 'Mauricio', 'gelo', 'angelo@gmail.com', 'pass2', 1, 1, '', '2022-09-13 11:53:13'),
(3, 'sample', 'Admin', 'samplead', '', 'passsample', 1, 1, '', '2022-09-13 12:24:18'),
(4, 'Taku', 'Asami', 'takuto', '', 'password', 1, 0, '', '2022-09-14 16:36:29'),
(5, 'Rovi Keith', 'Navarro', 'rovi', 'rovi@gmail.com', 'pass3', 1, 1, '', '2022-10-04 08:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_archive`
--

CREATE TABLE `user_archive` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `profileImage` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`audio_id`);

--
-- Indexes for table `auditlog`
--
ALTER TABLE `auditlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `audio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auditlog`
--
ALTER TABLE `auditlog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
