-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 10:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_book`
--

CREATE TABLE `guest_book` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_book`
--

INSERT INTO `guest_book` (`nomor`, `nama`, `profesi`, `email`, `comment`) VALUES
(7, 'Muhammad Ferry Munandar', 'Student', 'muhammadferrymunandar@gmail.com', 'Bagus Sekali'),
(8, 'Hikmah Maulida', 'Mahasiswa', 'hikmah@gmail.com', 'Kerennn'),
(9, 'Rifky Munandar', 'Wiraswasta', 'rifky@gmail.com', 'Tingkatkan lagi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_book`
--
ALTER TABLE `guest_book`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_book`
--
ALTER TABLE `guest_book`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
