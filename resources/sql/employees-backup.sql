-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 15, 2021 at 03:25 PM
-- Server version: 5.7.32
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `employees-backup`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `current_dept_emp`
-- (See below for the actual view)
--
CREATE TABLE `current_dept_emp` (
`emp_no` int(11)
,`dept_no` char(4)
,`from_date` date
,`to_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_no` char(4) NOT NULL,
  `dept_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_no`, `dept_name`) VALUES
('desi', 'Graphic Design'),
('engi', 'New Engineering'),
('sell', 'Selling'),
('mark', 'Social Media'),
('tech', 'Technologies');

-- --------------------------------------------------------

--
-- Table structure for table `dept_emp`
--

CREATE TABLE `dept_emp` (
  `emp_no` int(11) NOT NULL,
  `dept_no` char(4) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept_emp`
--

INSERT INTO `dept_emp` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(1, 'mark', '2017-11-16', '2021-07-12'),
(1, 'sell', '2015-03-10', '2021-07-12'),
(2, 'engi', '1999-01-10', '2019-11-12'),
(2, 'sell', '2017-04-25', '2021-07-12'),
(3, 'desi', '2012-01-12', '2020-01-12'),
(3, 'tech', '2017-04-25', '2021-07-12'),
(4, 'desi', '2010-09-10', '2021-07-12'),
(4, 'tech', '2010-09-10', '2017-01-12'),
(5, 'mark', '2021-01-14', '2021-07-12'),
(5, 'sell', '2021-01-14', '2021-07-12'),
(6, 'desi', '2020-09-05', '2021-07-12'),
(6, 'engi', '2018-03-12', '2020-11-12'),
(7, 'desi', '2011-04-04', '2020-11-12'),
(7, 'mark', '2016-02-15', '2021-07-12'),
(8, 'sell', '2007-09-12', '2020-11-12'),
(8, 'tech', '2020-11-12', '2021-07-12'),
(9, 'desi', '1996-11-15', '2011-02-04'),
(9, 'engi', '1996-11-15', '2021-07-12'),
(10, 'desi', '1990-02-25', '2004-02-04'),
(10, 'sell', '1990-02-25', '2021-07-12'),
(11, 'desi', '2002-01-15', '2021-07-12'),
(12, 'engi', '2010-11-02', '2014-11-02'),
(13, 'sell', '2001-11-23', '2021-07-12'),
(14, 'engi', '2015-03-04', '2018-10-24'),
(15, 'desi', '2014-03-18', '2021-07-12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `dept_emp_latest_date`
-- (See below for the actual view)
--
CREATE TABLE `dept_emp_latest_date` (
`emp_no` int(11)
,`from_date` date
,`to_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `dept_manager`
--

CREATE TABLE `dept_manager` (
  `emp_no` int(11) NOT NULL,
  `dept_no` char(4) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept_manager`
--

INSERT INTO `dept_manager` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(1, 'tech', '2015-03-10', '2021-07-12'),
(2, 'sell', '2017-04-25', '2021-07-12'),
(6, 'desi', '2020-09-05', '2021-07-12'),
(7, 'mark', '2016-02-15', '2021-07-12'),
(9, 'engi', '1996-11-15', '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_no` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_no`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES
(1, '1980-02-01', 'John', 'Doe', 'M', '2015-03-04'),
(2, '1960-07-20', 'Anna', 'Garcia', 'F', '1998-09-22'),
(3, '1985-08-19', 'Obdiah', 'Spam', 'M', '2012-01-12'),
(4, '1992-04-12', 'Aida', 'Gómez', 'F', '2010-09-10'),
(5, '1997-11-01', 'Ricard', 'Garcia', 'M', '2021-01-14'),
(6, '2000-01-22', 'Andrea', 'Sterly', 'F', '2018-03-12'),
(7, '1992-06-11', 'Paul', 'McCartney', 'M', '2011-04-04'),
(8, '1990-06-09', 'Ester', 'Cervantes', 'F', '2007-09-12'),
(9, '1974-10-23', 'Mike', 'Velcro', 'M', '1996-11-15'),
(10, '1970-08-24', 'Shirley', 'McLain', 'F', '1990-02-25'),
(11, '1959-12-11', 'John', 'Frusciante', 'M', '2002-01-15'),
(12, '1994-02-06', 'Tània', 'Sànchez', 'F', '2010-11-02'),
(13, '1982-06-30', 'Pol', 'Alfageme', 'M', '2001-11-23'),
(14, '1992-02-27', 'Núria', 'Gual', 'F', '2015-03-04'),
(15, '1993-05-03', 'Francesco', 'Simoncci', 'M', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `emp_no` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`emp_no`, `salary`, `from_date`, `to_date`) VALUES
(1, 5000, '2015-03-04', '2018-02-04'),
(1, 12000, '2018-02-04', '2021-07-12'),
(2, 50000, '1998-09-22', '2021-07-12'),
(3, 15000, '2012-01-12', '2015-02-14'),
(3, 15000, '2015-02-14', '2021-07-12'),
(4, 12000, '2010-09-10', '2021-07-12'),
(5, 24000, '2021-01-14', '2021-07-12'),
(6, 45000, '2018-03-12', '2021-07-12'),
(7, 8000, '2011-04-04', '2019-09-23'),
(7, 18000, '2019-09-23', '2021-07-12'),
(8, 30000, '2007-09-12', '2021-07-12'),
(9, 25000, '1996-11-15', '2008-06-18'),
(9, 45000, '2008-06-18', '2021-07-12'),
(10, 25000, '1990-02-25', '2021-07-12'),
(11, 30000, '2002-01-15', '2021-07-12'),
(12, 10000, '2010-11-02', '2020-09-03'),
(12, 23000, '2020-09-03', '2021-07-12'),
(13, 7000, '2001-11-23', '2021-07-12'),
(14, 7000, '2015-03-04', '2021-07-12'),
(15, 7000, '2014-03-18', '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `emp_no` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`emp_no`, `title`, `from_date`, `to_date`) VALUES
(1, 'BA in Computer Science', '2020-03-16', NULL),
(2, 'BA in Mechanical Engineering', '1995-06-16', NULL),
(3, 'BA in Design Systems', '2009-07-14', NULL),
(4, 'BA in Mechanical Engineering', '2006-09-22', NULL),
(5, 'BA in Design & Programming', '2015-02-14', NULL),
(6, 'BA in Administration', '2009-06-29', NULL),
(7, 'BA in Computer Science', '2020-09-15', NULL),
(8, 'BA in Technigal Engineering', '2003-05-27', NULL),
(9, 'BA in Design Systems', '2009-02-17', NULL),
(10, 'BA in Design Systems', '2004-06-15', NULL),
(11, 'BA in Administration', '2001-07-03', NULL),
(12, 'BA in Design & Programming', '2007-06-04', NULL),
(13, 'BA in Marketing', '2014-04-16', NULL),
(14, 'BA in Technigal Engineering', '2011-03-19', NULL),
(15, 'BA in Technigal Engineering', '2020-09-16', NULL);

-- --------------------------------------------------------

--
-- Structure for view `current_dept_emp`
--
DROP TABLE IF EXISTS `current_dept_emp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`Rick`@`localhost` SQL SECURITY DEFINER VIEW `current_dept_emp`  AS SELECT `l`.`emp_no` AS `emp_no`, `d`.`dept_no` AS `dept_no`, `l`.`from_date` AS `from_date`, `l`.`to_date` AS `to_date` FROM (`dept_emp` `d` join `dept_emp_latest_date` `l` on(((`d`.`emp_no` = `l`.`emp_no`) and (`d`.`from_date` = `l`.`from_date`) and (`l`.`to_date` = `d`.`to_date`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `dept_emp_latest_date`
--
DROP TABLE IF EXISTS `dept_emp_latest_date`;

CREATE ALGORITHM=UNDEFINED DEFINER=`Rick`@`localhost` SQL SECURITY DEFINER VIEW `dept_emp_latest_date`  AS SELECT `dept_emp`.`emp_no` AS `emp_no`, max(`dept_emp`.`from_date`) AS `from_date`, max(`dept_emp`.`to_date`) AS `to_date` FROM `dept_emp` GROUP BY `dept_emp`.`emp_no` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_no`),
  ADD UNIQUE KEY `dept_name` (`dept_name`);

--
-- Indexes for table `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD PRIMARY KEY (`emp_no`,`dept_no`),
  ADD KEY `dept_no` (`dept_no`);

--
-- Indexes for table `dept_manager`
--
ALTER TABLE `dept_manager`
  ADD PRIMARY KEY (`emp_no`,`dept_no`),
  ADD KEY `dept_no` (`dept_no`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`emp_no`,`from_date`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`emp_no`,`title`,`from_date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD CONSTRAINT `dept_emp_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `dept_emp_ibfk_2` FOREIGN KEY (`dept_no`) REFERENCES `departments` (`dept_no`) ON DELETE CASCADE;

--
-- Constraints for table `dept_manager`
--
ALTER TABLE `dept_manager`
  ADD CONSTRAINT `dept_manager_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `dept_manager_ibfk_2` FOREIGN KEY (`dept_no`) REFERENCES `departments` (`dept_no`) ON DELETE CASCADE;

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;

--
-- Constraints for table `titles`
--
ALTER TABLE `titles`
  ADD CONSTRAINT `titles_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;
