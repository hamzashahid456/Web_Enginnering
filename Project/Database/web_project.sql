-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2023 at 10:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Answers`
--

CREATE TABLE `Answers` (
  `Ans_ID` int(11) NOT NULL,
  `Q_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `answer` text NOT NULL,
  `reference` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Answers`
--

INSERT INTO `Answers` (`Ans_ID`, `Q_ID`, `userID`, `answer`, `reference`) VALUES
(1, 2, 3, 'Yeah....Blah Blah', 'BLAH'),
(2, 2, 3, 'NO....it not Blah Blah', 'BLAAAAHHH'),
(4, 2, 3, 'I dont think so', 'Its my observation'),
(19, 2, 3, 'Hmm that would be the last...', 'Thats good'),
(21, 3, 3, 'Chal bey', 'Thats good'),
(22, 3, 3, 'This is the last answer', 'dcdeve'),
(23, 6, 17, 'ddbhvher', 'jdbieebuierb');

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `Article_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `articleTopic` varchar(150) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Articles`
--

INSERT INTO `Articles` (`Article_ID`, `userID`, `articleTopic`, `article`) VALUES
(2, 3, 'Dummy Again', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 3, 'Dummy again and again', 'This is for testing'),
(4, 17, 'testing', 'This is for testing purpose'),
(5, 17, 'Testing', 'This is also for testing purpose');

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE `Questions` (
  `Q_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `questionTitle` varchar(255) DEFAULT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`Q_ID`, `userID`, `questionTitle`, `question`) VALUES
(1, 3, 'Hello', 'ffvfvf'),
(2, 3, 'Blah Blah', 'BlahBlahBlahBlah BlahBlahBlah'),
(3, 3, 'Hello', 'bceirycvrd'),
(5, 17, 'Name', 'kjbiebbieryeeyeer'),
(6, 17, 'Name', 'kjbiebbieryeeyeer');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userEmail` varchar(150) NOT NULL,
  `userPhone` bigint(20) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userID`, `username`, `userEmail`, `userPhone`, `userPassword`) VALUES
(3, 'Hamzaaa', 'hamzashahid4566@gmail.com', 30032398982, '1122334'),
(4, 'Hamza', 'hamzashahid4566@gmail.com', 30032398982, '21343'),
(17, 'hamxaaaa', 'hamzashahid4566@gmail.com', 30032398982, '1123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Answers`
--
ALTER TABLE `Answers`
  ADD PRIMARY KEY (`Ans_ID`),
  ADD KEY `fk_Q_ID` (`Q_ID`);

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`Article_ID`);

--
-- Indexes for table `Questions`
--
ALTER TABLE `Questions`
  ADD PRIMARY KEY (`Q_ID`),
  ADD KEY `fk_userID` (`userID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `idx_userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Answers`
--
ALTER TABLE `Answers`
  MODIFY `Ans_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `Article_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Questions`
--
ALTER TABLE `Questions`
  MODIFY `Q_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Answers`
--
ALTER TABLE `Answers`
  ADD CONSTRAINT `fk_Q_ID` FOREIGN KEY (`Q_ID`) REFERENCES `Questions` (`Q_ID`);

--
-- Constraints for table `Questions`
--
ALTER TABLE `Questions`
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`userID`) REFERENCES `User` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
