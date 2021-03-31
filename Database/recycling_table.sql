-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 12:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recyclables`
--

-- --------------------------------------------------------

--
-- Table structure for table `recycling_table`
--

CREATE TABLE `recycling_table` (
  `Item` varchar(20) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Image` mediumblob NOT NULL DEFAULT '0',
  `Recyclable` tinyint(1) NOT NULL,
  `Specifics` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recycling_table`
--

INSERT INTO `recycling_table` (`Item`, `Category`, `Image`, `Recyclable`, `Specifics`) VALUES
('Newspaper', 'Paper', 0x30, 1, 'If it is wet or soiled, do not recycle'),
('Books', 'Paper', 0x30, 1, 'Paper cover books can be recycled directly but the cover of hardback books should be removed and thrown in the trash.'),
('Magazines', 'Paper', 0x30, 1, 'Entire magazines can be recycled however, if they are wet, throw in trash. '),
('Cartons', 'Paper', 0x30, 1, 'Empty the carton as much as possible and throw the lid in trash. '),
('Bottles and Containe', 'Plastic', 0x30, 1, 'Make sure containers and bottles are empty, throw bottle cap and wrapper in trash before putting in curbside recycling'),
('Aluminum Cans', 'Aluminum', 0x30, 1, 'Can be recycled in local curbside recycling after rinsing cans.'),
('Cardboard', 'Cardboard', '', 1, 'Flatten cardboard boxes before recycling through local curbside recycling'),
('Glass Containers', 'Glass', 0x30, 1, 'Glass containers can be easily recycled as long as they are clean. '),
('Metal', 'Metal', 0x30, 1, 'As long as item is at least 50% metal, can be easily recycled.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
