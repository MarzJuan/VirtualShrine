-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 07:24 AM
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
(10, 1, 'Banga', '1667759404.mp3', 0, '2022-09-28 23:07:15'),
(11, 1, 'Audio Guide 2', 'audio-633ee0c633fe79.79346726.mp3', 0, '2022-10-06 14:05:58'),
(12, 1, 'Sample', 'audio-634677f114e2f2.22328641.mp3', 0, '2022-10-12 08:16:49'),
(13, 1, 'Manunggul Jar', 'audio-63469a88607d35.97577380.mp3', 0, '2022-10-12 10:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `action` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditlog`
--

INSERT INTO `auditlog` (`id`, `username`, `action`, `created_at`, `time`) VALUES
(19, 'kristhayne', 'Updated an information', '2022-10-06 21:39:09', '02:19:47'),
(20, 'gelo', 'Updated a Gallery Content', '2022-10-06 21:51:23', '02:19:47'),
(21, 'takuto', 'Added an Audio Content', '2022-10-06 22:05:58', '02:19:47'),
(22, 'kristhayne', 'Recovered an Audio Guide Content', '2022-10-06 22:34:51', '02:19:47'),
(23, 'kristhayne', 'Archived a Category', '2022-10-06 22:38:22', '02:19:47'),
(24, 'kristhayne', 'Recovered an Audio Guide Content', '2022-10-06 22:38:29', '02:19:47'),
(25, 'kristhayne', 'Archived a Gallery Content', '2022-10-06 22:40:05', '02:19:47'),
(26, 'kristhayne', 'Recovered a Gallery Content', '2022-10-06 22:40:18', '02:19:47'),
(27, 'kristhayne', 'Updated their Profile', '2022-10-07 09:21:34', '02:19:47'),
(28, 'kristhayne', 'Updated their Profile', '2022-10-07 16:52:50', '02:19:47'),
(29, 'kristhayne', 'Updated their Profile', '2022-10-07 17:06:15', '02:19:47'),
(30, 'kristhayne', 'Updated their Profile', '2022-10-07 17:18:10', '02:19:47'),
(31, 'kristhayne', 'Updated their Profile', '2022-10-07 17:19:49', '02:19:47'),
(32, 'kristhayne', 'Updated their Profile', '2022-10-07 18:04:53', '02:19:47'),
(33, 'kristhayne', 'Updated their Profile', '2022-10-07 18:15:17', '02:19:47'),
(34, 'kristhayne', 'Updated their Profile', '2022-10-07 18:16:42', '02:19:47'),
(35, 'kristhayne', 'Updated their Profile', '2022-10-07 18:17:39', '02:19:47'),
(36, 'kristhayne', 'Updated their Profile', '2022-10-07 18:20:31', '02:19:47'),
(37, 'kristhayne', 'Updated their Profile', '2022-10-07 18:22:45', '02:19:47'),
(38, 'kristhayne', 'Updated their Profile', '2022-10-07 18:24:16', '02:19:47'),
(39, 'kristhayne', 'Updated their Profile', '2022-10-07 18:59:17', '02:19:47'),
(40, 'gelo', 'Confirmed a Booking', '2022-10-07 19:09:38', '02:19:47'),
(41, 'kristhayne', 'Added a Gallery Content', '2022-10-07 22:12:35', '02:19:47'),
(42, 'kristhayne', 'Added a Gallery Content', '2022-10-08 11:54:16', '02:19:47'),
(43, 'kristhayne', 'Updated a Category', '2022-10-10 17:55:38', '02:19:47'),
(44, 'kristhayne', 'Updated a Category', '2022-10-10 18:01:19', '02:19:47'),
(45, 'kristhayne', 'Updated a Category', '2022-10-10 18:03:17', '02:19:47'),
(46, 'kristhayne', 'Updated a Category', '2022-10-10 18:04:12', '02:19:47'),
(47, 'kristhayne', 'Updated a Gallery Content', '2022-10-10 18:04:37', '02:19:47'),
(48, 'kristhayne', 'Updated a Category', '2022-10-10 18:05:50', '02:19:47'),
(49, 'kristhayne', 'Updated an information', '2022-10-10 18:19:43', '02:19:47'),
(50, 'kristhayne', 'Updated a Category', '2022-10-10 18:24:13', '02:19:47'),
(51, 'kristhayne', 'Updated a Category', '2022-10-10 18:38:29', '02:19:47'),
(52, 'kristhayne', 'Updated a Category', '2022-10-11 13:22:14', '02:19:47'),
(53, 'kristhayne', 'Updated a Category', '2022-10-11 13:25:25', '02:19:47'),
(54, 'kristhayne', 'Updated a Category', '2022-10-11 13:27:07', '02:19:47'),
(55, 'kristhayne', 'Updated a Category', '2022-10-11 13:27:17', '02:19:47'),
(56, 'kristhayne', 'Updated a Category', '2022-10-11 13:27:29', '02:19:47'),
(57, 'kristhayne', 'Updated a Category', '2022-10-11 13:28:17', '02:19:47'),
(58, 'kristhayne', 'Updated a Category', '2022-10-11 13:28:37', '02:19:47'),
(59, 'kristhayne', 'Updated a Category', '2022-10-11 13:28:47', '02:19:47'),
(60, 'kristhayne', 'Updated a Category', '2022-10-11 13:54:08', '02:19:47'),
(61, 'kristhayne', 'Updated a Category', '2022-10-11 13:59:01', '02:19:47'),
(62, 'kristhayne', 'Updated a Category', '2022-10-11 14:00:17', '02:19:47'),
(63, 'kristhayne', 'Updated a Category', '2022-10-11 14:01:15', '02:19:47'),
(64, 'kristhayne', 'Updated a Category', '2022-10-11 14:41:39', '02:19:47'),
(65, 'kristhayne', 'Updated a Category', '2022-10-11 15:06:52', '02:19:47'),
(66, 'kristhayne', 'Updated a Gallery Content', '2022-10-11 15:18:29', '02:19:47'),
(67, 'kristhayne', 'Updated an Admin Information', '2022-10-12 10:52:29', '02:19:47'),
(68, 'kristhayne', 'Archived a Admin Data', '2022-10-12 10:56:00', '02:19:47'),
(69, 'kristhayne', 'Recovered a User Data', '2022-10-12 11:28:15', '02:19:47'),
(70, 'kristhayne', 'Confirmed a Booking', '2022-10-12 11:42:27', '02:19:47'),
(71, 'kristhayne', 'Rejected a Booking', '2022-10-12 11:42:47', '02:19:47'),
(72, 'kristhayne', 'Added an Audio Content', '2022-10-12 16:16:49', '02:19:47'),
(73, 'kristhayne', 'Updated a Category', '2022-10-12 16:38:48', '02:19:47'),
(74, 'kristhayne', 'Updated a Category', '2022-10-12 16:40:29', '02:19:47'),
(75, 'gelo', 'Updated a Gallery Content', '2022-10-12 17:05:55', '02:19:47'),
(76, 'gelo', 'Updated a Gallery Content', '2022-10-12 17:06:18', '02:19:47'),
(77, 'kristhayne', 'Updated an Admin Information', '2022-10-12 18:33:59', '02:19:47'),
(78, 'kristhayne', 'Archived a Admin Data', '2022-10-12 18:34:25', '02:19:47'),
(79, 'kristhayne', 'Recovered a User Data', '2022-10-12 18:35:04', '02:19:47'),
(80, 'kristhayne', 'Confirmed a Booking', '2022-10-12 18:36:17', '02:19:47'),
(81, 'kristhayne', 'Added a Gallery Content', '2022-10-12 18:39:56', '02:19:47'),
(82, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:40:21', '02:19:47'),
(83, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:41:14', '02:19:47'),
(84, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:42:29', '02:19:47'),
(85, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 18:42:51', '02:19:47'),
(86, 'kristhayne', 'Added an Audio Content', '2022-10-12 18:44:24', '02:19:47'),
(87, 'kristhayne', 'Updated a Category', '2022-10-12 18:45:27', '02:19:47'),
(88, 'kristhayne', 'Updated a Category', '2022-10-12 18:46:12', '02:19:47'),
(89, 'Angelo', 'Confirmed a Booking', '2022-10-12 18:55:51', '02:19:47'),
(90, 'kristhayne', 'Updated a Category', '2022-10-12 19:01:07', '02:19:47'),
(91, 'kristhayne', 'Updated a Gallery Content', '2022-10-12 19:02:06', '02:19:47'),
(92, 'kristhayne', 'Updated their Profile', '2022-10-15 16:13:36', '02:19:47'),
(93, 'kristhayne', 'Updated their Profile', '2022-10-15 16:20:59', '02:19:47'),
(94, 'kristhayne', 'Updated their Profile', '2022-10-15 17:28:17', '02:19:47'),
(95, 'kristhayne', 'Updated their Profile', '2022-10-16 15:26:39', '02:19:47'),
(96, 'kristhayne', 'Updated their Profile', '2022-10-16 15:44:54', '02:19:47'),
(97, 'kristhayne', 'Added a New Admin', '2022-10-16 15:47:15', '02:19:47'),
(98, 'kristhayne', 'Updated their Profile', '2022-10-16 23:12:56', '02:19:47'),
(99, 'kristhayne', 'Updated their Profile', '2022-10-19 22:58:47', '02:19:47'),
(100, 'kristhayne', 'Updated their Profile', '2022-10-19 23:01:33', '02:19:47'),
(101, 'kristhayne', 'Updated their Profile', '2022-10-19 23:13:24', '02:19:47'),
(102, 'kristhayne', 'Updated their Profile', '2022-10-19 23:15:13', '02:19:47'),
(103, 'kristhayne', 'Updated their Profile', '2022-10-19 23:16:35', '02:19:47'),
(104, 'kristhayne', 'Updated their Profile', '2022-10-19 23:16:42', '02:19:47'),
(105, 'kristhayne', 'Updated their Profile', '2022-10-19 23:18:35', '02:19:47'),
(106, 'kristhayne', 'Updated their Profile', '2022-10-19 23:19:00', '02:19:47'),
(107, 'kristhayne', 'Updated their Profile', '2022-10-19 23:21:51', '02:19:47'),
(108, 'kristhayne', 'Updated their Profile', '2022-10-19 23:28:03', '02:19:47'),
(109, 'kristhayne', 'Updated their Profile', '2022-10-19 23:30:05', '02:19:47'),
(110, 'kristhayne', 'Confirmed a Booking', '2022-10-22 18:13:52', '02:19:47'),
(111, 'kristhayne', 'Confirmed a Booking', '2022-10-22 18:20:26', '02:19:47'),
(112, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:15:46', '02:19:47'),
(113, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:16:23', '02:19:47'),
(114, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:16:39', '02:19:47'),
(115, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:17:08', '02:19:47'),
(116, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:20:15', '02:19:47'),
(117, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:23:50', '02:19:47'),
(118, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:25:20', '02:19:47'),
(119, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:27:38', '02:19:47'),
(120, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:27:54', '02:19:47'),
(121, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:28:28', '02:19:47'),
(122, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:29:19', '02:19:47'),
(123, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:33:28', '02:19:47'),
(124, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:38:31', '02:19:47'),
(125, 'kristhayne', 'Confirmed a Booking', '2022-10-23 00:40:00', '02:19:47'),
(126, 'kristhayne', 'Confirmed a Booking', '2022-10-23 14:57:29', '02:19:47'),
(127, 'kristhayne', 'Confirmed a Booking', '2022-10-23 14:57:45', '02:19:47'),
(128, 'kristhayne', 'Confirmed a Booking', '2022-10-23 14:58:06', '02:19:47'),
(129, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:08:53', '02:19:47'),
(130, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:14:10', '02:19:47'),
(131, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:18:18', '02:19:47'),
(132, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:19:31', '02:19:47'),
(133, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:21:01', '02:19:47'),
(134, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:22:59', '02:19:47'),
(135, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:24:50', '02:19:47'),
(136, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:26:42', '02:19:47'),
(137, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:33:55', '02:19:47'),
(138, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:44:08', '02:19:47'),
(139, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:46:59', '02:19:47'),
(140, 'kristhayne', 'Confirmed a Booking', '2022-10-23 15:50:01', '02:19:47'),
(141, 'kristhayne', 'Confirmed a Booking', '2022-10-23 16:46:20', '02:19:47'),
(142, 'kristhayne', 'Rejected a Booking', '2022-10-25 17:22:14', '02:19:47'),
(143, 'kristhayne', 'Confirmed a Booking', '2022-10-25 21:42:01', '02:19:47'),
(144, 'kristhayne', 'Confirmed a Booking', '2022-10-26 00:35:49', '02:19:47'),
(145, 'kristhayne', 'Confirmed a Booking', '2022-10-26 00:35:53', '02:19:47'),
(146, 'kristhayne', 'Confirmed a Booking', '2022-10-26 00:37:36', '02:19:47'),
(147, 'kristhayne', 'Updated their Profile', '2022-10-27 14:22:48', '02:19:47'),
(148, 'kristhayne', 'Confirmed a Booking', '2022-10-27 14:25:01', '02:19:47'),
(149, 'kristhayne', 'Archived a Admin Data', '2022-10-27 14:51:04', '02:19:47'),
(150, 'kristhayne', 'Recovered a User Data', '2022-11-01 23:18:13', '02:19:47'),
(151, 'kristhayne', 'Updated an Admin Information', '2022-11-01 23:18:26', '02:19:47'),
(152, 'kristhayne', 'Updated an Admin Information', '2022-11-01 23:18:43', '02:19:47'),
(153, 'kristhayne', 'Updated a Gallery Content', '2022-11-01 23:20:26', '02:19:47'),
(154, 'kristhayne', 'Added a New Admin', '2022-11-03 19:43:02', '02:19:47'),
(155, 'kristhayne', 'Added a New Admin', '2022-11-03 19:56:13', '02:19:47'),
(156, 'kristhayne', 'Updated an Admin Information', '2022-11-03 20:15:57', '02:19:47'),
(157, 'kristhayne', 'Added a New Admin', '2022-11-03 20:28:24', '02:19:47'),
(158, 'kristhayne', 'Added a New Admin', '2022-11-03 21:32:47', '02:19:47'),
(159, 'kristhayne', 'Updated an Admin Information', '2022-11-03 21:33:54', '02:19:47'),
(160, 'kristhayne', 'Added a New Admin', '2022-11-03 21:59:58', '02:19:47'),
(161, 'kristhayne', 'Updated an Admin Information', '2022-11-03 22:22:56', '02:19:47'),
(162, 'kristhayne', 'Updated an Admin Information', '2022-11-03 22:23:09', '02:19:47'),
(163, 'kristhayne', 'Updated an Admin Information', '2022-11-03 22:23:34', '02:19:47'),
(164, 'kristhayne', 'Updated an Admin Information', '2022-11-03 22:23:44', '02:19:47'),
(165, 'kristhayne', 'Updated an Admin Information', '2022-11-03 22:24:30', '02:19:47'),
(166, 'kristhayne', 'Updated an Admin Information', '2022-11-03 22:24:44', '02:19:47'),
(167, 'kristhayne', 'Added a New Admin', '2022-11-03 22:30:41', '02:19:47'),
(168, 'kristhayne', 'Added a New Admin', '2022-11-03 22:35:09', '02:19:47'),
(169, 'kristhayne', 'Updated an Admin Information', '2022-11-04 01:22:19', '02:19:47'),
(170, 'kristhayne', 'Added a New Admin', '2022-11-04 01:28:49', '02:19:47'),
(171, 'kristhayne', 'Updated an Admin Information', '2022-11-04 01:45:07', '02:19:47'),
(172, 'kristhayne', 'Updated an Admin Information', '2022-11-04 01:45:14', '02:19:47'),
(173, 'kristhayne', 'Updated an Admin Information', '2022-11-04 01:59:40', '02:19:47'),
(174, 'kristhayne', 'Updated an Admin Information', '2022-11-04 18:00:07', '02:19:47'),
(175, 'kristhayne', 'Archived a Admin Data', '2022-11-04 18:12:55', '02:19:47'),
(176, 'kristhayne', 'Recovered a User Data', '2022-11-04 18:28:12', '02:19:47'),
(177, 'kristhayne', 'Confirmed a Booking', '2022-11-04 20:34:39', '02:19:47'),
(178, 'kristhayne', 'Confirmed a Booking', '2022-11-04 20:36:19', '02:19:47'),
(179, 'kristhayne', 'Rejected a Booking', '2022-11-05 00:41:55', '02:19:47'),
(180, 'kristhayne', 'Rejected a Booking', '2022-11-05 01:49:42', '02:19:47'),
(181, 'kristhayne', 'Confirmed a Booking', '2022-11-05 01:52:15', '02:19:47'),
(182, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:11:19', '02:19:47'),
(183, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:30:49', '02:19:47'),
(184, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:38:41', '02:19:47'),
(185, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:38:41', '02:19:47'),
(186, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:39:24', '02:19:47'),
(187, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:39:24', '02:19:47'),
(188, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:39:48', '02:19:47'),
(189, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:39:48', '02:19:47'),
(190, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:39:52', '02:19:47'),
(191, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:39:52', '02:19:47'),
(192, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:41:16', '02:19:47'),
(193, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:41:16', '02:19:47'),
(194, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:42:20', '02:19:47'),
(195, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:42:20', '02:19:47'),
(196, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:44:38', '02:19:47'),
(197, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:44:38', '02:19:47'),
(198, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:44:43', '02:19:47'),
(199, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:44:43', '02:19:47'),
(200, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:45:12', '02:19:47'),
(201, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:45:12', '02:19:47'),
(202, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:45:30', '02:19:47'),
(203, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:45:30', '02:19:47'),
(204, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:47:21', '02:19:47'),
(205, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:47:21', '02:19:47'),
(206, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:49:03', '02:19:47'),
(207, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:49:03', '02:19:47'),
(208, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:50:00', '02:19:47'),
(209, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:50:00', '02:19:47'),
(210, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:50:55', '02:19:47'),
(211, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:50:55', '02:19:47'),
(212, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:52:32', '02:19:47'),
(213, 'kristhayne', 'Confirmed a Booking', '2022-11-05 02:54:42', '02:19:47'),
(214, 'kristhayne', 'Rejected a Booking', '2022-11-05 02:57:57', '02:19:47'),
(215, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:03:28', '02:19:47'),
(216, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:08:45', '02:19:47'),
(217, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:14:21', '02:19:47'),
(218, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:17:39', '02:19:47'),
(219, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:18:03', '02:19:47'),
(220, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:19:38', '02:19:47'),
(221, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:21:21', '02:19:47'),
(222, 'kristhayne', 'Rejected a Booking', '2022-11-05 03:24:31', '02:19:47'),
(223, 'kristhayne', 'Updated a Gallery Content', '2022-11-06 19:04:54', '02:19:47'),
(224, 'kristhayne', 'Added a Gallery Content', '2022-11-06 22:52:39', '02:19:47'),
(225, 'kristhayne', 'Updated a Gallery Content', '2022-11-06 22:57:22', '02:19:47'),
(226, 'kristhayne', 'Updated a Gallery Content', '2022-11-07 01:56:35', '02:19:47'),
(227, 'kristhayne', 'Updated a Audio Guide Content', '2022-11-07 02:30:04', '02:19:47'),
(228, 'kristhayne', 'Updated a Audio Guide Content', '2022-11-07 02:30:31', '02:19:47'),
(229, 'kristhayne', 'Updated a Audio Guide Content', '2022-11-07 02:31:05', '02:19:47'),
(230, 'kristhayne', 'Updated a Audio Guide Content', '2022-11-07 02:31:24', '02:19:47'),
(231, 'kristhayne', 'Updated a Audio Guide Content', '2022-11-07 02:31:51', '02:19:47'),
(232, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:01:04', '02:19:47'),
(233, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:01:39', '02:19:47'),
(234, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:02:45', '02:19:47'),
(235, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:10:04', '02:19:47'),
(236, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:10:24', '02:19:47'),
(237, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:13:20', '02:19:47'),
(238, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:19:15', '02:19:47'),
(239, 'kristhayne', 'Added a Gallery Content', '2022-11-07 14:20:55', '02:19:47'),
(240, 'kristhayne', 'Updated a Gallery Content', '2022-11-07 16:36:07', '02:19:47'),
(241, 'kristhayne', 'Updated a Gallery Content', '2022-11-07 17:35:50', '02:19:47'),
(242, 'kristhayne', 'Updated a Gallery Content', '2022-11-07 17:36:03', '02:19:47'),
(243, 'kristhayne', 'Updated a Audio Guide Content', '2022-11-08 00:26:05', '02:19:47'),
(244, 'kristhayne', 'Updated a Category', '2022-11-08 01:25:15', '02:19:47'),
(245, 'kristhayne', 'Updated a Category', '2022-11-08 01:25:24', '02:19:47'),
(246, 'kristhayne', 'Updated a Category', '2022-11-08 01:54:45', '02:19:47'),
(247, 'kristhayne', 'Archived a Admin Data', '2022-11-08 02:09:32', '02:19:47'),
(248, 'kristhayne', 'Rejected a Booking', '2022-11-08 16:20:39', '02:19:47'),
(249, 'kristhayne', 'Updated a Gallery Content', '2022-11-08 17:08:03', '02:19:47'),
(250, 'kristhayne', 'Confirmed a Booking', '2022-11-08 17:08:58', '02:19:47'),
(251, 'kristhayne', 'Rejected a Booking', '2022-11-08 17:10:34', '02:19:47'),
(252, 'kristhayne', 'Confirmed a Booking', '2022-11-08 17:11:11', '02:19:47'),
(253, 'kristhayne', 'Recovered a User Data', '2022-11-08 17:46:03', '02:19:47'),
(254, 'kristhayne', 'Recovered a User Data', '2022-11-08 17:46:28', '02:19:47'),
(255, 'kristhayne', 'Archived a Admin Data', '2022-11-08 21:52:35', '02:19:47'),
(256, 'kristhayne', 'Updated a Gallery Content', '2022-11-09 17:11:26', '02:19:47'),
(257, 'kristhayne', 'Recovered a User Data', '2022-11-10 17:11:42', '02:19:47'),
(258, 'kristhayne', 'Recovered a User Data', '2022-11-10 17:12:03', '02:19:47'),
(259, 'kristhayne', 'Recovered a User Data', '2022-11-10 17:12:07', '02:19:47'),
(260, 'kristhayne', 'Archived a Admin Data', '2022-11-10 17:40:25', '02:19:47'),
(261, 'kristhayne', 'Recovered a User Data', '2022-11-10 17:40:30', '02:19:47'),
(262, 'kristhayne', 'Updated a Audio Guide Content', '2022-11-10 19:21:22', '02:19:47'),
(263, 'kristhayne', 'Updated a Gallery Content', '2022-11-12 22:49:44', '02:19:47'),
(264, 'kristhayne', 'Updated a Gallery Content', '2022-11-12 23:20:24', '02:19:47'),
(265, 'kristhayne', 'Updated a Gallery Content', '2022-11-12 23:22:34', '02:19:47'),
(266, 'kristhayne', 'Updated a Gallery Content', '2022-11-12 23:22:41', '02:19:47'),
(267, 'kristhayne', 'Added a Gallery Content', '2022-11-13 04:29:51', '02:19:47'),
(268, 'kristhayne', 'Updated a Gallery Content', '2022-11-13 04:37:09', '02:19:47'),
(269, 'kristhayne', 'Added a New Admin', '2022-11-14 23:42:20', '02:19:47'),
(270, 'kristhayne', 'Archived a Admin Data', '2022-11-14 23:46:02', '02:19:47'),
(271, 'kristhayne', 'Archived a Admin Data', '2022-11-14 23:46:12', '02:19:47'),
(272, 'kristhayne', 'Archived a Admin Data', '2022-11-14 23:48:44', '02:19:47'),
(273, 'kristhayne', 'Archived a Admin Data', '2022-11-15 02:20:45', '02:20:45'),
(274, 'kristhayne', 'Archived a Admin Data', '2022-11-15 02:22:00', '02:22:00'),
(275, 'kristhayne', 'Added a New Admin', '2022-11-15 06:16:53', '06:16:53'),
(276, 'Nathan_C', 'Updated a Gallery Content', '2022-11-15 06:19:53', '06:19:53'),
(277, 'kristhayne', 'Updated a Gallery Content', '2022-11-18 14:17:37', '14:17:37');

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
(1, 'Kristine Joy', 'Nacional', '09970639196', 'kjnacional11@gmail.com', '', 'Bulsu', '18 November 2022', 'AM', 4, 4, '2022-10-25 09:11:38'),
(2, 'Taekyung', 'Song', '09021989876', 'songtaekyung143@gmail.com', '', 'Photographer inc.', '25 October 2022', 'PM', 4, 2, '2022-10-25 09:11:38'),
(3, 'Daon', 'Jung', '09456789045', 'jungda@sample.email', '', 'Bimsa', '27 October 2022', 'AM', 2, 2, '2022-10-25 09:11:38'),
(4, 'VirtualShrine', 'Visitor', '09123456789', 'sample@gmail.com', '1665546061.png', 'SAMPLE', '26 October 2022', 'AM', 7, 2, '2022-10-25 09:11:38'),
(5, 'Alex', 'Ahn', '091345928680', 'sample@gmail.com', '1665571992.png', 'SAMPLE', '26 October 2022', 'PM', 2, 4, '2022-10-25 09:11:38'),
(6, 'Lance Francis', 'Nacional', '09169172067', 'nacionallancefrancis0@gmail.com', '1666409471.png', 'NONE', '26 October 2022', 'PM', 2, 2, '2022-10-25 09:11:38'),
(7, 'Lance Francis', 'Nacional', '09169172067', 'nacionallancefrancis0@gmail.com', '1667897309.png', '', '11 NovemberNovember 20222022', 'AM', 10, 0, '2022-11-08 08:48:29'),
(8, 'Lance Francis', 'Nacional', '09169172067', 'nacionallancefrancis0@gmail.com', '1667897397.png', '', '18 NovemberNovember 20222022', 'AM', 2, 2, '2022-11-08 08:49:57'),
(9, 'Lance Francis', 'Nacional', '09169172067', 'nacionallancefrancis0@gmail.com', '1668497464.jpg', '', '17 November 2022', 'AM', 30, 0, '2022-11-15 07:31:04'),
(10, 'Mark Anthony', 'Dela Cruz', '0978654987', 'markanthony@gmail.com', '1668514847.jpg', 'Photographers Organization', '30 November 2022', 'PM', 2, 0, '2022-11-15 12:20:47');

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
  `audio` varchar(200) DEFAULT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0 = Active\r\n1 = Hidden\r\n2 = Archived',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `year`, `object_type`, `image`, `audio`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(38, 5, 'BANGA', 'Banga-vs-', '<p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered <a href=\"https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA&source=gmail&ust=1664496654487000&usg=AOvVaw104s5aY_Ax3EHv5KOzADsf\" style=\"color: rgb(234, 76, 137); font-family: helvetica, sans-serif; text-decoration: underline; margin: 0px; padding: 0px;\">product design strategy.</a>.</p><p style=\"font-family: helvetica, sans-serif; color: rgb(51, 51, 51); font-size: 15px; line-height: 24px; margin: 1em 0px; padding: 0px;\">Whether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your</p>', '', '0', '1664413687.jpg', NULL, 'Banga', 'Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered product design strategy..\r\n\r\nWhether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu', 'Banga', 2, '2022-09-29 01:08:07'),
(39, 1, 'Vase', 'V-ase', '<p style=\"margin: 1em 0px; padding: 0px; font-family: helvetica, sans-serif; max-width: 50em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; font-size: 15px; vertical-align: initial; color: rgb(51, 51, 51);\">Every successful product starts with a clear vision and a solid strategy. This week on the blog, discover how to bring your product ideas to life through thoughtful, user-centered <a href=\"https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://email.n.dribbble.com/c/eJxNj81qxSAQhZ_G7LyMmmhcuCiU-xpl1Om9tjEJagp9-5o2i8Iszg_fwCEntB7VLCZhhuiilkbqITkxWSXG2XBvIPBxIuDeAvHpHWHyAQVYy0ZYb7Ek7_1Ct7Dl4ekUBmuNBotgIklQ0qPQSpO0aEcYh8U9W9srUy9M3vv957stVLejBKpd72WLR2g8Uk2PlddWsNHjm6n70fJbwLxjz5l6lSAlB8vlzKQ-u0wxHbk3lDEtV_j3uIdprSlS4ScGVs5DcZ8fK4a0rbgI0Wc9Tux3UXO-bBgD1la7udCu6IvWxi__A27zZyA&source=gmail&ust=1664496654487000&usg=AOvVaw104s5aY_Ax3EHv5KOzADsf\" style=\"margin: 0px; padding: 0px; font-family: helvetica, sans-serif; text-decoration-skip-ink: auto; color: rgb(234, 76, 137); text-decoration: underline;\">product design strategy.</a>.</p><p style=\"margin: 1em 0px; padding: 0px; font-family: helvetica, sans-serif; max-width: 50em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; font-size: 15px; vertical-align: initial; color: rgb(51, 51, 51);\">Whether you’re working on a brand new product, redesigning a feature, or building your portfolio, follow the steps in this guide to set your futu</p>', '1900', '0', '1665572526.jpg', '1665572526.jpg', 'Vase', 'fsfhsbmdhjkw', 'vase', 0, '2022-10-07 14:12:35'),
(40, 5, 'Bajo La Campana', 'Bajo-La-Campana', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">In the colonial Philippines, bells summoned people to worship, very much like the adhan (or Muslim call to prayer) is made from mosque towers, formerly with a human voice and now with a loudspeaker. Bells tolled to announce a birth, marriage or death by the way these were rung, the number of times, the intervals, etc. Bells signaled emergencies of fire, typhoon or pirate attack. Bells were believed to cleanse the air of evil spirits and drive off storms and lightning.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">So integral was the bell in the colonial Philippines that people lived bajo la campana—literally under the bell, but actually within hearing distance of the church bells. During the Philippine Revolution and the Philippine-American War, bells were confiscated by the enemy because they could be used to send signals far and wide in an age before the cell phone, or they could be melted down and made into weapons or bullets.</p>', '1999', 'artifact', '1665472709.jpg', NULL, 'Bajo La Campana', 'sample text', 'Bajo La Campana', 0, '2022-10-08 03:54:16'),
(41, 1, 'Manunggul Jar', 'manunggul-jar-1', '<p>The Manunggul Jar is a secondary burial jar excavated from a Neolithic burial site in the Manunggul cave of the Tabon Caves at Lipuun Point in Palawan, Philippines. It dates from 890–710 B.C. and the two prominent figures at the top handle of its cover represent the journey of the soul to the afterlife.<br></p>', '', '', '1665571196.jpg', NULL, 'Manunggul Jar', 'The Manunggul Jar is a secondary burial jar excavated from a Neolithic burial site in the Manunggul cave of the Tabon Caves at Lipuun Point in Palawan, Philippines. It dates from 890–710 B.C. and the two prominent figures at the top handle of its cover represent the journey of the soul to the afterlife.', 'Manunggul Jar', 0, '2022-10-12 10:39:56'),
(42, 6, 'Qdaqa', 'daaqw', '<p>ajndjaknk</p>', '', '', '1667746359.jpg', NULL, 'daa', 'dawq', 'dwza', 0, '2022-11-06 14:52:39'),
(43, 1, 'Sample', 'Sample', '<p>Sample</p>', '', '', '1667800864.', NULL, 'sample', 'sample', 'sample', 2, '2022-11-07 06:01:04'),
(44, 5, 'Kalakalang Galyon', 'kalakalang-galyon', '<p>The Manila galleons (Spanish: Galeón de Manila; Filipino: Galyon ng Maynila) were Spanish trading ships which for two and a half centuries linked the Spanish Crown’s Viceroyalty of New Spain, based in Mexico City, with her Asian territories, collectively known as the Spanish East Indies, across the Pacific Ocean. The ships made one or two round-trip voyages per year between the ports of Acapulco and Manila. The name of the galleon changed to reflect the city that the ship sailed from.[1] The term Manila galleon can also refer to the trade route itself between Acapulco and Manila, which lasted from 1565 to 1815.</p><p>The Manila galleons (Spanish: Galeón de Manila; Filipino: Galyon ng Maynila) were Spanish trading ships which for two and a half centuries linked the Spanish Crown’s Viceroyalty of New Spain, based in Mexico City, with her Asian territories, collectively known as the Spanish East Indies, across the Pacific Ocean. The ships made one or two round-trip voyages per year between the ports of Acapulco and Manila. The name of the galleon changed to reflect the city that the ship sailed from.[1] The term Manila galleon can also refer to the trade route itself between Acapulco and Manila, which lasted from 1565 to 1815.<br></p>', '1999', 'artifact', '1668266424.jpg', NULL, 'Kalakalang Galyon', 'The Manila galleons (Spanish: Galeón de Manila; Filipino: Galyon ng Maynila) were Spanish trading ships which for two and a half centuries linked the Spanish Crown’s Viceroyalty of New Spain, based in Mexico City, with her Asian territories, collectively known as the Spanish East Indies, across the Pacific Ocean. The ships made one or two round-trip voyages per year between the ports of Acapulco and Manila. The name of the galleon changed to reflect the city that the ship sailed from.[1] The term Manila galleon can also refer to the trade route itself between Acapulco and Manila, which lasted from 1565 to 1815.', 'kalakalang galyon', 0, '2022-11-07 06:01:39'),
(49, 1, 'Sample', 'amples', '<p>sample</p>', '1999', 'artifact', 'IMG_20220516_150523.jpg', NULL, 'sample', 'sample', 'sample', 0, '2022-11-07 06:19:15'),
(50, 6, 'Homepage-insert-data', 'Homepage-inserted-data', '<p>sample</p>', '1999', 'artifact', 'IMG_20220516_144558.jpg', NULL, 'sample', 'sample', 'sample', 0, '2022-11-07 06:20:55'),
(51, 1, 'Manunggul Jar', 'manunggul-jar-1', '<p><font face=\"arial, sans-serif\"><span style=\"font-size: 14px;\">The Manunggul Jar is a secondary burial jar excavated from a Neolithic burial site in the Manunggul cave of the Tabon Caves at Lipuun Point in Palawan, Philippines. It dates from 890–710 B.C. and the two prominent figures at the top handle of its cover represent the journey of the soul to the afterlife.</span></font><br></p>', '890–710 B.C', 'Relics', 'Manunggul_Jar.jpg', 'Manunggul_Jar.jpg', 'Manunggul Jar', 'The Manunggul Jar is a secondary burial jar excavated from a Neolithic burial site in the Manunggul cave of the Tabon Caves at Lipuun Point in Palawan, Philippines. It dates from 890–710 B.C. and the two prominent figures at the top handle of its cover represent the journey of the soul to the afterlife.', 'manunggul jar', 0, '2022-11-12 20:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `user_id`, `fname`, `lname`, `username`, `email`, `password`, `role_as`, `status`, `profileImage`, `created_at`) VALUES
(1, '', 'Kristine Joy', 'Nacional', 'kristhayne', 'kjnacional11@gmail.com', 'pass1', 0, 0, '', '2022-09-13 11:34:58'),
(23, 'CRSA_3811_23', 'Nathaniel', 'Castro', 'Nathan_C', 'nathan@gmail.com', 'Password12_', 1, 0, '', '2022-11-14 22:16:53');

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
-- Dumping data for table `user_archive`
--

INSERT INTO `user_archive` (`id`, `fname`, `lname`, `username`, `email`, `password`, `role_as`, `status`, `profileImage`, `created_at`) VALUES
(2, 'Angelo', 'Mauricio', 'Angelo', 'angelo@gmail.com', 'pass2', 1, 1, '', '2022-09-13 19:53:13'),
(3, 'Sunoo', 'Kim', 'k_sunoo', '', 'enhypen', 1, 1, '', '2022-09-13 20:24:18'),
(21, 'Claud', 'Turner', 'claud_t', 'claud_t@gmail.com', 'passWORD123', 1, 1, '', '2022-11-04 01:28:49'),
(4, 'Taku', 'Asami', 'takuto', '', 'password', 1, 1, '', '2022-09-15 00:36:29'),
(5, 'Rovi Keith', 'Navarro', 'rovi', 'rovi@gmail.com', 'pass3', 1, 1, '', '2022-10-04 16:44:51');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
