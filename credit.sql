-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 05:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `from_user` varchar(20) NOT NULL,
  `to_user` varchar(20) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`from_user`, `to_user`, `credits`) VALUES
('user1', 'user2', 6),
('user10', 'user8', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `E-Mail` varchar(40) NOT NULL,
  `cur_credit` int(11) NOT NULL,
  `user on hold` varchar(5) NOT NULL,
  `user past due` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `E-Mail`, `cur_credit`, `user on hold`, `user past due`) VALUES
(1, 'user1', 'user1@gmail.com', 94, 'yes', 300),
(10, 'user10', 'user10@gmail.com', 997, 'no', 0),
(2, 'user2', 'user2@gmail.com', 506, 'no', 100),
(3, 'user3', 'user3@gmail.com', 200, 'yes', 800),
(4, 'user4', 'user4@gmail.com', 600, 'no', 100),
(5, 'user5', 'user5@gmail.com', 500, 'no', 0),
(6, 'user6', 'user6@gmail.com', 900, 'yes', 1000),
(7, 'user7', 'user7@gmail.com', 300, 'yes', 500),
(8, 'user8', 'user8@gmail.com', 703, 'no', 0),
(9, 'user9', 'user9@gmail.com', 400, 'yes', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `E-Mail` (`E-Mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
