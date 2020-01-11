-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 04:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_library_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_no` varchar(10) NOT NULL,
  `Book_name` varchar(40) NOT NULL,
  `Author` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_no`, `Book_name`, `Author`) VALUES
('B001', 'Botany', 'Tanenbum'),
('B002', 'Zoology', 'kamal'),
('B003', 'physics_1st', 'Topon'),
('B004', 'physics_2nd', 'Nasir'),
('B005', 'chemisty_1st', 'Kazi Hosen'),
('B006', 'chemisty_2nd', 'Abu Hasan'),
('B007', 'Math_1st', 'Ketabuddin'),
('B008', 'Math_2nd', 'SM kabir'),
('B009', 'Statistics_1st', 'Hogg'),
('B010', 'Statistics_2nd', 'Tanis'),
('B011', 'English', 'Tomas Hadson'),
('B014', 'Automata', 'Hoffman');

-- --------------------------------------------------------

--
-- Table structure for table `iss_rec`
--

CREATE TABLE `iss_rec` (
  `iss_no` int(10) NOT NULL,
  `iss_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Mem_no` varchar(10) DEFAULT NULL,
  `Book_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iss_rec`
--

INSERT INTO `iss_rec` (`iss_no`, `iss_date`, `Mem_no`, `Book_no`) VALUES
(1, '2013-01-01 07:18:01', '1002', 'B003'),
(2, '2013-01-01 07:20:08', '1004', 'B005'),
(3, '2013-01-01 07:20:26', '1007', 'B006'),
(4, '2013-01-01 07:21:06', '1006', 'B007'),
(5, '2014-03-04 07:23:29', '1002', 'B008'),
(6, '2017-05-07 07:24:23', '1007', 'B007'),
(7, '2017-06-23 07:16:16', '1003', 'B002'),
(8, '2018-08-10 07:25:04', '1010', 'B008'),
(9, '2018-08-10 07:25:46', '1007', 'B009'),
(10, '2018-10-13 07:27:25', '1004', 'B010'),
(11, '2018-09-16 10:26:22', '1002', 'B001'),
(12, '2018-11-19 10:27:52', '1003', 'B009'),
(13, '2018-12-21 10:29:24', '1004', 'B009'),
(15, '2018-12-23 10:31:58', '1005', 'B007'),
(16, '2019-01-03 10:32:58', '1008', 'B008'),
(17, '2019-01-03 10:33:34', '1009', 'B001'),
(18, '2019-02-04 10:34:18', '1010', 'B002'),
(21, '2019-08-23 14:11:48', '1009', 'B002'),
(22, '2019-08-23 14:11:48', '1006', 'B008'),
(23, '2019-08-23 14:11:48', '1005', 'B005'),
(26, '2019-09-12 18:00:00', '1023', 'B014');

--
-- Triggers `iss_rec`
--
DELIMITER $$
CREATE TRIGGER `book_limit` BEFORE INSERT ON `iss_rec` FOR EACH ROW BEGIN
	IF (SELECT COUNT(*) FROM iss_rec WHERE iss_rec.mem_no = NEW.mem_no) = 3 
    THEN
		SIGNAL SQLSTATE "40000" 
        SET MESSAGE_TEXT='A Student cannot borrow more than 3 books!';
	END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `Mem_no` varchar(10) NOT NULL,
  `Stud_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`Mem_no`, `Stud_no`) VALUES
('1002', 'C033002'),
('1003', 'C033003'),
('1004', 'C033004'),
('1005', 'C033005'),
('1006', 'C033006'),
('1007', 'C033007'),
('1008', 'C033008'),
('1009', 'C033009'),
('1010', 'C033010'),
('1011', 'C033012'),
('1015', 'C033016'),
('1017', 'C033016'),
('1023', 'C033023');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stud_no` varchar(10) NOT NULL,
  `Stud_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stud_no`, `Stud_name`) VALUES
('C033002', 'Milan'),
('C033003', 'Sakib'),
('C033004', 'Sayma'),
('C033005', 'Tamim'),
('C033006', 'Mushfiq'),
('C033007', 'Rita'),
('C033008', 'Muktadir'),
('C033009', 'Soykot'),
('C033010', 'Sajib'),
('C033011', 'sahid'),
('C033012', 'Masud'),
('C033015', 'Mehrab'),
('C033016', 'Masud Rana'),
('C033023', 'Masrafi');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `starts_with_c` AFTER INSERT ON `student` FOR EACH ROW BEGIN
IF NOT (New.Stud_no LIKE 'C%')
THEN
DELETE FROM student WHERE (student.Stud_no=NEW.Stud_no);
END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_no`);

--
-- Indexes for table `iss_rec`
--
ALTER TABLE `iss_rec`
  ADD PRIMARY KEY (`iss_no`),
  ADD KEY `Mem_no` (`Mem_no`),
  ADD KEY `Book_no` (`Book_no`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`Mem_no`),
  ADD KEY `Stud_no` (`Stud_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Stud_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iss_rec`
--
ALTER TABLE `iss_rec`
  ADD CONSTRAINT `iss_rec_ibfk_1` FOREIGN KEY (`Mem_no`) REFERENCES `membership` (`Mem_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `iss_rec_ibfk_2` FOREIGN KEY (`Book_no`) REFERENCES `book` (`Book_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`Stud_no`) REFERENCES `student` (`Stud_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
