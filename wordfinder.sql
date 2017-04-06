-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 11:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`) VALUES
(1, 'samsruti', 'd26273f8027bde9545079d02467da9063eb1b0c4d35c9e7ff605ed65687b18e7', '2ff7a2e121d46246', 'sam.sipun@gmail.com'),
(2, 'akash', '2c7317ec0f25af5d3e557339a3d7be2ac2d70c58b6e4a392a1f5c508373869e2', '6025d0cd49760bf5', 'akash@akash.com');

-- --------------------------------------------------------

--
-- Table structure for table `word_frequencies`
--

CREATE TABLE `word_frequencies` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `word` varchar(11) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `word_frequencies`
--

INSERT INTO `word_frequencies` (`id`, `username`, `word`, `TimeStamp`) VALUES
(3, '', 'sams', '2017-04-04 21:37:49'),
(4, '', 'test', '2017-04-04 21:45:14'),
(5, '', 'sam', '2017-04-05 12:41:42'),
(6, '', 'SAM', '2017-04-05 17:54:39'),
(7, 'samsruti', 'sam', '2017-04-05 18:29:38'),
(8, 'samsruti', 'World', '2017-04-05 18:30:41'),
(9, 'samsruti', 'World', '2017-04-05 18:31:20'),
(10, 'samsruti', 'World', '2017-04-05 18:33:33'),
(11, 'samsruti', 'World', '2017-04-05 18:33:56'),
(12, 'samsruti', 'love', '2017-04-05 21:11:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `word_frequencies`
--
ALTER TABLE `word_frequencies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `word_frequencies`
--
ALTER TABLE `word_frequencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
