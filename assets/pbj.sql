-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2015 at 11:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pbj`
--

-- --------------------------------------------------------

--
-- Table structure for table `Eats`
--

CREATE TABLE IF NOT EXISTS `Eats` (
`id` int(11) NOT NULL,
  `phoneId` varchar(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `value` float NOT NULL,
  `rating` float NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Eats`
--

INSERT INTO `Eats` (`id`, `phoneId`, `title`, `desc`, `image`, `value`, `rating`, `link`) VALUES
(1, '60412345678', 'Tuc Craft Kitchen3', 'Tuc Craft Kitchen is a restaurant and bar in Gastown, Vancouver. Our vision was to create a gathering place that feels like it has always been here. Our food is elegant, rustic, honest...', 'eat_tuc.jpeg', 1.5, 0, ''),
(26, '6058739721', 'The Flying Pig', 'I know what you’re thinking. The Flying ', 'eat_pig.jpg', 0, 0, ''),
(27, '60472628312', 'Guu with Garlic', 'Guu ?with Garlic is all about “Garlic is', 'eat_guu.jpg', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `Plays`
--

CREATE TABLE IF NOT EXISTS `Plays` (
`id` int(11) NOT NULL,
  `phoneId` varchar(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `value` float NOT NULL,
  `rating` float NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Plays`
--

INSERT INTO `Plays` (`id`, `phoneId`, `title`, `desc`, `image`, `value`, `rating`, `link`) VALUES
(1, '6041234567', 'Van Dusen Botanical ', 'Van Dusen Botanical Gardens', 'play_vandusen.jpg', 0, 0, ''),
(2, '999', 'Rio Theatre', 'Rio Theatre tralalalalalalalalalala', 'play_rio.jpg', 0, 0, ''),
(3, '77762652672', 'Dr. Sun Yat-Sen Clas', '''Dr. Sun Yat-Sen Classical Chinese Garde', 'play_sunyatsen.jpg', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `Sleeps`
--

CREATE TABLE IF NOT EXISTS `Sleeps` (
`id` int(11) NOT NULL,
  `phoneId` varchar(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `value` float NOT NULL,
  `rating` float NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sleeps`
--

INSERT INTO `Sleeps` (`id`, `phoneId`, `title`, `desc`, `image`, `value`, `rating`, `link`) VALUES
(1, '60472629262', 'Fairmont Pacific Rim', 'Fairmont Pacific Rim Hotel', 'sleep_pacificrim.jpg', 0, 5, ''),
(2, '34725226322', 'L''Hermitage Hotel', 'L''Hermitage Hotel lalalalala', 'sleep_hermitage.jpg', 0, 2, ''),
(3, '746382', 'Times Square Suites ', 'Times Square Suites Hotel', 'sleep_times.jpg', 0, 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Eats`
--
ALTER TABLE `Eats`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Plays`
--
ALTER TABLE `Plays`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sleeps`
--
ALTER TABLE `Sleeps`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Eats`
--
ALTER TABLE `Eats`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `Plays`
--
ALTER TABLE `Plays`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Sleeps`
--
ALTER TABLE `Sleeps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
