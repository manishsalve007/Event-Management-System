-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2019 at 07:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EVENT`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `fee` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `date`, `fee`) VALUES
(1, 'dance', '25-8-2019', 200),
(6, 'draw', '24-09-2019', 150),
(9, 'cric', '32-23-1909123', 150),
(12, 'gghg', '23/3/1000', 200),
(13, 'fluet', '22-8-2019', 100),
(14, 'football', '22-11-2019', 150),
(15, 'zumba', '12-10-2020', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile_no`, `username`, `password`) VALUES
(1, 'manish', '12345', 'manish', 'salve'),
(2, 'rahul', '12345', 'jadhav', 'ramesh'),
(3, 'rahul', '092783t', 'r', 'r'),
(4, 'mamata', '234567', 'tt', 'tt'),
(5, 'tt', 'ttt', 'ttttt', 'tttttt'),
(6, 'knksafklnkln', '1234', 'lknslkfnklsnflnsklfklsklf', 'lksndlkfnlsnkdfnklsd'),
(7, 'kjasdklgnsdfsduisjdbgkbjk', '123456', 'ewrjnjkbenjkwennmn', 'powjrojweojroklfmsdn'),
(8, 'seeta', '456789', 'seeta', 'seeta'),
(9, 'shriram', '1923293i12i', 'srm', 'dhr'),
(10, 'radha matange', '8939472', 'radha', 'radha'),
(11, 'rohit', '9876543210', 'rohit', 'rohit'),
(12, 'ganesh', '2134', 'gan', 'gan'),
(13, 'Test User', '9877656782', 'testuser', 'testuser'),
(14, 'mahesh raju', '21234345567', 'mahesh123', 'mahesh123'),
(15, 'sanket', '9168922125', 'sanket', '12345'),
(16, 'ram', '5654898', 'prajwal', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `user_event`
--

CREATE TABLE `user_event` (
  `user_id` int(255) NOT NULL,
  `event_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_event`
--

INSERT INTO `user_event` (`user_id`, `event_id`) VALUES
(1, 6),
(1, 12),
(1, 14),
(8, 12),
(8, 14),
(12, 1),
(12, 6),
(12, 9),
(12, 12),
(12, 13),
(14, 1),
(14, 6),
(14, 14),
(15, 1),
(15, 6),
(15, 13),
(16, 6),
(16, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_event`
--
ALTER TABLE `user_event`
  ADD PRIMARY KEY (`user_id`,`event_id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_event`
--
ALTER TABLE `user_event`
  ADD CONSTRAINT `user_event_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_event_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
