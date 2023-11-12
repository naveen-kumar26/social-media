-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 04:03 PM
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
-- Database: `smallproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Name` varchar(100) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Name`, `Username`, `Password`, `Email`, `mobileno`, `user_id`) VALUES
('sample2', 'xyz', '456', 'xyz@gmail.com', '0', 2),
('', '', '', '', '0', 3),
('sample3', 'test3', '789', 'test3@gmail.com', '0', 4),
('sample5', 'test5', '111', 'test5@gmail.com', '0', 5),
('sample6', 'test6', '222', 'test6@gmail.com', '0', 6),
('arun', 'arun_17', '333', 'arun@gmail.com', '0', 7),
('Naveen Kumar Sankaramurthy', 'naveen_it', 'admin', 'nk26@gmail.com', '0', 8),
('', '', '', '', '0', 9),
('Ram kumar', 'ramu', '444', 'ramu@gmail.com', '0', 10),
('', '', '', '', '0', 14),
('', '', '', '', '0', 15),
('', '', '', '', '0', 16),
('sample7', 'test7', '555', 'test7@gmail.com', '0', 18),
('sample8', 'test8', '888', 'test8@gmail.com', '0', 19),
('Adhithya', 'adhi', '999', 'adhi@gmail.com', '0', 20),
('Aakash', 'mr.ak_123', '345', 'ak123@gmail.com', '2147483647', 21),
('sample9', 'test9', '999', 'test9@gmail.com', '2147483647', 22),
('sample9', 'test9', '999', 'test9@gmail.com', '2147483647', 26),
('sample9', 'test9', '999', 'test9@gmail.com', '2147483647', 27),
('jack robert', 'robi23._', '135', 'robj3@gmail.com', '2147483647', 28),
('jack robert', 'robi23._', '135', 'robj3@gmail.com', '2147483647', 29),
('naveennk', 'naveenrji', 'iloveyou', 'test5@gmail.com', '2147483647', 30),
('naveennk', 'naveen_.26', '789', 'naveen@gmail.com', '2147483647', 33);

-- --------------------------------------------------------

--
-- Table structure for table `user_frnds`
--

CREATE TABLE `user_frnds` (
  `Name` varchar(100) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Friend` varchar(100) NOT NULL,
  `Frndname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `topic` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `id` int(11) NOT NULL,
  `post_id` int(200) NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`period`, `topic`, `subject`, `message`, `id`, `post_id`, `user_name`) VALUES
('2023-10-23 15:02:03', 'today', 'project', 'wrtei \r\na mef', 0, 1, ''),
('2023-10-23 17:02:30', 'Food', 'My Food', 'I had my dinner  at my friends birthday party.\r\nIt was so tasty.', 0, 3, ''),
('2023-10-23 17:04:25', 'Food', 'My Food', 'I had my dinner  at my friends birthday party.\r\nIt was so tasty.', 0, 4, ''),
('2023-10-23 17:47:27', 'Tourism', 'MyVlog', 'I went a tour today', 0, 5, ''),
('2023-10-23 17:57:06', 'today', 'project', 'rwb', 0, 12, ''),
('2023-10-23 18:28:29', 'Festival', 'Diwali ', 'Wish you all a happy Diwali !\r\nStay blessed always !', 0, 13, ''),
('2023-10-23 19:03:00', 'Health', 'good Health', 'Take care of your health', 0, 17, 'test3'),
('2023-10-23 19:18:37', 'today', 'project', 'I completed my phase 1 of \r\nproject', 0, 18, 'test3'),
('2023-10-24 15:13:16', 'Education', 'My Exam', 'Today my semester exam commenced\r\nI prepared and wrote the exam well.\r\nExpecting better results', 0, 19, 'Mr.ak_123'),
('2023-11-02 05:25:34', 'Festival', 'Diwali', 'Happy to diwali to everyone!', 0, 20, 'naveen_.26'),
('2023-11-02 06:55:17', 'Festival', 'Diwali', 'Happy to diwali to everyone!', 0, 21, 'naveen_.26'),
('2023-11-02 06:57:36', 'today', 'project', 'this is a message\r\n', 0, 22, 'test3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
