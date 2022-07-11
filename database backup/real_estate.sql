-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 01:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(8, 'Abdul', 'abdulrehman499949@gmail.com', 'Hello Dear');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `buyer_name` varchar(30) NOT NULL,
  `rooms` int(4) NOT NULL,
  `kitchen` int(4) NOT NULL,
  `washrooms` int(4) NOT NULL,
  `garage` int(4) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `address`, `owner_name`, `buyer_name`, `rooms`, `kitchen`, `washrooms`, `garage`, `filename`) VALUES
(1, 'Rwp     ', 'Shahzad  ', 'Rwp     ', 3, 2, 1, 3, '23907.png'),
(2, 'bwp ', 'ahmed ', 'bwp ', 4, 4, 3, 3, '680Product should fetch from database according to the Categories.png'),
(3, 'kpk ', 'Haroon ', 'kpk ', 18, 4, 4, 4, '1815f764c7101221.image.jpg'),
(5, 'dsaklfj', 'sdklfjkl', 'dklsfj', 23, 3, 2, 2, ''),
(5, 'dsaklfj', 'sdklfjkl', 'dklsfj', 23, 3, 2, 2, ''),
(6, 'dsaklfj   ', 'sdklfjkl   ', 'dsaklfj   ', 23, 3, 2, 2, 'twitter.png'),
(8, 'the', 'dksfj', 'kdlsfj', 32, 23, 23, 32, '993twitter.png'),
(9, 'dlksfj', 'dkflj', 'dklsfj', 3, 3, 2, 2, '190Housefavicon.png'),
(10, 'dkj ', 'ali', 'dkj ', 3, 3, 3, 3, '414Housefavicon.png'),
(21, 'dklfj', 'dskljf', '', 0, 0, 0, 0, '681alexander-andrews-Dr6VBM0KNsw-unsplash.jpg'),
(36, 'isdaklfj', '', '', 0, 0, 0, 0, '72955c825_front.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'abdul', '$2y$10$14JXSjOvo5Qu3hyac48GdOMghR3qQNhuULsllYowQrr8wcUhCArjO', '2022-06-18 01:25:35'),
(2, 'skillf', '$2y$10$veQHjg0eqHQJDTzB9pVFfOEeUJhv4Fwd0lmtrp0CYbCz4hIZiC3fK', '2022-06-18 04:41:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
