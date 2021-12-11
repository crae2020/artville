-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 10:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artville`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--
create database artville;


CREATE TABLE `artists` (
    `artist_id` INT(11) NOT NULL,
    `fullname` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `art_style` VARCHAR(100) NOT NULL,
    `art_title` VARCHAR(100) NOT NULL,
    `year_created` INT(4) NOT NULL
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4;

-- --------------------------------------------------------

CREATE TABLE `users` (
    `id` INT(25) NOT NULL,
    `username` VARCHAR(225) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'George Mensah', 'georgeminyillah@gmail.com', '578ad8e10dc4edb52ff2bd4ec9bc93a3'),
(2, 'kekeli', 'k@gmail.com', 'ce92c299bb5d344bdac1f9c03396b34f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
