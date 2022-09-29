-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 06:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
(10, 1, 'Banga', 'audio-6334d2d4043af6.64775242.mp3', 0, '2022-09-28 23:07:15');

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
(3, 'Daon', 'Jung', '09456789045', 'jungda@sample.email', '', 'Bimsa', 'September 29, 2022', '9:00', 2, 0);

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
  `navbar_status` tinyint(1) DEFAULT 0 COMMENT '0 = visible\r\n1 = hidden',
  `status` tinyint(1) DEFAULT 0 COMMENT '0 = Visible\r\n1 = Hidden\r\n2 = Archived',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`) VALUES
(1, 'GALLERY 1', 'VirtualShrine-Gallery-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Gallery 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Virtual Shrine Gallery 1', 1, 0, '2022-09-29 03:42:41'),
(5, 'GALLERY 2', 'VirtualShrine-Gallery-2-', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Gallery 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Virtual Shrine Gallery 2', 1, 0, '2022-09-29 03:44:10'),
(6, 'GALLERY 3', 'VirtualShrine-Gallery-3-', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Gallery 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'VirtualShrine Gallery 3', 1, 0, '2022-09-29 03:44:59'),
(7, 'Virtual 360', 'VirtualShrine-Virtual-360', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Virtual 360', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'VirtualShrine 360', 1, 0, '2022-09-29 03:46:36');

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

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(38, 1, 'Banga', 'Banga-vs-', '<p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered&nbsp;<a href=\"https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA&amp;source=gmail&amp;ust=1664496654487000&amp;usg=AOvVaw104s5aY_Ax3EHv5KOzADsf\" style=\"color: rgb(234, 76, 137); font-family: helvetica, sans-serif; text-decoration: underline; margin: 0px; padding: 0px;\">product design strategy.</a>.</p><p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Whether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu</p>', '1664413687.jpg', 'Banga', 'Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered product design strategy..\r\n\r\nWhether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu', 'Banga', 0, '2022-09-29 01:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = head admin\r\n1 = assistant admin',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = active 1 = archived',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `role_as`, `status`, `created_at`) VALUES
(1, 'Kristine Joy', 'Nacional', 'kristhayne', 'pass1', 0, 0, '2022-09-13 11:34:58'),
(2, 'Angelo', 'Mauricio', 'Angelo', 'pass2', 1, 1, '2022-09-13 11:53:13'),
(3, 'sample', 'Admin', 'samplead', 'passsample', 1, 1, '2022-09-13 12:24:18'),
(4, 'Taku', 'Asami', 'takuto', 'password', 1, 0, '2022-09-14 16:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_archive`
--

CREATE TABLE `user_archive` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
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
  MODIFY `audio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
