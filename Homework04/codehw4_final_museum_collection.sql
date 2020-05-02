-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2020 at 02:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `artifacts`
--

CREATE TABLE `artifacts` (
  `artifact_id` int(11) NOT NULL,
  `artifact_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `creator` varchar(100) DEFAULT NULL,
  `year_created` int(4) DEFAULT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artifacts`
--

INSERT INTO `artifacts` (`artifact_id`, `artifact_name`, `type_id`, `creator`, `year_created`, `location_id`) VALUES
(1, 'Artifact Test 1', 1, 'Sam Stone', 2005, 3),
(2, 'Artifact Test 2', 3, 'Jesse Gonzalez', 1999, 5),
(3, 'Artifact Test 3', 4, 'Ralph Cohen', 2014, 7);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `artifact_id` int(11) DEFAULT NULL,
  `donation_amount` int(11) DEFAULT NULL,
  `donation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donation_id`, `donor_id`, `artifact_id`, `donation_amount`, `donation_date`) VALUES
(1, 1, 1, NULL, '2020-01-01'),
(2, 2, 2, NULL, '2019-11-15'),
(3, 3, 3, NULL, '2018-10-18'),
(4, 1, NULL, 500, '2014-01-01'),
(5, 2, NULL, 600, '2014-07-01'),
(6, 3, NULL, 700, '2015-08-10'),
(7, 1, NULL, 300, '2016-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `street_1` varchar(40) NOT NULL,
  `street_2` varchar(40) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` int(5) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_id`, `fname`, `lname`, `street_1`, `street_2`, `city`, `state`, `zip`, `phone`, `email`) VALUES
(1, 'Jane', 'Smith', '123 Main St', NULL, 'New York', 'NY', 10104, '5551284321', 'jane.smith@gmail.com'),
(2, 'George', 'Johnson', '222 Cherry Lane', NULL, 'New York', 'NY', 11214, '5551244322', 'george.johnson@gmail.com'),
(3, 'Richard', 'Taylor', '422 Maple Rd', NULL, 'New York', 'NY', 10111, '5551254323', 'richard.taylor@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `floor`, `room`) VALUES
(1, 1, 101),
(2, 1, 102),
(3, 1, 103),
(4, 1, 104),
(5, 1, 105),
(6, 1, 106),
(7, 2, 201),
(8, 2, 202),
(9, 2, 203),
(10, 2, 204),
(11, 2, 205),
(12, 2, 206),
(13, 3, 301),
(14, 3, 302),
(15, 3, 303),
(16, 3, 304),
(17, 3, 305),
(18, 3, 306);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_desc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_desc`) VALUES
(1, 'Ceramics'),
(2, 'Drawing'),
(3, 'Glass'),
(4, 'Installation'),
(5, 'Painting'),
(6, 'Photography'),
(7, 'Sculpture'),
(8, 'Textile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artifacts`
--
ALTER TABLE `artifacts`
  ADD PRIMARY KEY (`artifact_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `donor_id` (`donor_id`),
  ADD KEY `artifact_id` (`artifact_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artifacts`
--
ALTER TABLE `artifacts`
  MODIFY `artifact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artifacts`
--
ALTER TABLE `artifacts`
  ADD CONSTRAINT `artifacts_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `artifacts_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`donor_id`),
  ADD CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`artifact_id`) REFERENCES `artifacts` (`artifact_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
