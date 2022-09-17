-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 04:33 AM
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
(2, 'Samantha', 'Raine', '09021989876', 'kjnacionalqqsa@gmail.com', '', 'Antique National School', '2019115479', '8:50', 4, 2);

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
(1, 'Homepage', 'homepage', 'VirtualShrine Homepage', 'Homepage', 'VirtualShrine Homepage', 'VirtualShrine Homepage', 1, 0, '2022-09-14 16:38:13'),
(2, 'Sample Category', 'Sample-category', 'This is a sample category', 'Sample Category', 'This is a sample category', 'sample category', 1, 0, '2022-09-14 23:03:23'),
(3, 'Visit', 'virtual-shrine-visit', 'Visit category', 'Visit', 'Visit category', 'Visit', 0, 0, '2022-09-17 02:18:06');

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
  `status` tinyint(1) DEFAULT 0 COMMENT '0 = Active\r\n1 = Archive',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(4, 1, 'Homepage Updated', 'homepage', 'sample homepage', '1663366180.png', 'Homepage', 'sample homepage', 'sample homepage', 0, '2022-09-14 23:19:27'),
(5, 2, 'Gallery', 'gallery-one', '<p>This is the page post - UPDATE</p>', '', 'Gallery 1', 'This is the gallery 1', 'gallery', 1, '2022-09-16 21:56:22');

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
(2, 'Angelo', 'Mauricio', 'gelo', 'pass2', 1, 1, '2022-09-13 11:53:13'),
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
