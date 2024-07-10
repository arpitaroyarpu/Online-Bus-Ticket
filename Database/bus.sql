-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 07:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'Daily Buses'),
(4, 'Weekly Buses'),
(5, 'AC Buses');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `bus_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_age` int(3) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `cost` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `bus_id`, `user_id`, `user_name`, `user_age`, `source`, `destination`, `date`, `cost`) VALUES
(22, 9, 2, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-01', 0),
(23, 9, 2, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-01', 0),
(24, 9, 2, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-01', 0),
(25, 9, 2, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-01', 0),
(39, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(40, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(41, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(42, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(43, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(44, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(45, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(46, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(47, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(48, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(49, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(50, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(51, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(52, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(53, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(54, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(55, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(56, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(57, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(58, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(59, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(60, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(61, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(62, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(63, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(64, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(65, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(66, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(67, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(68, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(69, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(70, 9, 3, 'Kawser', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(71, 9, 3, 'Saurov', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(72, 9, 3, 'Saiyan', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(73, 9, 3, 'Ayon', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(74, 9, 3, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(75, 9, 3, 'Kawser', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(76, 9, 3, 'Saurov', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(77, 9, 3, 'Saiyan', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(78, 9, 3, 'Ayon', 24, 'Sylhet', 'Dhaka', '2024-01-02', 0),
(79, 2, 3, 'Kawser', 24, '', '', '2024-01-02', 0),
(80, 8, 3, 'Rifat', 24, 'Kanpur', 'Lucknow', '2024-01-05', 0),
(81, 2, 3, 'Rifat', 24, 'Kanpur', 'Lucknow', '2024-01-07', 0),
(82, 2, 3, 'Kawser', 24, 'Kanpur', 'Lucknow', '2024-01-07', 0),
(83, 2, 3, 'Rifat', 24, 'Kanpur', 'Lucknow', '2024-01-07', 0),
(84, 2, 3, 'Kawser', 24, 'Kanpur', 'Lucknow', '2024-01-07', 0),
(85, 9, 3, 'Rifat', 24, 'Sylhet', 'Lucknow', '2024-01-07', 0),
(86, 9, 3, 'Rifat', 24, 'Sylhet', 'Lucknow', '2024-01-07', 0),
(87, 2, 3, 'Rifat', 24, 'Kanpur', 'Lucknow', '2024-01-07', 0),
(88, 2, 3, 'Rifat', 24, 'Kanpur', 'Lucknow', '2024-01-07', 0),
(89, 3, 3, 'Rifat', 24, 'Delli', 'Mumbai', '2024-01-07', 0),
(90, 3, 3, 'Kawser', 24, 'Delli', 'Mumbai', '2024-01-07', 0),
(91, 3, 3, 'Kawser', 24, 'Delli', 'Mumbai', '2024-01-07', 0),
(92, 3, 3, 'Kawser', 24, 'Delli', 'Mumbai', '2024-01-07', 0),
(93, 11, 3, 'Rifat', 24, 'CoxBazar', 'Dhaka', '2024-01-10', 0),
(94, 11, 3, 'Rifat', 24, 'CoxBazar', 'Dhaka', '2024-01-10', 0),
(95, 3, 3, 'Rifat', 24, 'Dhaka', 'Mumbai', '2024-01-14', 0),
(96, 3, 3, 'Rifat', 24, 'Dhaka', 'Mumbai', '2024-01-14', 0),
(97, 3, 3, 'Kawser', 23, 'Dhaka', 'Mumbai', '2024-01-14', 0),
(98, 3, 3, 'Kawser', 23, 'Dhaka', 'Mumbai', '2024-01-14', 0),
(99, 13, 2, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-14', 0),
(100, 13, 32, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-21', 0),
(101, 13, 32, 'Kawser', 24, 'Sylhet', 'Dhaka', '2024-01-21', 0),
(102, 13, 32, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-01-22', 0),
(105, 13, 39, 'Rifat', 24, 'Sylhet', 'Dhaka', '2024-02-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` int(6) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `exp_month` varchar(20) NOT NULL,
  `exp_year` varchar(20) NOT NULL,
  `cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `name`, `email`, `address`, `city`, `state`, `zip_code`, `card_name`, `card_number`, `exp_month`, `exp_year`, `cvv`) VALUES
(14, 2400, 'rifat', 'moksudulislamrifat@gmail.com', 'Housing Estate', 'Dhaka', 'Bangladesh', 3100, 'Rifat', '1111222233334444', 'February', '2024', 123),
(15, 200, 'Rifat', 'rifat@gmail.com', 'Sylhet', 'Sylhet', 'Bangladesh', 3100, 'mr.RIfat', '1111222233334444', 'February', '2024', 1213),
(16, 200, 'ffd', 'mdkawserahmedpk@gmail.com', 'Sylhet', 'Sylhet', 'Bangladesh', 3100, 'fffff', '1111111111111111', 'march', '2023', 123),
(17, 200, 'Rifat', 'cse_2012020280@lus.ac.bd', 'Sylhet', 'Sylhet', 'Bangladesh', 3100, 'mr.RIfat', '1111111111111111', 'March', '2023', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_source` varchar(255) NOT NULL,
  `post_destination` varchar(255) NOT NULL,
  `post_via` varchar(255) NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `post_query_count` int(3) NOT NULL,
  `max_seats` int(3) NOT NULL,
  `available_seats` int(3) NOT NULL,
  `cost` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_source`, `post_destination`, `post_via`, `post_via_time`, `post_query_count`, `max_seats`, `available_seats`, `cost`) VALUES
(13, 3, 'Sylhet to Dhaka', 'Moksudul Islam Rifat', '2024-01-14', 'bus1.jpg', 'Good Condition', 'Sylhet', 'Dhaka', 'Kodomtoli', '7.00 pm', 0, 20, 9, NULL),
(15, 3, 'Dhaka to Cumilla', 'Samiha Laskar', '2024-01-16', 'bus2.jpg', 'Non AC', 'Dhaka', 'Cumilla', 'Polton', '8.00 pm', 0, 20, 18, NULL),
(16, 3, 'Sylhet to Sherpur', 'Jahin', '2024-01-17', 'bus3.jpg', 'Very good condition', 'Sylhet', 'Sherpur', 'Modina Market', '8.00 pm', 0, 30, 30, NULL),
(21, 4, 'Cumilla to Dhaka', 'Moksudul Islam Rifat', '2024-03-08', 'bus4.jpg', 'Very Good', 'Cumilla', 'Dhaka', 'Payra', '8.00 pm', 0, 30, 30, '300'),
(22, 3, 'Sherpur to Hobiganj', 'Samiha Laskar', '2024-03-02', '20210112143316895.jpg', 'Very Good Condition', 'Sherpur', 'Hobiganj', 'Kodomtoli', '9.00 pm', 0, 30, 30, '250'),
(23, 5, 'Sylhet to Cumilla', 'Jahin', '2024-03-03', 'bus2.jpg', 'New', 'Sylhet', 'Cumilla', 'Kodomtoli', '9.00 pm', 0, 20, 20, '750');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `bus_id` int(3) NOT NULL,
  `max_seats` int(3) NOT NULL,
  `available_seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_phoneno`, `user_image`, `user_role`, `code`) VALUES
(2, 'rifat', 'rifat280', 'rifat', 'islam', 'rifatislam@gmail.com', '0171509876', 'user_default.jpg', 'admin', ''),
(31, 'Samiha', '12345', 'Afsari', 'Lasqor', 'cse_2012020294@lus.ac.bd', '1734567890', 'OSALO_OS_991ES_PLUS_Scientific_calculato-Citiplus-739d5-269383.jpg', 'subscriber', ''),
(32, 'Jahin', '12345', 'Sahriar', 'Abedin', 'jahin@gmail.com', '1723456789', 'OSALO_OS_991ES_PLUS_Scientific_calculato-Citiplus-739d5-269383.jpg', 'subscriber', ''),
(33, 'Moksudul', '1234', 'Rifat', 'Islam', 'rifat@gmail.com', '1765434567', 'OSALO_OS_991ES_PLUS_Scientific_calculato-Citiplus-739d5-269383.jpg', 'subscriber', ''),
(34, 'Test', '1234', 'Test', '1', 'test@gmail.com', '01750160850', 'download.jpg', 'subscriber', ''),
(39, 'Moksudul Islam Rifat', 'Rifat12@', 'Moksudul', 'Islam', 'kawserahmedpk2017@gmail.com', '01750160850', 'download.jpg', 'subscriber', '5c1f8db14863e74171489d3917eb7284');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
