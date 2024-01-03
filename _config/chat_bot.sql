-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 08:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_bot`
--

-- --------------------------------------------------------


--
-- Table structure for table `assc`
--

CREATE TABLE `assc` (
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `content_msg` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `name_room` varchar(255) NOT NULL,
  `creator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `name_room`, `creator`) VALUES
(1, 'MOHAMMED ELGH', 9),
(2, 'HAFSA', 9);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'ILYAS RAYHANI', 'g@g', '54fd1711209fb1c0781092374132c66e79e2241b'),
(2, 'MOHAMMED ELGH', 'elghanammohammed465@gmail.com', '54fd1711209fb1c0781092374132c66e79e2241b'),
(3, 'imade', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(4, 'MOHAMMED ELGH', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(5, 'ilyas', 'kh@kh', 'e26bcf26236dfb41bb52085a647fa2460d83ee2a'),
(6, 'nino', 'ADAM@ADAM', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, 'nino22', 'NINO22@nino', 'e56ce032480bb6b8f7c4673c0c8b7a14b7868377'),
(8, 'kawtar', 'kawtar@kawtar', 'c29e6eb30bd17d05d2594631c2a5af3ee19b5b08'),
(9, 'AZIZE', 'AZIZE@AZIZE', '1c7bdff03e75d450fc86065095ebe3254764af25'),
(10, 'AZIZE', 'AZIZE@AZIZE', '1c7bdff03e75d450fc86065095ebe3254764af25'),
(11, 'python', 'python@python', '4235227b51436ad86d07c7cf5d69bda2644984de');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assc`
--
ALTER TABLE `assc`
  ADD KEY `id_user` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assc`
--
ALTER TABLE `assc`
  ADD CONSTRAINT `room_id` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
