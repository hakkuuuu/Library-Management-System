-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 07:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_Id` int(11) NOT NULL,
  `book_title` varchar(45) DEFAULT NULL,
  `book_subject` varchar(45) DEFAULT NULL,
  `book_copies` varchar(45) DEFAULT NULL,
  `book_remarks` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrowers_record`
--

CREATE TABLE `borrowers_record` (
  `borrow_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `records_id` int(10) NOT NULL,
  `student_records` varchar(45) DEFAULT NULL,
  `book_recods` varchar(45) DEFAULT NULL,
  `return_records` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `return_recods`
--

CREATE TABLE `return_records` (
  `return_id` varchar(45) NOT NULL,
  `library_id` int(10) DEFAULT NULL,
  `borrow_id` int(10) DEFAULT NULL,
  `librarian_id` int(10) DEFAULT NULL,
  `record_id` int(10) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `book_copies` int(11) DEFAULT NULL,
  `return_remarks` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `librarian_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `library_id` int(11) NOT NULL,
  `stud_name` varchar(45) DEFAULT NULL,
  `stud_street` varchar(45) DEFAULT NULL,
  `stud_city` varchar(45) DEFAULT NULL,
  `borrow_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_Id`);

--
-- Indexes for table `borrowers_record`
--
ALTER TABLE `borrowers_record`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `library_id` (`library_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`records_id`);

--
-- Indexes for table `return_recods`
--
ALTER TABLE `return_recods`
  ADD PRIMARY KEY (`return_id`),
  ADD KEY `library_id` (`library_id`),
  ADD KEY `borrow_id` (`borrow_id`),
  ADD KEY `librarian_id` (`librarian_id`),
  ADD KEY `record_id` (`record_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`librarian_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`library_id`),
  ADD KEY `borrow_id` (`borrow_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrowers_record`
--
ALTER TABLE `borrowers_record`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `librarian_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowers_record`
--
ALTER TABLE `borrowers_record`
  ADD CONSTRAINT `borrowers_record_ibfk_1` FOREIGN KEY (`library_id`) REFERENCES `student` (`library_id`),
  ADD CONSTRAINT `borrowers_record_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_Id`);

--
-- Constraints for table `return_recods`
--
ALTER TABLE `return_recods`
  ADD CONSTRAINT `return_recods_ibfk_1` FOREIGN KEY (`library_id`) REFERENCES `student` (`library_id`),
  ADD CONSTRAINT `return_recods_ibfk_2` FOREIGN KEY (`borrow_id`) REFERENCES `borrowers_record` (`borrow_id`),
  ADD CONSTRAINT `return_recods_ibfk_3` FOREIGN KEY (`librarian_id`) REFERENCES `staff` (`librarian_Id`),
  ADD CONSTRAINT `return_recods_ibfk_4` FOREIGN KEY (`record_id`) REFERENCES `records` (`records_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`borrow_id`) REFERENCES `borrowers_record` (`borrow_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
