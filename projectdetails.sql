-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 12:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kfa_consulting`
--

-- --------------------------------------------------------

--
-- Table structure for table `projectdetails`
--

CREATE TABLE `projectdetails` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `live_demo` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectdetails`
--

INSERT INTO `projectdetails` (`id`, `image`, `title`, `category`, `description`, `customer`, `live_demo`, `date`, `tags`, `status`) VALUES
(1, '1645348333-99768649.jpg', 'Consumer Products', 'Marketing', '<p style=\"text-align: justify;\"><span style=\"color: #848484; font-family: \'Opne Sans\', sans-serif;\">The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites t', 'John Doe', 'www.livedemo.com', '21 August, 2015', 'Financial Services', 1),
(2, '1645350446-22796363.jpg', 'Financial Income', 'Finance', '<p><span style=\"color: #848484; font-family: \'Opne Sans\', sans-serif;\">The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites they feel positive about your ', 'Tasmina', 'www.livedemo.com', '21 August, 2016', 'Financial Services', 1),
(3, '1645350559-80426397.jpg', 'Business Growth', 'Growth', '<p style=\"text-align: justify;\"><span style=\"color: #848484; font-family: \'Opne Sans\', sans-serif;\">The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites t', 'Monika', 'www.livedemo.com', '21 August, 2015', 'Growth', 1),
(4, '1645350672-35532876.jpg', 'Latest Technology', 'Consulting', '<p style=\"text-align: justify;\"><span style=\"color: #848484; font-family: \'Opne Sans\', sans-serif;\">The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites t', 'Akter', 'www.livedemo.com', '21 August, 2015', 'Consulting', 1),
(5, '1645350746-65343865.jpg', 'Transporation Service', 'Marketing', '<p style=\"text-align: justify;\"><span style=\"color: #848484; font-family: \'Opne Sans\', sans-serif;\">The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites t', 'Sayeed', 'www.livedemo.com', '21 August, 2015', 'Marketing', 1),
(6, '1645350815-76769319.jpg', 'International Seminar', 'Consulting', '<p style=\"text-align: justify;\"><span style=\"color: #848484; font-family: \'Opne Sans\', sans-serif;\">The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites t', 'Adhora', 'www.livedemo.com', '21 August, 2015', 'Consulting', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projectdetails`
--
ALTER TABLE `projectdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projectdetails`
--
ALTER TABLE `projectdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
