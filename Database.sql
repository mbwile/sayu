-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 01:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sayu`
--

-- --------------------------------------------------------

--
-- Table structure for table `madawa`
--

CREATE TABLE `madawa` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madawa`
--

INSERT INTO `madawa` (`id`, `users_id`, `name`, `quantity`, `price`, `postdate`) VALUES
(5, 6, 'booster', 'mfuko mmoja', '20000/=', '2021-08-03 12:26:35'),
(6, 6, 'Sumu', 'lita: 1', '22000/=', '2021-08-03 12:26:22'),
(7, 8, 'booster', 'lita: 1', '20000/=', '2021-07-18 19:03:02'),
(8, 6, 'Randam', 'lita: 1', '20000/=', '2021-07-19 06:08:51'),
(9, 12, 'randap', 'mfuko mmoja', '22000/=', '2021-08-07 13:16:49'),
(10, 12, 'booster', 'lita: 1', '23000/=', '2021-08-07 13:17:03'),
(11, 14, 'booster', 'lita: 1', '20000/=', '2021-08-08 23:53:37'),
(12, 15, 'booster', 'lita: 1', '2100/=', '2021-08-09 00:00:47'),
(13, 10, 'Carate', 'lita: 1', '15000/=', '2021-08-09 06:44:21'),
(14, 10, 'roundup', 'lita: 1', '14000/=', '2021-08-09 06:45:43'),
(15, 11, 'rondo', 'lita: 1', '13000/=', '2021-08-09 06:51:56'),
(16, 16, 'Carate', 'lita: 1', '16000/=', '2021-08-09 07:19:06'),
(17, 16, 'roundup', 'lita: 1', '15000/=', '2021-08-09 07:20:01'),
(18, 17, 'rondo', 'lita: 1', '15000/=', '2021-08-09 07:37:08'),
(19, 17, 'Carate', 'lita: 1', '15500/=', '2021-08-09 07:37:55'),
(20, 13, 'roundup', 'lita: 1', '15000/=', '2021-08-09 07:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `mbegu`
--

CREATE TABLE `mbegu` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mbegu`
--

INSERT INTO `mbegu` (`id`, `users_id`, `name`, `quantity`, `price`, `postdate`) VALUES
(1, 6, 'seedco', 'mfuko mmoja', '5200/=', '2021-08-03 12:22:46'),
(3, 8, 'alizeti', 'mfuko mmoja', '4500/=', '2021-08-03 12:22:33'),
(4, 6, 'soya', 'mfuko mmoja', '5520/=', '2021-08-03 08:37:07'),
(5, 12, 'seedco', 'mfuko mmoja', '3200/=', '2021-08-07 13:13:32'),
(6, 12, 'carrot', 'nusu kilo', '5100/=', '2021-08-07 13:13:47'),
(7, 13, 'tomato', 'gramu 50', '5200/=', '2021-08-08 14:14:02'),
(8, 13, 'carrot', 'gramu 50', '6000/=', '2021-08-08 23:13:53'),
(9, 14, 'SEEDCO', 'mfuko mmoja', '57000/=', '2021-08-08 23:53:10'),
(10, 15, 'carrot', 'gramu 50', '5000/=', '2021-08-08 23:59:33'),
(11, 11, 'SEEDCO', 'mfuko mmoja', '58000/=', '2021-08-09 06:49:59'),
(12, 11, 'tomato', 'gramu 50', '52000/=', '2021-08-09 06:51:10'),
(13, 16, 'seedco', 'mfuko mmoja', '3000/=', '2021-08-09 07:16:28'),
(14, 16, 'spinachi', 'gramu 50', '2500/=', '2021-08-09 07:17:36'),
(15, 17, 'maharage', 'plastiki moja ya lita 20', '35000/=', '2021-08-09 07:35:55'),
(16, 17, 'seedco', 'mfuko mmoja', '3000/=', '2021-08-09 07:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `mbolea`
--

CREATE TABLE `mbolea` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mbolea`
--

INSERT INTO `mbolea` (`id`, `users_id`, `name`, `quantity`, `price`, `postdate`) VALUES
(11, 3, 'CAN', 'mfuko mmoja', '57200/=', '2021-07-09 06:47:57'),
(12, 2, 'NPK', 'mfuko mmoja', '58000/=', '2021-07-09 12:11:55'),
(15, 6, 'CAN', 'mfuko mmoja', '53200/=', '2021-08-03 12:19:55'),
(16, 6, 'NPK', 'mfuko mmoja', '58000/=', '2021-08-03 12:21:38'),
(19, 6, 'CAN', 'mfuko mmoja', '52000/=', '2021-07-19 04:04:46'),
(20, 6, 'UREA', 'mfuko mmoja', '57000/=', '2021-08-03 21:23:47'),
(21, 6, 'UREA', 'mfuko mmoja', '57000/=', '2021-08-03 21:58:25'),
(22, 12, 'UREA', 'mfuko mmoja', '57000/=', '2021-08-05 17:17:55'),
(23, 7, 'UREA', 'mfuko mmoja', '53000/=', '2021-08-06 22:39:45'),
(24, 7, 'CAN', 'mfuko mmoja', '57000/=', '2021-08-06 22:38:03'),
(25, 12, 'CAN', 'mfuko mmoja', '57000/=', '2021-08-07 22:05:43'),
(26, 13, 'UREA', 'mfuko mmoja', '58200/=', '2021-08-08 14:08:40'),
(27, 13, 'CAN', 'mfuko mmoja', '59000/=', '2021-08-08 14:08:54'),
(28, 14, 'NPK', 'mfuko mmoja', '10000', '2021-08-08 23:52:17'),
(29, 15, 'UREA', 'mfuko mmoja', '58000/=', '2021-08-08 23:58:52'),
(30, 15, 'DAP', 'mfuko mmoja', '53000/=', '2021-08-08 23:59:11'),
(31, 10, 'DAP', 'mfuko mmoja', '53000/=', '2021-08-09 06:40:18'),
(32, 10, 'CAN', 'mfuko mmoja', '58000/=', '2021-08-09 06:40:48'),
(33, 11, 'NPK', 'mfuko mmoja', '62000/=', '2021-08-09 06:47:43'),
(34, 11, 'UREA', 'mfuko mmoja', '57000/=', '2021-08-09 06:48:41'),
(35, 16, 'CAN', 'mfuko mmoja', '57200/=', '2021-08-09 07:13:18'),
(36, 16, 'DAP', 'mfuko mmoja', '57000/=', '2021-08-09 07:13:51'),
(37, 17, 'UREA', 'mfuko mmoja', '53000/=', '2021-08-09 07:29:49'),
(38, 17, 'CAN', 'mfuko mmoja', '57200/=', '2021-08-09 07:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `shopname` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `password`, `email`, `location`, `phonenumber`, `shopname`, `role`) VALUES
(6, 'said', 'husen', '123', 'said@gmail.com', 'kabwe', '0758990120', 'kishiri shop', 'admin'),
(7, 'vise', 'zao', '321', 'vise@gmail.com', 'karinga', '0768990911', 'ruparupa shop', 'normal'),
(8, 'yusuph', 'simon', '111111111', 'yusuph@gmail.com', 'mwanjelwa', '0758990120', 'happylife shop', 'admin'),
(9, 'peter', 'zao', '213', 'peter@gmail.com', 'mwanjelwa', '0768990911', 'maperere shop', 'normal'),
(10, 'mati', 'musa', '987', 'mati@gmail.com', 'mwasyoge', '0768990911', 'greenshop', 'normal'),
(11, 'mamba', 'mamba', '111', 'musa@gmail.com', 'mwasyoge', '0624574432', 'mambashop', 'normal'),
(12, 'john', 'john', '222', 'sam@gmail.com', 'soweto', '0768990911', 'makiwa shop', 'normal'),
(13, 'kenge', 'kenge', '123', 'deo@gmail.com', 'mbata', '0624763332', 'deokilimo shop', 'normal'),
(14, 'hussein', 'shaban', '555', 'husseinshan@gmail.com', 'kabwe', '0743339065', 'kasimiri shop', 'normal'),
(15, 'yusuph', 'smon', 'yusuph', 'yusup@mail.com', 'mwanjelwa', '0624673332', 'yusuph shop', 'normal'),
(16, 'masawe', 'noa', '111', 'masawe@gmail.com', 'nyibuko', '0624574432', 'masaweshop', 'normal'),
(17, 'zakayo', 'musa', '222', 'zakayo@gmail.com', 'utukuyu', '0750111111', 'zakashop', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `madawa`
--
ALTER TABLE `madawa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbegu`
--
ALTER TABLE `mbegu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbolea`
--
ALTER TABLE `mbolea`
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
-- AUTO_INCREMENT for table `madawa`
--
ALTER TABLE `madawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mbegu`
--
ALTER TABLE `mbegu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mbolea`
--
ALTER TABLE `mbolea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
