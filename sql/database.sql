-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql8.freesqldatabase.com
-- Generation Time: Oct 27, 2022 at 06:20 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql8528597`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `BookID` int(10) UNSIGNED NOT NULL,
  `Title` varchar(80) NOT NULL,
  `Author` varchar(80) NOT NULL,
  `Publisher` varchar(80) NOT NULL,
  `Year` int(4) UNSIGNED NOT NULL,
  `Genre` enum('Horror','Thriller','Historical','Romance','Friction','Fantasy','Literature','Religion','Self-Help','Educational') DEFAULT NULL,
  `Edition` int(2) UNSIGNED NOT NULL,
  `ISBN` int(13) UNSIGNED NOT NULL,
  `Language` varchar(80) NOT NULL,
  `Quantity` int(3) UNSIGNED NOT NULL,
  `BookPrice` int(4) UNSIGNED NOT NULL,
  `AgeGroup` enum('Children','Teen','Young Adult','Adult','All') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`BookID`, `Title`, `Author`, `Publisher`, `Year`, `Genre`, `Edition`, `ISBN`, `Language`, `Quantity`, `BookPrice`, `AgeGroup`) VALUES
(1, 'Travel Your World', 'BA Delaney', 'Maskew Miller Longman', 1985, 'Educational', 6, 4294967295, 'English', 15, 50, 'Teen'),
(2, 'Boundaries', 'John Cloud', 'Zondervan', 1992, 'Religion', 3, 4294967295, 'English', 6, 150, 'All'),
(3, '5AM Club', 'Robin Sharma', 'HarperCollins', 2018, 'Self-Help', 4, 4294967295, 'English', 25, 240, 'Young Adult'),
(4, 'My Sisters Keeper', 'Jodi Picoult', 'Atria', 2004, 'Friction', 1, 4294967295, 'English', 30, 32, 'Adult'),
(5, 'And Still I Rise', 'Maya Angelou', 'Virago Press Ltd', 1986, 'Literature', 2, 4294967295, 'English', 8, 179, 'All'),
(6, 'Thando', 'Nokwanda Dladla', 'Atria', 2009, 'Romance', 1, 672953907, 'Zulu', 12, 96, 'Adult'),
(7, 'Becoming', 'Michelle Obama', 'Atria', 2021, 'Self-Help', 1, 4294967295, 'English', 3, 295, 'Adult'),
(9, 'k', 'nn', 'm', 1996, 'Horror', 18, 458, 'kkj', 1, 556, 'Teen'),
(10, 'k', 'nn', 'm', 1996, 'Horror', 18, 458, 'kkj', 1, 556, 'Children'),
(11, 'jj', 'etry', '43', 1901, 'Religion', 3, 55, 'ret', 2, 4, 'Children');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`BookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `BookID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
