-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Id` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `ParentId` int(11) NOT NULL,
  `statusParent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Id`, `CreatedDate`, `Mname`, `ParentId`, `statusParent`) VALUES
(1, '2023-05-16 10:55:03', 'Abhijeet', 1, 1),
(2, '2023-05-16 10:57:07', 'Albrito', 1, 0),
(3, '2023-05-16 10:58:00', 'Bala', 2, 0),
(4, '2023-05-16 10:59:12', 'Sadashiv', 2, 0),
(5, '2023-05-16 11:00:08', 'Sid', 1, 0),
(6, '2023-05-16 11:00:50', 'Vasim Kudle', 1, 0),
(7, '2023-05-16 11:00:50', 'Sanel', 7, 1),
(8, '2023-05-16 11:04:32', 'Raghvan', 5, 0),
(9, '2023-05-16 11:04:32', 'Manjiri', 5, 0),
(10, '2023-05-16 11:05:39', 'arwind', 8, 0),
(11, '2023-05-16 11:06:26', 'Mohit', 7, 0),
(12, '2023-05-16 11:06:56', 'Kapil', 12, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
