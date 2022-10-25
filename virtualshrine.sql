-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 09:17 PM
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
(11, 1, 'Audio Guide 2', 'audio-633ee0c633fe79.79346726.mp3', 0, '2022-10-06 14:05:58'),
(12, 1, 'sample', 'audio-634677f114e2f2.22328641.mp3', 0, '2022-10-12 08:16:49'),
(13, 1, 'Manunggul Jar', 'audio-63469a88607d35.97577380.mp3', 2, '2022-10-12 10:44:24');

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
(71, 'kristhayne', 'Rejected a Booking', '2022-10-12 11:42:47'),
(72, 'kristhayne', 'Added an Audio Content', '2022-10-12 16:16:49'),
(73, 'kristhayne', 'Updated a Category', '2022-10-12 16:38:48'),
(74, 'kristhayne', 'Updated a Category', '2022-10-12 16:40:29'),
(75, 'gelo', 'Updated a Gallery Content', '2022-10-12 17:05:55'),
(76, 'gelo', 'Updated a Gallery Content', '2022-10-12 17:06:18'),
(77, 'kristhayne', 'Updated an Admin Information', '2022-10-12 18:33:59'),
(78, 'kristhayne', 'Archived a Admin Data', '2022-10-12 18:34:25'),
(79, 'kristhayne', 'Recovered a User Data', '2022-10-12 18:35:04'),
(80, 'kristhayne', 'Confirmed a Booking', '2022-10-12 18:36:17'),
(81, 'kristhayne', 'Added a Gallery Content', '2022-10-12 18:39:56'),
(82, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:40:21'),
(83, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:41:14'),
(84, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:42:29'),
(85, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:42:51'),
(86, 'kristhayne', 'Added an Audio Content', '2022-10-12 18:44:24'),
(87, 'kristhayne', 'Updated a Category', '2022-10-12 18:45:27'),
(88, 'kristhayne', 'Updated a Category', '2022-10-12 18:46:12'),
(89, 'Angelo', 'Confirmed a Booking', '2022-10-12 18:55:51'),
(90, 'kristhayne', 'Updated a Category', '2022-10-12 19:01:07'),
(91, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 19:02:06'),
(92, 'kristhayne', 'Updated their Profile', '2022-10-15 16:13:36'),
(93, 'kristhayne', 'Updated their Profile', '2022-10-15 16:20:59'),
(94, 'kristhayne', 'Updated their Profile', '2022-10-15 17:28:17'),
(95, 'kristhayne', 'Updated their Profile', '2022-10-16 15:26:39'),
(96, 'kristhayne', 'Updated their Profile', '2022-10-16 15:44:54'),
(97, 'kristhayne', 'Added a New Admin', '2022-10-16 15:47:15'),
(98, 'kristhayne', 'Updated their Profile', '2022-10-16 23:12:56'),
(99, 'kristhayne', 'Updated their Profile', '2022-10-19 22:58:47'),
(100, 'kristhayne', 'Updated their Profile', '2022-10-19 23:01:33'),
(101, 'kristhayne', 'Updated their Profile', '2022-10-19 23:13:24'),
(102, 'kristhayne', 'Updated their Profile', '2022-10-19 23:15:13'),
(103, 'kristhayne', 'Updated their Profile', '2022-10-19 23:16:35'),
(104, 'kristhayne', 'Updated their Profile', '2022-10-19 23:16:42'),
(105, 'kristhayne', 'Updated their Profile', '2022-10-19 23:18:35'),
(106, 'kristhayne', 'Updated their Profile', '2022-10-19 23:19:00'),
(107, 'kristhayne', 'Updated their Profile', '2022-10-19 23:21:51'),
(108, 'kristhayne', 'Updated their Profile', '2022-10-19 23:28:03'),
(109, 'kristhayne', 'Updated their Profile', '2022-10-19 23:30:05'),
(110, 'kristhayne', 'Confirmed a Booking', '2022-10-22 18:13:52'),
(111, 'kristhayne', 'Confirmed a Booking', '2022-10-22 18:20:26'),
(112, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:15:46'),
(113, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:16:23'),
(114, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:16:39'),
(115, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:17:08'),
(116, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:20:15'),
(117, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:23:50'),
(118, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:25:20'),
(119, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:27:38'),
(120, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:27:54'),
(121, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:28:28'),
(122, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:29:19'),
(123, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:33:28'),
(124, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:38:31'),
(125, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:40:00'),
(126, 'kristhayne', 'Confirmed a Booking', '2022-10-23 14:57:29'),
(127, 'kristhayne', 'Confirmed a Booking', '2022-10-23 14:57:45'),
(128, 'kristhayne', 'Confirmed a Booking', '2022-10-23 14:58:06'),
(129, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:08:53'),
(130, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:14:10'),
(131, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:18:18'),
(132, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:19:31'),
(133, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:21:01'),
(134, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:22:59'),
(135, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:24:50'),
(136, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:26:42'),
(137, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:33:55'),
(138, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:44:08'),
(139, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:46:59'),
(140, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:50:01'),
(141, 'kristhayne', 'Confirmed a Booking', '2022-10-23 16:46:20'),
(142, 'kristhayne', 'Rejected a Booking', '2022-10-25 17:22:14'),
(143, 'kristhayne', 'Confirmed a Booking', '2022-10-25 21:42:01'),
(144, 'kristhayne', 'Confirmed a Booking', '2022-10-26 00:35:49'),
(145, 'kristhayne', 'Confirmed a Booking', '2022-10-26 00:35:53'),
(146, 'kristhayne', 'Confirmed a Booking', '2022-10-26 00:37:36');

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
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Pending\r\n1 = Approved\r\n2 = Rejected\r\n3 = Rescheduled\r\n4 = Cancelled',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `fname`, `lname`, `phone_no`, `email`, `id_image`, `org_name`, `date_visit`, `time_visit`, `no_visitors`, `status`, `created_at`) VALUES
(1, 'Kristine Joy', 'Nacional', '09970639196', 'kjnacional11@gmail.com', '', 'Bulsu', '30 October 2022', 'PM', 4, 3, '2022-10-25 09:11:38'),
(2, 'Taekyung', 'Song', '09021989876', 'songtaekyung143@gmail.com', '', 'Photographer inc.', '26 October 2022', 'PM', 4, 2, '2022-10-25 09:11:38'),
(3, 'Daon', 'Jung', '09456789045', 'jungda@sample.email', '', 'Bimsa', '27 October 2022', 'AM', 2, 3, '2022-10-25 09:11:38'),
(4, 'VirtualShrine', 'Visitor', '09123456789', 'sample@gmail.com', '1665546061.png', 'SAMPLE', '26 October 2022', 'AM', 7, 1, '2022-10-25 09:11:38'),
(5, 'Sample', 'Visitor', '091345928680', 'sample@gmail.com', '1665571992.png', 'SAMPLE', '26 October 2022', 'PM', 2, 2, '2022-10-25 09:11:38'),
(6, 'Lance Francis', 'Nacional', '09169172067', 'nacionallancefrancis0@gmail.com', '1666409471.png', 'NONE', '26 October 2022', 'PM', 2, 1, '2022-10-25 09:11:38');

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
(1, 'Kaginhawaan (Prosperity)', 'kaginhawaan-gallery-', 'This gallery displays the relics belonging to the early Filipinos before the Spanish colonization.', 'Kaginhawaan (Prosperity)', 'This gallery displays the relics belonging to the early Filipinos before the Spanish colonization.', 'Kaginhawaan Prosperity', '1665465734.jpg', 0, '2022-09-29 03:42:41'),
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
(38, 1, 'BANGA', 'Banga-vs-', '<p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered <a href=\"https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA&source=gmail&ust=1664496654487000&usg=AOvVaw104s5aY_Ax3EHv5KOzADsf\" style=\"color: rgb(234, 76, 137); font-family: helvetica, sans-serif; text-decoration: underline; margin: 0px; padding: 0px;\">product design strategy.</a>.</p><p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Whether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu</p>', '', '0', '1664413687.jpg', 'Banga', 'Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered product design strategy..\r\n\r\nWhether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu', 'Banga', 1, '2022-09-29 01:08:07'),
(39, 1, 'Vase', 'V-ase', '<p style=\"margin: 1em 0px; padding: 0px; font-family: helvetica, sans-serif; max-width: 50em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; font-size: 15px; vertical-align: initial; color: rgb(51, 51, 51);\">Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered <a href=\"https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA&source=gmail&ust=1664496654487000&usg=AOvVaw104s5aY_Ax3EHv5KOzADsf\" style=\"margin: 0px; padding: 0px; font-family: helvetica, sans-serif; text-decoration-skip-ink: auto; color: rgb(234, 76, 137); text-decoration: underline;\">product design strategy.</a>.</p><p style=\"margin: 1em 0px; padding: 0px; font-family: helvetica, sans-serif; max-width: 50em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; font-size: 15px; vertical-align: initial; color: rgb(51, 51, 51);\">Whether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu</p>', '', '0', '1665572526.jpg', 'Vase', 'fsfhsbmdhjkw', 'vase', 0, '2022-10-07 14:12:35'),
(40, 5, 'Bajo La Campana', 'Bajo-La-Campana', '<p>sample test</p>', '1999', 'artifact', '1665472709.jpg', 'Bajo La Campana', 'sample text', 'Bajo La Campana', 0, '2022-10-08 03:54:16'),
(41, 1, 'Manunggul Jar', 'manunggul-jar-1', '<p>The Manunggul Jar is a secondary burial jar excavated from a Neolithic burial site in the Manunggul cave of the Tabon Caves at Lipuun Point in Palawan, Philippines. It dates from 890–710 B.C. and the two prominent figures at the top handle of its cover represent the journey of the soul to the afterlife.<br></p>', '', '', '1665571196.jpg', 'Manunggul Jar', 'The Manunggul Jar is a secondary burial jar excavated from a Neolithic burial site in the Manunggul cave of the Tabon Caves at Lipuun Point in Palawan, Philippines. It dates from 890–710 B.C. and the two prominent figures at the top handle of its cover represent the journey of the soul to the afterlife.', 'Manunggul Jar', 0, '2022-10-12 10:39:56');

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
(2, 'Angelo', 'Mauricio', 'Angelo', 'angelo@gmail.com', 'pass2', 1, 1, '', '2022-09-13 11:53:13'),
(3, 'Sunoo', 'Kim', 'k_sunoo', '', 'enhypen', 1, 1, '', '2022-09-13 12:24:18'),
(4, 'Taku', 'Asami', 'takuto', '', 'password', 1, 0, '', '2022-09-14 16:36:29'),
(5, 'Rovi Keith', 'Navarro', 'rovi', 'rovi@gmail.com', 'pass3', 1, 1, '', '2022-10-04 08:44:51'),
(6, 'Sample', 'User', 'sample_user', 'sample@gmail.com', 'password', 1, 0, NULL, '2022-10-12 10:31:39'),
(7, 'sample', 'Admin', 'samp', 'samp@gmail.com', 'pass', 1, 0, NULL, '2022-10-13 07:59:32'),
(10, 'Jhan Mar', 'Mergal', 'jhanmar', 'jhanmar@gmail.com', 'pass', 1, 0, '../uploads/user/default_pfp.jpeg', '2022-10-16 07:45:35'),
(11, 'Ashley', 'Reyes', 'ashley', 'ashleyreyes@gmail.com', 'ashley', 1, 0, '../uploads/user/default_pfp.jpeg', '2022-10-16 07:47:15');

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
  MODIFY `audio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auditlog`
--
ALTER TABLE `auditlog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
