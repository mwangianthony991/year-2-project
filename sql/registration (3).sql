-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 10:01 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `email`, `password`) VALUES
(1, 'admin991', 'admin@gmail.com', '3b190a588d41d182b8dbee3c361f7378'),
(2, 'admin123', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500'),
(3, 'admin1234', 'admin1234@gmail.com', 'c93ccd78b2076528346216b3b2f701e6'),
(4, 'admin001', 'admin001@gmail.com', '4eef1e1ea34879a2ae60c60815927ed9');

-- --------------------------------------------------------

--
-- Table structure for table `bankadmin`
--

CREATE TABLE `bankadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankadmin`
--

INSERT INTO `bankadmin` (`id`, `username`, `email`, `password`) VALUES
(1, 'bankadmin123', 'bankadmin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'bankadmin991', 'bankadmin991@gmail.com', '2dc8b45c8f85ce497d1ce67bb4b69fde');

-- --------------------------------------------------------

--
-- Table structure for table `bankchart`
--

CREATE TABLE `bankchart` (
  `id` int(10) NOT NULL,
  `ratingid` int(10) NOT NULL,
  `staffcourtesy` int(10) NOT NULL,
  `staffspeed` int(10) NOT NULL,
  `staffknowledge` int(10) NOT NULL,
  `onlinebanking` int(10) NOT NULL,
  `ATMbanking` int(10) NOT NULL,
  `mobilebanking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankchart`
--

INSERT INTO `bankchart` (`id`, `ratingid`, `staffcourtesy`, `staffspeed`, `staffknowledge`, `onlinebanking`, `ATMbanking`, `mobilebanking`) VALUES
(1, 1, 4, 3, 2, 4, 3, 4),
(2, 2, 3, 4, 2, 3, 4, 3),
(3, 3, 2, 2, 6, 3, 1, 4),
(4, 4, 2, 4, 1, 4, 3, 2),
(5, 5, 4, 2, 4, 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bankfeedback`
--

CREATE TABLE `bankfeedback` (
  `feedbackid` int(10) NOT NULL,
  `staffcourtesy` int(10) NOT NULL,
  `staffspeed` int(10) NOT NULL,
  `staffknowledge` int(10) NOT NULL,
  `onlinebanking` int(10) NOT NULL,
  `ATMbanking` int(10) NOT NULL,
  `mobilebanking` int(10) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `userid` int(10) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankfeedback`
--

INSERT INTO `bankfeedback` (`feedbackid`, `staffcourtesy`, `staffspeed`, `staffknowledge`, `onlinebanking`, `ATMbanking`, `mobilebanking`, `description`, `userid`, `created_at`) VALUES
(1, 1, 2, 3, 4, 5, 1, 'Excellent Service', 1, '2019-03-14'),
(2, 1, 2, 3, 4, 5, 1, 'Excellent Service', 1, '2019-03-15'),
(3, 1, 2, 3, 4, 5, 1, 'Excellent Service', 1, '2019-03-15'),
(4, 2, 3, 4, 5, 1, 2, 'Satisfied', 2, '2019-03-10'),
(5, 3, 4, 5, 1, 2, 3, 'Good customer service', 2, '2019-03-11'),
(6, 4, 5, 1, 2, 3, 4, 'Improve on speed', 3, '2019-03-12'),
(7, 5, 1, 2, 3, 4, 5, 'Excellent', 4, '2019-03-13'),
(8, 1, 2, 3, 4, 5, 1, 'Dissatisfied', 5, '2019-03-14'),
(9, 2, 1, 5, 3, 4, 2, 'Excellent service', 1, '2019-03-17'),
(10, 2, 1, 5, 3, 4, 2, 'Excellent service', 1, '2019-03-17'),
(11, 5, 3, 1, 1, 2, 4, 'Needs improvement', 1, '2019-03-17'),
(12, 4, 5, 2, 2, 1, 5, 'Fast service', 10, '2019-03-17'),
(13, 5, 4, 3, 1, 2, 3, 'Enter text here...', 9, '2019-03-17'),
(14, 3, 4, 5, 1, 2, 3, 'Nice', 1, '2019-03-19'),
(15, 5, 4, 3, 2, 1, 3, 'Excellent service', 14, '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `bankpoints`
--

CREATE TABLE `bankpoints` (
  `id` int(10) NOT NULL,
  `customerpoints` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankpoints`
--

INSERT INTO `bankpoints` (`id`, `customerpoints`, `userid`, `created`) VALUES
(1, 400, 1, '2019-03-15 18:17:15'),
(2, 50, 10, '2019-03-17 11:18:52'),
(3, 50, 9, '2019-03-17 11:46:24'),
(4, 50, 14, '2019-04-16 15:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `chartdata`
--

CREATE TABLE `chartdata` (
  `id` int(10) NOT NULL,
  `ratingid` int(10) NOT NULL,
  `variety` int(10) NOT NULL,
  `quality` int(10) NOT NULL,
  `serving` int(10) NOT NULL,
  `presentation` int(10) NOT NULL,
  `value` int(10) NOT NULL,
  `speed` int(10) NOT NULL,
  `courtesy` int(10) NOT NULL,
  `knowledge` int(10) NOT NULL,
  `location` int(10) NOT NULL,
  `ambience` int(10) NOT NULL,
  `cleanliness` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chartdata`
--

INSERT INTO `chartdata` (`id`, `ratingid`, `variety`, `quality`, `serving`, `presentation`, `value`, `speed`, `courtesy`, `knowledge`, `location`, `ambience`, `cleanliness`) VALUES
(1, 1, 11, 2, 2, 1, 9, 1, 1, 4, 7, 6, 13),
(2, 2, 1, 11, 5, 9, 1, 2, 8, 9, 1, 8, 1),
(3, 3, 1, 2, 7, 3, 8, 9, 3, 2, 7, 3, 5),
(4, 4, 14, 13, 7, 10, 7, 15, 10, 12, 9, 8, 7),
(5, 5, 2, 1, 8, 6, 4, 2, 7, 2, 5, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `feedbackid` int(10) NOT NULL,
  `ratingid` int(10) NOT NULL,
  `variety` int(10) NOT NULL,
  `quality` int(10) NOT NULL,
  `serving` int(10) NOT NULL,
  `presentation` int(10) NOT NULL,
  `value` int(10) NOT NULL,
  `speed` int(10) NOT NULL,
  `courtesy` int(10) NOT NULL,
  `knowledge` int(10) NOT NULL,
  `location` int(10) NOT NULL,
  `ambience` int(10) NOT NULL,
  `cleanliness` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`feedbackid`, `ratingid`, `variety`, `quality`, `serving`, `presentation`, `value`, `speed`, `courtesy`, `knowledge`, `location`, `ambience`, `cleanliness`) VALUES
(1, 1, 0, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0),
(2, 2, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 2),
(3, 3, 0, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0),
(4, 4, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0),
(5, 5, 0, 0, 0, 2, 0, 0, 0, 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `variety` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `serving` int(11) NOT NULL,
  `presentation` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `courtesy` int(11) NOT NULL,
  `knowledge` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `ambience` int(11) NOT NULL,
  `cleanliness` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `variety`, `quality`, `serving`, `presentation`, `value`, `speed`, `courtesy`, `knowledge`, `location`, `ambience`, `cleanliness`, `description`, `userid`, `date`) VALUES
(1, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, NULL, 1, '2019-03-17 10:10:24'),
(2, 4, 4, 5, 5, 3, 3, 2, 2, 1, 1, 1, NULL, 1, '2019-03-17 10:10:24'),
(3, 4, 4, 5, 5, 3, 3, 2, 2, 1, 1, 1, NULL, 1, '2019-03-17 10:10:24'),
(4, 4, 4, 5, 5, 3, 3, 2, 2, 1, 1, 1, NULL, 1, '2019-03-17 10:10:24'),
(5, 4, 4, 5, 5, 3, 3, 2, 2, 1, 1, 1, NULL, 1, '2019-03-17 10:10:24'),
(6, 4, 4, 5, 5, 3, 3, 2, 2, 1, 1, 1, NULL, 1, '2019-03-17 10:10:24'),
(7, 1, 2, 3, 2, 1, 4, 5, 4, 3, 2, 1, NULL, 1, '2019-03-17 10:10:24'),
(8, 1, 2, 3, 2, 1, 4, 5, 4, 3, 2, 1, NULL, 1, '2019-03-17 10:10:24'),
(9, 1, 2, 3, 2, 1, 4, 5, 4, 3, 2, 1, NULL, 1, '2019-03-17 10:10:24'),
(10, 1, 2, 3, 2, 1, 4, 5, 4, 3, 2, 1, NULL, 1, '2019-03-17 10:10:24'),
(11, 1, 2, 3, 2, 1, 4, 5, 4, 3, 2, 1, NULL, 1, '2019-03-17 10:10:24'),
(12, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, NULL, 1, '2019-03-17 10:10:24'),
(13, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, NULL, 1, '2019-03-17 10:10:24'),
(14, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, NULL, 1, '2019-03-17 10:10:24'),
(15, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, NULL, 1, '2019-03-17 10:10:24'),
(16, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, NULL, 1, '2019-03-17 10:10:24'),
(17, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, NULL, 1, '2019-03-17 10:10:24'),
(18, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, NULL, 1, '2019-03-17 10:10:24'),
(19, 2, 2, 2, 2, 2, 3, 3, 3, 4, 4, 4, NULL, 4, '2019-03-17 10:10:24'),
(20, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, NULL, 5, '2019-03-17 10:10:24'),
(21, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 5, NULL, 9, '2019-03-17 10:10:24'),
(22, 3, 2, 1, 4, 5, 3, 2, 1, 4, 5, 1, NULL, 1, '2019-03-17 10:10:24'),
(23, 1, 2, 2, 3, 3, 4, 4, 1, 5, 3, 1, NULL, 1, '2019-03-17 10:10:24'),
(24, 1, 2, 2, 3, 3, 4, 4, 1, 5, 3, 1, NULL, 1, '2019-03-17 10:10:24'),
(25, 1, 1, 1, 1, 1, 2, 2, 2, 3, 3, 3, NULL, 11, '2019-03-17 10:10:24'),
(26, 4, 4, 4, 4, 4, 5, 5, 5, 2, 2, 2, NULL, 11, '2019-03-17 10:10:24'),
(27, 5, 4, 2, 3, 1, 1, 1, 2, 3, 4, 5, NULL, 1, '2019-03-17 11:35:51'),
(28, 4, 3, 5, 2, 1, 2, 4, 3, 5, 1, 3, NULL, 1, '2019-03-17 11:38:48'),
(29, 4, 3, 5, 2, 1, 3, 2, 1, 4, 5, 3, NULL, 1, '2019-03-19 10:20:03'),
(30, 5, 4, 3, 2, 1, 2, 3, 4, 5, 4, 3, 'Excellent', 1, '2019-04-03 11:53:25'),
(31, 5, 4, 3, 2, 1, 2, 3, 4, 5, 4, 3, 'Excellent', 1, '2019-04-03 11:53:51'),
(32, 2, 4, 3, 5, 1, 4, 2, 1, 5, 3, 2, 'Excellent service', 14, '2019-04-16 14:59:44'),
(33, 2, 4, 3, 5, 1, 4, 2, 1, 5, 3, 2, 'Excellent service', 14, '2019-04-16 15:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `passwordreset`
--

CREATE TABLE `passwordreset` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `verificationcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwordreset`
--

INSERT INTO `passwordreset` (`id`, `email`, `verificationcode`) VALUES
(1, 'yreezy24@gmail.com', '215771');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'mwangianthony991@gmail.com', '0bd9c2cb8bc60447064a422b615248e5'),
(2, 'mutisya@gmail.com', 'd95d89f660dfb9ed124822428ad9816a'),
(3, 'mwangi@gmail.com', 'e67f41545372d3ed5f30ad707c22a654'),
(4, 'simeonosiemo@gmail.com', '54afb85e876012bdb2cc0001e299ad73'),
(5, 'mutismusembi@gmail.com', '04e153bd3c488e633b794d4434997849'),
(6, 'kiki@gmail.com', '73e82da1584f81a0c72e1c7316c901c7'),
(7, 'mutisya2@gmail.com', '97a82f049e1279b956e3a42e456cf51a'),
(8, 'wr@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'yreezy24@gmail.com', '0bd9c2cb8bc60447064a422b615248e5'),
(10, 'mwangianthony991@students.uonbi.ac.ke', '0bd9c2cb8bc60447064a422b615248e5'),
(11, 'mwangianthony90@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'simeon.kengere@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'brianmaimba1234@gmail.com', '3a3892431f9638f022b91b44d188469e'),
(14, 'mwangi1234@gmail.com', 'febe8f07a3ed80e4a9e6600f7744b212');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `voucherid` int(10) NOT NULL,
  `vouchercode` varchar(50) NOT NULL,
  `userid` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`voucherid`, `vouchercode`, `userid`, `created`) VALUES
(2, 'mp211xDKk8R8VUn0zqEnndcrPzVNKHxv', 1, '2019-03-03 20:31:19'),
(3, 'XWru6gxvhTKgjbjunFDUC3bjMW8MUmAZ', 4, '2019-03-04 10:03:23'),
(4, 'lLjziKwDVhaEkMJvAZuxPWGiG4PVlHEF', 5, '2019-03-04 10:05:06'),
(5, 'oN6bwYbcZcD7nnoN7ysv3QoKb6gbKYsV', 9, '2019-03-07 20:16:21'),
(6, '9Ce7UtIEuUXqLq1MWyxIlCfi8zrS91Cw', 11, '2019-03-12 13:15:51'),
(7, 'zOUew4q7UAf9l0TIu9JGUcO5QY2AyHUY', 14, '2019-04-16 11:59:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `bankadmin`
--
ALTER TABLE `bankadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankchart`
--
ALTER TABLE `bankchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankfeedback`
--
ALTER TABLE `bankfeedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `bankpoints`
--
ALTER TABLE `bankpoints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chartdata`
--
ALTER TABLE `chartdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `passwordreset`
--
ALTER TABLE `passwordreset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`voucherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bankadmin`
--
ALTER TABLE `bankadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bankchart`
--
ALTER TABLE `bankchart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bankfeedback`
--
ALTER TABLE `bankfeedback`
  MODIFY `feedbackid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bankpoints`
--
ALTER TABLE `bankpoints`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chartdata`
--
ALTER TABLE `chartdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `feedbackid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `passwordreset`
--
ALTER TABLE `passwordreset`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `voucherid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
