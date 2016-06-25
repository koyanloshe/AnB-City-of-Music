-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2016 at 03:02 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codexworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userId` int(10) NOT NULL,
  `FbId` varchar(50) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `ans` varchar(100) NOT NULL,
  `weightage` int(10) NOT NULL,
  `claimfree` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `weightage`
--

CREATE TABLE IF NOT EXISTS `weightage` (
`id` int(10) NOT NULL,
  `question` int(5) NOT NULL,
  `ans1` int(11) NOT NULL,
  `ans2` int(11) NOT NULL,
  `ans3` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `weightage`
--

INSERT INTO `weightage` (`id`, `question`, `ans1`, `ans2`, `ans3`) VALUES
(1, 1, 2, 3, 5),
(2, 2, 5, 3, 2),
(3, 3, 5, 3, 2),
(4, 4, 5, 3, 2),
(5, 5, 2, 3, 5),
(6, 6, 2, 3, 5),
(7, 7, 3, 2, 5),
(8, 8, 3, 2, 5),
(9, 9, 3, 5, 2),
(10, 10, 3, 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `weightage`
--
ALTER TABLE `weightage`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `weightage`
--
ALTER TABLE `weightage`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
