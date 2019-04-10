-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 06:23 AM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nametable2`
--

CREATE TABLE `nametable2` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cidate` date NOT NULL,
  `codate` date NOT NULL,
  `guest` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `bed` varchar(20) NOT NULL,
  `breakfast` text NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nametable2`
--

INSERT INTO `nametable2` (`id`, `name`, `email`, `cidate`, `codate`, `guest`, `children`, `bed`, `breakfast`, `message`) VALUES
(1, '', '', '0000-00-00', '0000-00-00', 0, 0, 'Villa', 'Yes', 'adsf'),
(3, 'asdf', 'asdf@example.com', '2019-03-20', '2019-04-17', 3, 1, 'Villa', 'Yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(0, 'cstidham', '$2y$10$2kBBi.gdbs6J0D9QsL9tEOekU/5OWpsOVVX6Wy6dVUGw6qziGId4G', '2019-04-09 20:04:37'),
(0, 'mkkrajcev', '$2y$10$s7CuVrMICSxBjwtxOhPE8uFLdrSBDbbjnahB2PK7F49Ul/4XXn3gO', '2019-04-09 23:49:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nametable2`
--
ALTER TABLE `nametable2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nametable2`
--
ALTER TABLE `nametable2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
